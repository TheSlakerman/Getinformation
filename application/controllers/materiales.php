<?php 

class Materiales extends Controller
{
	function __construct(){
		parent::__construct("ModelMateriales");
	}

	public function index()
	{
		// load views. within the views we can echo out $songs and $amount_of_songs easily
		require APP . 'views/_templates/header.php';
		require APP . 'views/materiales/materiales.php';
		require APP . 'views/_templates/footer.php';
	}

	public function addMaterial()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["btn_Material"])) {
            // do addSong() in model/model.php
            $this->model->addMaterial($_POST["id_Material"], $_POST["tipo_Elemento"],  $_POST["tipo_Embalaje"],$_POST["marca"],$_POST["proveedor"],  $_POST["nombre_material"],$_POST["fecha_Ingreso"], $_POST["descripcion"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'materiales/materiales');
    }

}

?>

