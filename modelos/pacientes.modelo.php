<?php 

require_once "conexion.php";

	class ModeloPacientes{


		/*=============================================
		=            REGISTRAR PACIENTES         =
		=============================================*/

		static public function mdlIngresarPaciente($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(documento, nombre1, nombre2, nombre3, apellido_pat, apellido_mat, fecha_nacimiento, telefono) VALUES (:documento, :nombre1, :nombre2, :nombre3, :apellido_pat, :apellido_mat, :fecha_nacimiento, :telefono)");

			$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre1", $datos["nombre1"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre2", $datos["nombre2"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre3", $datos["nombre3"], PDO::PARAM_STR);
			$stmt->bindParam(":apellido_pat", $datos["apellido_pat"], PDO::PARAM_STR);
			$stmt->bindParam(":apellido_mat", $datos["apellido_mat"], PDO::PARAM_STR);
			$stmt->bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);
			$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;
		/*=====  FIN registro pacientes  ======*/
		}



		/*=============================================
		=            MOSTRAR PACIENTES         =
		=============================================*/
		
		static public function mdlMostrarPacientes($tabla, $item , $valor){

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
		=            EDITAR PACIENTES         =
		=============================================*/

		static public function mdlEditarPaciente($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET documento = :documento, nombre1 = :nombre1, nombre2 = :nombre2, nombre3 = :nombre3, apellido_pat = :apellido_pat, apellido_mat = :apellido_mat, fecha_nacimiento = :fecha_nacimiento, telefono = :telefono WHERE id_paciente = :id_paciente");

			$stmt->bindParam(":id_paciente", $datos["id_paciente"], PDO::PARAM_INT);
			$stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre1", $datos["nombre1"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre2", $datos["nombre2"], PDO::PARAM_STR);
			$stmt->bindParam(":nombre3", $datos["nombre3"], PDO::PARAM_STR);
			$stmt->bindParam(":apellido_pat", $datos["apellido_pat"], PDO::PARAM_STR);
			$stmt->bindParam(":apellido_mat", $datos["apellido_mat"], PDO::PARAM_STR);
			$stmt->bindParam(":fecha_nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);
			$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);

			if ($stmt->execute()) {
				
				return "ok";
			}else{

				return "error";
			}

			$stmt->close();
			$stmt = null;
		/*=====  FIN editar pacientes  ======*/
		}



		/*=============================================
		=            BORRAR PACIENTES              =
		=============================================*/

		static public function mdlBorrarPacientes($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_paciente = :id_paciente");

			$stmt -> bindParam(":id_paciente", $datos, PDO::PARAM_INT);

			if ($stmt -> execute()) {
				return "ok";
			}else{
				return "error";
			}

			$stmt -> close();
			$stmt = null;
		/*=====  Fin Borrar Paciente  ======*/
		}

















/*===== FIN DE LA CLASE PERSONAL DE SALUD  ======*/

	}





 ?>