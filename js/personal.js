function registrarCliente(){

	$("form").on('submit', function(e) {
		e.preventDefault();
		var nombre = $("#nombre").val();
		var clave = $("#clave").val();
		var perfil = $("#perfil").val();
		  
		$.ajax({
			  type: "POST",
			  url: "../users/add.php",
			  data: { nombre: nombre, clave: clave, perfil: perfil},

			  success: function(msg){
			  	console.log(msg);
			  	if(msg == "correcto"){
			  		$("#mensaje").html("<br><div align='center' class='alert alert-success'><i class='icon-ok-sign'></i> Usuario registrado</div>");
			  		listarClientes();
			  	}
			  	else{
			  		$("#mensaje").html("<br><div align='center' class='alert alert-danger col-lg-12' ><i class='icon-remove-sign'></i>"+msg+" </div>");
			  		listarClientes();
			  	}

			  }		  
		}).done(function() {
			$("#nombre").val("");
			$("#clave").val("");
			$("#perfil").val("");
			$("#mensaje").fadeOut( 10000, "linear");
		  });
	});
}

function listarClientes(){
	 
	$.ajax({			
		url: '../users/form_show.php',
		type: 'GET',
		beforeSend: function(){
			$("#miTabla").html("");
			$("#miTabla").removeClass("linea");
			$("#miTabla").html("<div id='cargando'></div>"); 
			$('#cargando').html('<img src="../img/cargar.gif"/>');
		},
		success: function(data){
           $("#miTabla").html(data);
           $("#miTabla").hide();
           $("#miTabla").fadeToggle(2000,'swing');
           $("#miTabla").addClass("linea");
		}
	});
}

function LDE(id){//Llenar Datos Editar
	$.ajax({
		type: 'POST',
		url: '../users/popup_edit.php',
		data: {ide:id},//parametros
		success: function(data){
           $("#myModal-Edit").html(data);
           console.log("");  
		}
	});
}

function ME(id){//Mensaje Eliminar	
	$.ajax({
		type: 'POST',
		url: '../users/popup_delete.php',
		data: {idEliminar:id},//parametros
		success: function(data){
           $("#myModal-Delete").html(data);
           console.log("");  
		}
	});
}

function EC(){//Eliminar Cliente
	var id = $("#idcli").val();
	$.ajax({
		type: 'POST',
		url: '../users/delete.php',
		data: {idcli:id},//parametros			
		success: function(data){
		   console.log(data);
           if(data == 'Correcto'){
				$("div").removeClass('modal-backdrop');
				$("#miTabla").removeClass("linea");
           		listarClientes();
            }
		}
	});

}

function MD(){//Modificar � Editar Cliente
	var id = $("#ideditar").val();
	var nom_edit = $("#nom_edit").val();
	var password_edit = $("#password_edit").val();
	var profile_edit = $("#profile_edit").val();

	$.ajax({
		type: 'POST',
		url: 'edit.php',
		data: {ideditar:id, nom_edit:nom_edit, password_edit:password_edit, profile_edit:profile_edit},//parametros			
		success: function(data){
				console.log(data);
	            if(data == "correcto"){
			  		$("#mensaje").html("<br><div align='center' class='alert alert-success'><i class='icon-ok-sign'></i> Usuario Modificado</div>");			  		
			  	}
			  	else{
			  		$("#mensaje").html("<br><div align='center' class='alert alert-danger col-lg-12' ><i class='icon-remove-sign'></i>"+data+" </div>");			  		
			  	}
		}
	}).done(function(){
		$("#mensaje").fadeOut( 10000, "linear");
		$("div").removeClass("modal-backdrop");
		$("#miTabla").removeClass("linea");

		listarClientes();
	});	
}

