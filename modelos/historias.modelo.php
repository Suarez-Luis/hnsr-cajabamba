<?php 

require_once "conexion.php";

	class ModeloHistoriasClinicas{

		/*=============================================
		=            MOSTRAR HISTORIAS CLINICAS       =
		=============================================*/
		
		static public function mdlMostrarHistoriasClinicas($tabla, $item , $valor){

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
		=            REGISTRAR HISTORIAS CLINICAS         =
		=============================================*/

		static public function mdlIngresarHistoriasClinicas($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_usuario, id_paciente, tipo, atenciones) VALUES (:id_usuario, :id_paciente, :tipo, :atenciones)");

			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
			$stmt->bindParam(":id_paciente", $datos["id_paciente"], PDO::PARAM_STR);
			$stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$stmt->bindParam(":atenciones", $datos["atenciones"], PDO::PARAM_STR);

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
		=   EDITAR CAMBIOS DE LA  HISTORIAS CLINICAS  =
		=============================================*/

		static public function mdlEditarHistoriasClinicas($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_usuario = :id_usuario, id_paciente = :id_paciente, tipo = :tipo, atenciones = :atenciones WHERE id_historia_clinica = :id_historia_clinica");

			$stmt->bindParam(":id_historia_clinica", $datos["id_historia_clinica"], PDO::PARAM_INT);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
			// $stmt->bindParam(":numero_historia", $datos["numero_historia"], PDO::PARAM_INT);
			$stmt->bindParam(":id_paciente", $datos["id_paciente"], PDO::PARAM_STR);
			$stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
			$stmt->bindParam(":atenciones", $datos["atenciones"], PDO::PARAM_STR);

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
		=            BORRAR PACIENTES              =
		=============================================*/

		static public function mdlBorrarHistoriasClinicas($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_historia_clinica = :id_historia_clinica");

			$stmt -> bindParam(":id_historia_clinica", $datos, PDO::PARAM_INT);

			if ($stmt -> execute()) {
				return "ok";
			}else{
				return "error";
			}

			$stmt -> close();
			$stmt = null;
		/*=====  Fin Borrar Paciente  ======*/
		}


	/*=====  Fin Modelo Historia Clinica  ======*/
	}

 ?>