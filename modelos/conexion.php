<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost:3307;dbname=ecommerce",
						"root",
						"12345",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}



