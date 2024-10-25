<?php 


require_once "../configuracion/Conexion.php";


class persona{
<<<<<<< HEAD



    public  function __contruct(){


    }



=======
    
    public function __construct() {
        
    }    
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2

    public function insertar($tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email){

        $sql="INSERT INTO persona(tipo_persona,nombre,tipo_documento,num_documento,direccion,telefono,email) VALUES('$tipo_persona','$nombre','$tipo_documento','$num_documento','$direccion','$telefono','$email')";
        return ejecutarConsulta($sql);

    }

    public function editar($idpersona,$tipo_persona,$nombre,$tipo_documento,$num_documento,$direccion,$telefono,$email){

<<<<<<< HEAD
       	$sql="UPDATE persona SET tipo_persona='$tipo_persona',nombre='$nombre',tipo_documento='$tipo_documento',num_documento='$num_documento',direccion='$direccion',telefono='$telefono',email='$email' WHERE idpersona='$idpersona'";
		return ejecutarConsulta($sql);
=======
        $sql="UPDATE persona SET tipo_persona='$tipo_persona' ,nombre='$nombre',
        tipo_documento='$tipo_documento',num_documento='$num_documento',direccion='$direccion',telefono='$telefono',email='$email' WHERE idpersona='$idpersona'";
        return ejecutarConsulta($sql);
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2

    }

    public function eliminar($idpersona){

<<<<<<< HEAD
       	$sql="DELETE FROM persona WHERE idpersona='$idpersona'";
		return ejecutarConsulta($sql);
    }

 
    public function mostrar($idpersona){

        $sql="SELECT * FROM persona WHERE idpersona='$idpersona'";
        return ejecutarConsultaSimpleFila($sql);
    }

    public function listarp(){
		$sql="SELECT * FROM persona WHERE   tipo_persona='proveedor'";
=======
        $sql="DELETE FROM persona WHERE idpersona='$idpersona'";
        return ejecutarConsulta($sql);
    }

    public function mostrar($idpersona){

        $sql="SELECT * FROM persona WHERE idpersona='$idpersona'";
        return ejecutarConsultaUnica($sql);
    }

    public function listarp(){
		$sql="SELECT * FROM persona WHERE tipo_persona='proveedor'";
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
		return ejecutarConsulta($sql);		
	}

    public function listarc(){
<<<<<<< HEAD
		$sql="SELECT * FROM persona WHERE   tipo_persona='clientes'";
		return ejecutarConsulta($sql);		
	}











}




=======
		$sql="SELECT * FROM persona WHERE tipo_persona='clientes'";
		return ejecutarConsulta($sql);
    }
}

>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
?>