<?php 

class ModelAdministrador
{
	/**
     * @param object $db A PDO database connection
    */
	function __construct($db)
	{
		try {
			$this->db = $db;
		} catch (PDOException $e) {
			exit('Database connection could not be established.');
		}
	}

	    public static function getUserDataByUserNameOrEmail($user_name_or_email)
    {
      
    	$sql = "SELECT user_id, user_name, user_email FROM users
                                     WHERE (user_name = :user_name_or_email OR user_email = :user_name_or_email)
                                           AND user_provider_type = :provider_type LIMIT 1";
        $query = $this->$db->prepare($sql);
        $parameters = array(':user_name_or_email' => $user_name_or_email, ':provider_type' => 'DEFAULT');
        $query->execute($parameters );

        return $query->fetch();
    }



}

?>