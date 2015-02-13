<?php 
	/**
	* 
	*/
	class ModelLogin
	{
		
		function __construct($db)
		{
			try {
				$this->db = $db;
			} catch (PDOException $e) {
				exit('Database connection could not be established.');
			}
		}

		public static function Login($usuario, $contrasenia, $recordarme = null)
		{
			if (empty($usuario) or empty($contrasenia)) {
				Session::add('feedback_negative', Text::get('FEEDBACK_USERNAME_OR_PASSWORD_FIELD_EMPTY'));
				return false;
			}
			if (!$result) {
				Session::add('feedback_negative', Text::get('FEEDBACK_LOGIN_FAILED'));
				return false;
			}

        // block login attempt if somebody has already failed 3 times and the last login attempt is less than 30sec ago
			if (($result->user_failed_logins >= 3) AND ($result->user_last_failed_login > (time() - 30))) {
				Session::add('feedback_negative', Text::get('FEEDBACK_PASSWORD_WRONG_3_TIMES'));
				return false;
			}

        // if hash of provided password does NOT match the hash in the database: +1 failed-login counter
			if (!password_verify($user_password, $result->user_password_hash)) {
				LoginModel::incrementFailedLoginCounterOfUser($user_name);
            // we say "password wrong" here, but less details like "login failed" would be better (= less information)
				Session::add('feedback_negative', Text::get('FEEDBACK_PASSWORD_WRONG'));
				return false;
			}

        // from here we assume that the password hash fits the database password hash, as password_verify() was true

        // if user is not active (= has not verified account by verification mail)
			if ($result->user_active != 1) {
				Session::add('feedback_negative', Text::get('FEEDBACK_ACCOUNT_NOT_ACTIVATED_YET'));
				return false;
			}

        // reset the failed login counter for that user (if necessary)
			if ($result->user_last_failed_login > 0) {
				LoginModel::resetFailedLoginCounterOfUser($user_name);
			}

        // save timestamp of this login in the database line of that user
			LoginModel::saveTimestampOfLoginOfUser($user_name);

        // if user has checked the "remember me" checkbox, then write token into database and into cookie
			if ($recordarme) {
				LoginModel::setRememberMeInDatabaseAndCookie($result->user_id);
			}

        // successfully logged in, so we write all necessary data into the session and set "user_logged_in" to true
			LoginModel::setSuccessfulLoginIntoSession(
				$result->user_id, $result->user_name, $result->user_email, $result->user_account_type
				);

        // return true to make clear the login was successful
        // maybe do this in dependence of setSuccessfulLoginIntoSession ?
			return true;

			$result = ModelAdministrador::getUserDataByUsername($user_name);
		}

		public static function setSuccessfulLoginIntoSession($user_id, $user_name, $user_email, $user_account_type)
		{
			Session::init();
			Session::set('user_id', $user_id);
			Session::set('user_name', $user_name);
			Session::set('user_email', $user_email);
			Session::set('user_account_type', $user_account_type);
			Session::set('user_provider_type', 'DEFAULT');

        // get and set avatars
			Session::set('user_avatar_file', AvatarModel::getPublicUserAvatarFilePathByUserId($user_id));
			Session::set('user_gravatar_image_url', AvatarModel::getGravatarLinkByEmail($user_email));

        // finally, set user as logged-in
			Session::set('user_logged_in', true);
		}

    /**
     * Increments the failed-login counter of a user
     *
     * @param $user_name
     */
    public static function incrementFailedLoginCounterOfUser($usuario)
    {
    	$database = DatabaseFactory::getFactory()->getConnection();

    	$sql = "UPDATE administrador
    	SET user_failed_logins = user_failed_logins+1, user_last_failed_login = :user_last_failed_login
    	WHERE user_name = :user_name OR user_email = :usuario
    	LIMIT 1";
    	$sth = $database->prepare($sql);
    	$sth->execute(array(':user_name' => $user_name, ':user_last_failed_login' => time() ));
    }

    /**
     * Resets the failed-login counter of a user back to 0
     *
     * @param $user_name
     */
    public static function resetFailedLoginCounterOfUser($user_name)
    {
    	$database = DatabaseFactory::getFactory()->getConnection();

    	$sql = "UPDATE users
    	SET user_failed_logins = 0, user_last_failed_login = NULL
    	WHERE user_name = :user_name AND user_failed_logins != 0
    	LIMIT 1";
    	$sth = $database->prepare($sql);
    	$sth->execute(array(':user_name' => $user_name));
    }

    /**
     * Write timestamp of this login into database (we only write a "real" login via login form into the database,
     * not the session-login on every page request
     *
     * @param $user_name
     */
    public static function saveTimestampOfLoginOfUser($user_name)
    {
    	$database = DatabaseFactory::getFactory()->getConnection();

    	$sql = "UPDATE users SET user_last_login_timestamp = :user_last_login_timestamp
    	WHERE user_name = :user_name LIMIT 1";
    	$sth = $database->prepare($sql);
    	$sth->execute(array(':user_name' => $user_name, ':user_last_login_timestamp' => time()));
    }

    /**
     * Write remember-me token into database and into cookie
     * Maybe splitting this into database and cookie part ?
     *
     * @param $user_id
     */
    public static function setRememberMeInDatabaseAndCookie($user_id)
    {
    	$database = DatabaseFactory::getFactory()->getConnection();

        // generate 64 char random string
    	$random_token_string = hash('sha256', mt_rand());

        // write that token into database
    	$sql = "UPDATE users SET user_remember_me_token = :user_remember_me_token WHERE user_id = :user_id LIMIT 1";
    	$sth = $database->prepare($sql);
    	$sth->execute(array(':user_remember_me_token' => $random_token_string, ':user_id' => $user_id));

        // generate cookie string that consists of user id, random string and combined hash of both
    	$cookie_string_first_part = $user_id . ':' . $random_token_string;
    	$cookie_string_hash = hash('sha256', $cookie_string_first_part);
    	$cookie_string = $cookie_string_first_part . ':' . $cookie_string_hash;

        // set cookie
    	setcookie('remember_me', $cookie_string, time() + Config::get('COOKIE_RUNTIME'), Config::get('COOKIE_PATH'));
    }

    /**
     * Deletes the cookie
     * It's necessary to split deleteCookie() and logout() as cookies are deleted without logging out too!
     * Sets the remember-me-cookie to ten years ago (3600sec * 24 hours * 365 days * 10).
     * that's obviously the best practice to kill a cookie @see http://stackoverflow.com/a/686166/1114320
     */
    public static function deleteCookie()
    {
    	setcookie('remember_me', false, time() - (3600 * 24 * 3650), Config::get('COOKIE_PATH'));
    }

    /**
     * Returns the current state of the user's login
     *
     * @return bool user's login status
     */
    public static function isUserLoggedIn()
    {
    	return Session::userIsLoggedIn();
    }
    public static function logout()
    {
    	ModelLogin::deleteCookie();
    	Session::destroy();
    }

}





?>