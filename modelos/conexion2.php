<?php 

	class Conexion{

		static public function conectar(){

			$link = new PDO("mysql:host=sql305.byethost32.com;dbname=b32_27237066_hnsr",
							"b32_27237066",
							"SUAREZ1990LS");

			$link -> exec("set names utf8");

			return $link;


		}
	}


 ?>