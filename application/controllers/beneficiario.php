
<?php 
	/**
	* 
	*/
class Beneficiario extends Controller
{
	function __construct(){
		parent::__construct("modelBeneficiario");
	}

	public function index()
	{
		// load views. within the views we can echo out $songs and $amount_of_songs easily
		require APP . 'views/_templates/header.php';
		require APP . 'views/beneficiarios/beneficiario.php';
		require APP . 'views/_templates/footer.php';
	}


}



 ?>