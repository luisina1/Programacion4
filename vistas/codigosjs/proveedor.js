var tabla;

<<<<<<< HEAD


=======
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
function init() {

    mostrarelformulario(false);
    listar();


    $("#formulario").on("submit", function (e) {
        
        guardaryeditar(e);
<<<<<<< HEAD
    })

  

}



function limpiar() {


    $("#nombre").val("");
	$("#num_documento").val("");
	$("#direccion").val("");
	$("#telefono").val("");
	$("#email").val("");
	$("#idpersona").val("");
    
=======
    })   
}

function limpiar() {
  	$("#nombre").val("");
	$("#num_documento").val("");
	$("#direccion").val("");
	$("#telefono").val("");
	$("#email").attr("src","");
	$("#idpersona").val("");
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
}


function mostrarelformulario(x) {

    limpiar();

    if (x) {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled", false);
        $("#btnagregar").hide();
   
    } else {
        $("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
    
    }

}


<<<<<<< HEAD

=======
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
function cancelarformulario() {

    limpiar();
    mostrarelformulario(false);
    
}


function listar() {

    tabla = $('#tablalistado').dataTable(
        
        {

        "aProcessing": true,//Activamos el procesamiento del datatables
	    "aServerSide": true,//Paginación y filtrado realizados por el servidor
            dom: 'Bfrtip',//Definimos los elementos del control de tabla
        
               buttons: [		          
		            'copyHtml5',
		            'excelHtml5',
		            'csvHtml5',
		            'pdf'
            ],
               

            "ajax":
				{
					url: '../ajax/personas.php?op=listarp',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
            },

        "bDestroy": true,
		"iDisplayLength": 5,//Paginación
	    "order": [[ 0, "desc" ]]//Ordenar (columna,orden)   
    }).DataTable();
    
}


function guardaryeditar(e) {

    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar").prop("disabled", true);
    var formData = new FormData($("#formulario")[0]);


    	$.ajax({
		url: "../ajax/personas.php?op=guardaryeditar",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          mostrarelformulario(false);
	          tabla.ajax.reload();
	    }

        });
    
    limpiar();

}


function mostrar(idpersona) {


    $.post("../ajax/personas.php?op=mostrar", { idpersona: idpersona }, function (data, status)
        
    {

        data = JSON.parse(data);
        mostrarelformulario(true);

<<<<<<< HEAD
    	$("#nombre").val(data.nombre);
		$("#tipo_documento").val(data.tipo_documento);
		//$("#tipo_documento").selectpicker('refresh');
		$("#num_documento").val(data.num_documento);
		$("#direccion").val(data.direccion);
		$("#telefono").val(data.telefono);
		$("#email").val(data.email);
 		$("#idpersona").val(data.idpersona);
        

      
        
        } )
    
=======
        $("#nombre").val(data.nombre);
        $("#tipo_documento").val(data.tipo_documento);
        //$('#tipo_documento').selectpicker('refresh');
        $("#num_documento").val(data.num_documento);
        $("#direccion").val(data.direccion);
		$("#telefono").val(data.telefono);
        $("#email").val(data.email);
        $("#idpersona").val(data.idpersona);    
        
        } )
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
}


function eliminar(idpersona) {

<<<<<<< HEAD
    bootbox.confirm("¿Está Seguro de eliminar al proveedor?", function (result) {
=======
    bootbox.confirm("¿Está seguro de eliminar al Proveedor?", function (result) {
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2

        if (result) {

            $.post("../ajax/personas.php?op=eliminar", {idpersona : idpersona}, function(e){
        		bootbox.alert(e);
	            tabla.ajax.reload();
        	});	
            

        }

     })

}

<<<<<<< HEAD



init();
=======
init();
>>>>>>> 0a794bff02d08bdf9f59ebd136a6dd6cf2c21eb2
