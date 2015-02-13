<?php 

class ModelMateriales
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

	public function addMaterial($id_Material, $tipo_Elemento, $tipo_Embalaje, $marca,$proveedor,$nombre_material,$fecha_Ingreso, $descripcion)
    {
        $sql = "INSERT INTO tbl_materiales (id_Material, tipo_Elemento, tipo_Embalaje,marca,proveedor,nombre_material,fecha_Ingreso, descripcion)) VALUES (:id_Material, :tipo_Elemento, :tipo_Embalaje, :marca,:proveedor,:nombre_material,:fecha_Ingreso, :descripcion)";
        $query = $this->db->prepare($sql);
        $parameters = array(':id_Material' => strip_tags($id_Material), ':tipo_Elemento' => strip_tags($tipo_Elemento),
         ':tipo_Embalaje' => strip_tags($tipo_Embalaje),':marca' => strip_tags($marca),':proveedor' => strip_tags($proveedor),
         ':nombre_material' => strip_tags($nombre_material),':fecha_Ingreso' => strip_tags($fecha_Ingreso),':descripcion' => strip_tags($descripcion));

        // useful for debugging: you can see the SQL behind above construction by using:
         echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }



}

?>