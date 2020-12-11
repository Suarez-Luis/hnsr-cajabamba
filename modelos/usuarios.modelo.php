<?php 

require_once "conexion.php";

	class ModeloUsuarios{

		/*=============================================
		=            MOSTRAR USUARIOS         =
		=============================================*/
		
		static public function mdlMostrarUsuarios($tabla, $item , $valor){

			if ($item != null) {

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

				$stmt -> execute();

				return $stmt -> fetch();
				
			}else{

				$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

				$stmt -> execute();

				return $stmt -> fetchAll();

			}

			

			$stmt -> close();

			$stmt = null;		
		/*=====  Fin mostrar Usuario  ======*/
		}


		/*=============================================
		=            REGISTRO USUARIOS         =
		=============================================*/

		static public function mdlIngresarUsuario($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, apellido, usuario, password, perfil, foto) VALUES (:nombre, :apellido, :usuario, :password, :perfil, :foto)");

			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
			$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
			$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
			$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
			$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;
		/*=====  Fin Ingresar Usuario  ======*/
		}


		/*=============================================
		=            EDITAR USUARIOS         =
		=============================================*/

		public function mdlEditarUsuario($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellido = :apellido, password = :password, perfil = :perfil, foto = :foto WHERE usuario = :usuario");

			$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt -> bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
			$stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
			$stmt -> bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
			$stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
			$stmt -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);

			if ($stmt -> execute()){
				
				return "ok";
			}else{
				return "error";
			}

			$stmt -> close();
			$stmt = null;
		/*=====  Fin Editar Usuario  ======*/	
		}


		/*=============================================
		=            ACTUALIZAR USUARIOS / GUARDAR EL ULTIMO INICIO DE SESION        =
		=============================================*/

		static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

			$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
			$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

			if ($stmt -> execute()) {
				return "ok";
			}else{
				return "error";
			}

			$stmt -> close();
			$stmt = null;
		/*=====  ACTUALIZAR USUARIOS / GUARDAR EL ULTIMO INICIO DE SESION  ======*/
		}


		/*=============================================
		=            BORRAR USUARIOS              =
		=============================================*/

		static public function mdlBorrarUsario($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_usuario = :id_usuario");

			$stmt -> bindParam(":id_usuario", $datos, PDO::PARAM_INT);

			if ($stmt -> execute()) {
				return "ok";
			}else{
				return "error";
			}

			$stmt -> close();
			$stmt = null;
		/*=====  Fin Borrar Usuario  ======*/
		}


		



/*=====  FINAL CLASE MODELO USUARIO  ======*/
	}


 ?>