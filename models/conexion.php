<?php 

class Conexion{

	public static function conectar(){

	    $link = new PDO("mysql:host=fdb32.awardspace.net;dbname=4133942_phpsqlcourse", "4133942_phpsqlcourse", "Oliverio_19351");
	    return $link;

    }

}

?>