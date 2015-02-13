<?php 

class Prestamos extends Controller
{
	function __construct(){
		parent::__construct("ModelPrestamos");
	}

	public function index()
	{
		// load views. within the views we can echo out $songs and $amount_of_songs easily
		require APP . 'views/_templates/header.php';
		require APP . 'views/prestamos/prestamos.php';
		require APP . 'views/_templates/footer.php';
	}


}

?>