<?php 

class Postulaciones extends Controller
{
	function __construct(){
		parent::__construct("ModelPostulaciones");
	}

	public function index()
	{
		$postulaciones = $this->model->getAllPostulaciones();
		// load views. within the views we can echo out $songs and $amount_of_songs easily
		require APP . 'views/_templates/header.php';
		require APP . 'views/postulaciones/postulaciones.php';
		require APP . 'views/_templates/footer.php';
	}

	public function ver_Postulacion($nro_Documento)
	{
		if (isset($nro_Documento)) {
			
			$postulaciones = $this->model->getPostulacion($nro_Documento);
			require APP . 'views/_templates/header.php';
			require APP . 'views/postulaciones/ver_postulacion.php';
			require APP . 'views/_templates/footer.php';
		}
		else
		{
			header('location:'. URL .'postulaciones/postulaciones');
		} 
	}

	public function editar_Postulacion($nro_Documento)
	{
		if (isset($nro_Documento)) {
			$postulaciones = $this->model->getPostulacion($nro_Documento);
			require APP . 'views/_templates/header.php';
			require APP . 'views/postulaciones/editar_postulacion.php';
			require APP . 'views/_templates/footer.php';
		}
		else
		{
			header('location:'. URL .'postulaciones/postulaciones');
		} 
	}

	public function updatePostulacion($value='')
	{
		# code...
	}


}

?>