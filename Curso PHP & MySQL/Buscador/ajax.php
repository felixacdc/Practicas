<?php

include ('class.Conexion.php');

/**
* 
*/
class Ajax
{
	
    public $buscador;
    
	public function Buscar($a)
	{
        $db = new Conexion();
        
		$this->buscador = $db->real_escape_string($a);
        
        $sql = $db->query("SELECT * FROM autos WHERE nombre like '%$this->buscador%'");
        
        while ( $array = $db->recorrer($sql) ) {
            $resultado[] = $array['nombre'];
        }
        
        return $resultado;
	}
}

$busqueda = new Ajax();

echo json_encode($busqueda->Buscar($_GET['term']));
