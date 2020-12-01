<?php 

require_once "conexion.php";

	class ModeloPersonalSalud{


		/*=============================================
		=            REGISTRAR PERSONAL DE SALUD         =
		=============================================*/

		static public function mdlIngresarPersonalSalud($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, apellido, documento, profesion, especialidad) VALUES (:nombre, :apellido, :documento, :profesion, :especialidad)");

			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
			$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_STR);
			$stmt->bindParam(":profesion", $datos["profesion"], PDO::PARAM_STR);
			$stmt->bindParam(":especialidad", $datos["especialidad"], PDO::PARAM_STR);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;
		/*=====  Fin registro personal salud  ======*/
		}




		/*=============================================
		=            MOSTRAR PERSONAL DE SALUD        =
		=============================================*/
		
		static public function mdlMostrarPersonalSalud($tabla, $item , $valor){

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
		/*=====  Fin mostrar pacientes  ======*/
		}




		/*=============================================
		=            EDITAR PERSONAL DE SALUD         =
		=============================================*/

		static public function mdlEditarPersonalSalud($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellido = :apellido, documento = :documento, profesion = :profesion, especialidad = :especialidad WHERE id_personal_salud = :id_personal_salud");

			$stmt->bindParam(":id_personal_salud", $datos["id_personal_salud"], PDO::PARAM_INT);
			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
			$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_STR);
			$stmt->bindParam(":profesion", $datos["profesion"], PDO::PARAM_STR);
			$stmt->bindParam(":especialidad", $datos["especialidad"], PDO::PARAM_STR);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;
		/*=====  Fin registro personal salud  ======*/
		}


		/*=============================================
		=            BORRAR USUARIOS              =
		=============================================*/

		static public function mdlBorrarPersonalSalud($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_personal_salud = :id_personal_salud");

			$stmt -> bindParam(":id_personal_salud", $datos, PDO::PARAM_INT);

			if ($stmt -> execute()) {
				return "ok";
			}else{
				return "error";
			}

			$stmt -> close();
			$stmt = null;
		/*=====  Fin Borrar Usuario  ======*/
		}















/*===== FIN DE LA CLASE PERSONAL DE SALUD  ======*/

	}





 ?>