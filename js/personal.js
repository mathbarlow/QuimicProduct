$(function () {
  $( "#dialog1" ).dialog({
    autoOpen: false
  });
  
  $("#opener").click(function() {
    $("#dialog1").dialog('open');
    $("#nombre").focus();
  });
})

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
			  beforeSend: function(){
					//console.log(nombre+" clave> "+clave+" perfil> "+perfil);
				},
			  success: function(msg){
			  	//console.log(msg);
			  	if(msg == "correcto"){
			  		$("#mensaje").html("<br><div align='center' class='alert alert-success'><i class='glyphicon glyphicon-ok'> </i> Usuario registrado</div>");
			  		listarClientes();
			  		$("#nombre").val("");
					$("#clave").val("");
					$("#perfil").val("");
					$("#nombre").focus();
			  		$("#mensaje").fadeIn( "slow", "linear");
			  	}
			  	else{
			  		//$("#dialog").html('<a id="page-help" href="page.html" onclick="window.open(this.href, "popupwindow", "width=500,height=300"); return false;">what is this?</a>');
			  		//$("#dialog").load("Hola").dialog({modal:true}).dialog('open');
			  		$("#dialog1").dialog('open');
			  		$("$nombre").focus();
			  		
			  		//listarClientes();
			  	}

			  }		  
		}).done(function() {
			
			$("#mensaje").fadeOut( 10000, "linear");
			
					  });
	});
}

function listarClientes(){
	 
	$.ajax({			
		url: '../users/form_admin.php',
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

function BuscarClientes(){
	 
	$.ajax({			
		url: '../users/form_search.php',
		type: 'GET',
		beforeSend: function(){

		},
		success: function(data){
           $("#miTabla").html(data);
           $("#miTabla").hide();
           $("#miTabla").fadeToggle(50,'swing');
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

function MU(id){//Mostrar perfil usuario	
	$.ajax({
		type: 'POST',
		url: '../users/form_user.php',
		data: {id:id},//parametros
		success: function(data){           
           //console.log(data); 
           $("#perrus").html(data);
           //$("#sitripio").hide();
           //$("#sitripio").fadeToggle(50,'swing'); 
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
		   //console.log(data);
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
				//console.log(data);
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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//// PRODUCTOS


function registrarProducto(){

	$("form").on('submit', function(e) {
		e.preventDefault();
		var nombre = $("#nombre").val();
		var clave = $("#clave").val();
		var perfil = $("#perfil").val();
		  
		$.ajax({
			  type: "POST",
			  url: "../products/add.php",
			  data: { nombre: nombre, clave: clave, perfil: perfil},
			  beforeSend: function(){
					//console.log(nombre+" clave> "+clave+" perfil> "+perfil);
				},
			  success: function(msg){
			  	//console.log(msg);
			  	if(msg == "correcto"){
			  		$("#mensaje").html("<br><div align='center' class='alert alert-success'><i class='glyphicon glyphicon-ok'> </i> Usuario registrado</div>");
			  		listarProductos();
			  		$("#nombre").val("");
					$("#clave").val("");
					$("#perfil").val("");
					$("#nombre").focus();
			  		$("#mensaje").fadeIn( "slow", "linear");
			  	}
			  	else{
			  		//$("#dialog").html('<a id="page-help" href="page.html" onclick="window.open(this.href, "popupwindow", "width=500,height=300"); return false;">what is this?</a>');
			  		//$("#dialog").load("Hola").dialog({modal:true}).dialog('open');
			  		$("#dialog1").dialog('open');
			  		$("$nombre").focus();
			  		
			  		//listarClientes();
			  	}

			  }		  
		}).done(function() {
			
			$("#mensaje").fadeOut( 10000, "linear");
			
					  });
	});
}

function listarProductos(){
	 
	$.ajax({			
		url: '../products/form_admin.php',
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

function BuscarProductos(){
	 
	$.ajax({			
		url: '../products/form_search.php',
		type: 'GET',
		beforeSend: function(){

		},
		success: function(data){
           $("#miTabla").html(data);
           $("#miTabla").hide();
           $("#miTabla").fadeToggle(50,'swing');
		}
	});
}

function LDEproducts(id){//Llenar Datos Editar
	$.ajax({
		type: 'POST',
		url: '../products/popup_edit.php',
		data: {ide:id},//parametros
		success: function(data){
           $("#myModal-Edit").html(data);
           console.log("");  
		}
	});
}

function MEproducts(id){//Mensaje Eliminar	
	$.ajax({
		type: 'POST',
		url: '../products/popup_delete.php',
		data: {idEliminar:id},//parametros
		success: function(data){
           $("#myModal-Delete").html(data);
           console.log("");  
		}
	});
}

function MUproducts(id){//Mostrar perfil usuario	
	$.ajax({
		type: 'POST',
		url: '../products/form_product.php',
		data: {id:id},//parametros
		success: function(data){           
           //console.log(data); 
           $("#perrus").html(data);
           //$("#sitripio").hide();
           //$("#sitripio").fadeToggle(50,'swing'); 
		}
	});
}

function ECproducts(){//Eliminar Cliente
	var id = $("#idcli").val();
	$.ajax({
		type: 'POST',
		url: '../products/delete.php',
		data: {idcli:id},//parametros			
		success: function(data){
		   //console.log(data);
           if(data == 'Correcto'){
				$("div").removeClass('modal-backdrop');
				$("#miTabla").removeClass("linea");
           		listarClientes();
            }
		}
	});

}

function MDproducts(){//Modificar � Editar Cliente
	var id = $("#ideditar").val();
	var nom_edit = $("#nom_edit").val();
	var password_edit = $("#password_edit").val();
	var profile_edit = $("#profile_edit").val();

	$.ajax({
		type: 'POST',
		url: 'edit.php',
		data: {ideditar:id, nom_edit:nom_edit, password_edit:password_edit, profile_edit:profile_edit},//parametros			
		success: function(data){
				//console.log(data);
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

