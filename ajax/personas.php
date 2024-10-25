<?php 
<<<<<<< HEAD
=======

>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
require_once "../modelos/persona.php";

$persona=new persona();

$idpersona=isset($_POST["idpersona"])? limpiarCadena($_POST["idpersona"]):"";
$tipo_persona=isset($_POST["tipo_persona"])? limpiarCadena($_POST["tipo_persona"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$tipo_documento=isset($_POST["tipo_documento"])? limpiarCadena($_POST["tipo_documento"]):"";
$num_documento=isset($_POST["num_documento"])? limpiarCadena($_POST["num_documento"]):"";
$direccion=isset($_POST["direccion"])? limpiarCadena($_POST["direccion"]):"";
$telefono=isset($_POST["telefono"])? limpiarCadena($_POST["telefono"]):"";
$email=isset($_POST["email"])? limpiarCadena($_POST["email"]):"";

<<<<<<< HEAD




switch ($_GET["op"]){
	case 'guardaryeditar':

    
		if (empty($idpersona)){
			$rspta=$persona->insertar($tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email);
			echo $rspta ? "persona registrado" : "la persona no se pudo registrar";
		}
		else {
			$rspta=$persona->editar($idpersona,$tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email);
			echo $rspta ? "persona actualizado" : "persona no se pudo actualizar";
=======
switch ($_GET["op"]){
	case 'guardaryeditar':

		if (empty($idpersona)){
			$rspta=$persona->insertar($tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email);
			echo $rspta ? "Persona registrada" : "La persona no se pudo registrar";
		}
		else {
			$rspta=$persona->editar($idpersona,$tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email);
			echo $rspta ? "Persona actualizada" : "Persona no se pudo actualizar";
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
		}
	break;

	case 'eliminar':
		$rspta=$persona->eliminar($idpersona);
<<<<<<< HEAD
 		echo $rspta ? "persona eliminada" : "la persona no se puede eliminar";
 		break;
	break;



=======
 		echo $rspta ? "Persona eliminada" : "La persona no se puede eliminar";
 		break;
	break;

>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
	case 'mostrar':
		$rspta=$persona->mostrar($idpersona);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;
	break;

	case 'listarp':
		$rspta=$persona->listarp();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->idpersona.')"><i class="fa fa-pencil"></i></button>'.
<<<<<<< HEAD
 				' <button class="btn btn-danger" onclick="eliminar('.$reg->idpersona.')"><i class="fa fa-trash"></i></button>',
 					
 				"1"=>$reg->nombre,
=======
 					' <button class="btn btn-danger" onclick="eliminar('.$reg->idpersona.')"><i class="fa fa-trash"></i></button>',
 				
                "1"=>$reg->nombre,
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
 				"2"=>$reg->tipo_documento,
 				"3"=>$reg->num_documento,
 				"4"=>$reg->telefono,
                "5"=>$reg->email
<<<<<<< HEAD
 				
=======
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;

<<<<<<< HEAD
    	case 'listarc':
=======
    case 'listarc':
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
		$rspta=$persona->listarc();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>'<button class="btn btn-warning" onclick="mostrar('.$reg->idpersona.')"><i class="fa fa-pencil"></i></button>'.
<<<<<<< HEAD
 				' <button class="btn btn-danger" onclick="eliminar('.$reg->idpersona.')"><i class="fa fa-trash"></i></button>',
 					
 				"1"=>$reg->nombre,
=======
 					' <button class="btn btn-danger" onclick="eliminar('.$reg->idpersona.')"><i class="fa fa-trash"></i></button>',
 				
                "1"=>$reg->nombre,
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
 				"2"=>$reg->tipo_documento,
 				"3"=>$reg->num_documento,
 				"4"=>$reg->telefono,
                "5"=>$reg->email
<<<<<<< HEAD
 				
=======
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
<<<<<<< HEAD

 





=======
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
}
?>