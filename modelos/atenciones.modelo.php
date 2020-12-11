<?php 

require_once "conexion.php";

	class ModeloAtenciones{

		/*=============================================
		=            MOSTRAR ATENCIONES       =
		=============================================*/
		
		static public function mdlMostrarAtenciones($tabla, $item , $valor){

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
		=            REGISTRAR ATENCIONES         =
		=============================================*/

		static public function mdlIngresarAtenciones($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo_atencion, id_usuario, id_personal_salud, id_paciente, ups, servicio, especialidad, diagnostico, imagen_diagnostico, imagen_diagnostico2, imagen_diagnostico3, imagen_diagnostico4, fecha_atencion) VALUES (:codigo_atencion, :id_usuario, :id_personal_salud, :id_paciente, :ups, :servicio, :especialidad, :diagnostico, :imagen_diagnostico, :imagen_diagnostico2, :imagen_diagnostico3, :imagen_diagnostico4, :fecha_atencion)");

			$stmt->bindParam(":codigo_atencion", $datos["codigo_atencion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_STR);
			$stmt->bindParam(":id_personal_salud", $datos["id_personal_salud"], PDO::PARAM_STR);
			$stmt->bindParam(":id_paciente", $datos["id_paciente"], PDO::PARAM_STR);
			$stmt->bindParam(":ups", $datos["ups"], PDO::PARAM_STR);
			$stmt->bindParam(":servicio", $datos["servicio"], PDO::PARAM_STR);
			$stmt->bindParam(":especialidad", $datos["especialidad"], PDO::PARAM_STR);
			$stmt->bindParam(":diagnostico", $datos["diagnostico"], PDO::PARAM_STR);
			$stmt->bindParam(":imagen_diagnostico", $datos["imagen_diagnostico"], PDO::PARAM_STR);
			$stmt->bindParam(":imagen_diagnostico2", $datos["imagen_diagnostico2"], PDO::PARAM_STR);
			$stmt->bindParam(":imagen_diagnostico3", $datos["imagen_diagnostico3"], PDO::PARAM_STR);
			$stmt->bindParam(":imagen_diagnostico4", $datos["imagen_diagnostico4"], PDO::PARAM_STR);
			$stmt->bindParam(":fecha_atencion", $datos["fecha_atencion"], PDO::PARAM_STR);

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
		=            EDITAR ATENCIONES         =
		=============================================*/

		static public function mdlEditarAtenciones($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET codigo_atencion = :codigo_atencion, id_usuario = :id_usuario, id_personal_salud = :id_personal_salud, id_paciente = :id_paciente, ups = :ups, servicio = :servicio, especialidad = :especialidad, diagnostico = :diagnostico, imagen_diagnostico = :imagen_diagnostico, fecha_atencion = :fecha_atencion WHERE id_atencion = :id_atencion");

			$stmt->bindParam(":id_atencion", $datos["id_atencion"], PDO::PARAM_INT);
			$stmt->bindParam(":codigo_atencion", $datos["codigo_atencion"], PDO::PARAM_STR);
			$stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_STR);
			$stmt->bindParam(":id_personal_salud", $datos["id_personal_salud"], PDO::PARAM_STR);
			$stmt->bindParam(":id_paciente", $datos["id_paciente"], PDO::PARAM_STR);
			$stmt->bindParam(":ups", $datos["ups"], PDO::PARAM_STR);
			$stmt->bindParam(":servicio", $datos["servicio"], PDO::PARAM_STR);
			$stmt->bindParam(":especialidad", $datos["especialidad"], PDO::PARAM_STR);
			$stmt->bindParam(":diagnostico", $datos["diagnostico"], PDO::PARAM_STR);
			$stmt -> bindParam(":imagen_diagnostico", $datos["imagen_diagnostico"], PDO::PARAM_STR);
			$stmt->bindParam(":fecha_atencion", $datos["fecha_atencion"], PDO::PARAM_STR);

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

		static public function mdlBorrarAtenciones($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_atencion = :id_atencion");

			$stmt -> bindParam(":id_atencion", $datos, PDO::PARAM_INT);

			if ($stmt -> execute()) {
				return "ok";
			}else{
				return "error";
			}

			$stmt -> close();
			$stmt = null;
		/*=====  Fin Borrar Usuario  ======*/
		}









	}