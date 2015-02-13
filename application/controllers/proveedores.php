<?php 

class Proveedores extends Controller
{
	function __construct(){
		parent::__construct("ModelProveedores");
	}

	public function index()
	{
		// load views. within the views we can echo out $songs and $amount_of_songs easily
		require APP . 'views/_templates/header.php';
		require APP . 'views/proveedores/proveedores.php';
		require APP . 'views/_templates/footer.php';
	}


}

?>