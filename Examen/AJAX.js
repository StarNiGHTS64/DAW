
$(document).ready(function(){
 fetchUser(); 
//Consultar
 function fetchUser() 
 {
  var action = "Load";
  $.ajax({
   url : "action.php", 
   method:"POST", 
   data:{action:action}, 
   success:function(data){
    $('#result').html(data); 
   
   }
  });
 }
    

 
 $('#modal_button').click(function(){
    $('#MainModal').modal('show'); 
    $('#entrada_n').val('');
    $('#entrada_ap').val('');
    $('#entrada_am').val('');
    $('#entrada_s').val('');
  
    $('.modal-title').text("Registrar Nuevo Zombie");  
    $('#action').val('Crear'); 
 });

 //Crear
 $('#action').click(function(){
  var temp = new Date();
  var hora = temp.getTime(); 
  var estado = $('#entrada_s').val();  
  if(entrada == "I"){
        var estado = "Infeccion"; 
  }if(entrada == "C"){
      var Estado = "Coma";
  }if(entrada == "T"){
      var Estado = "Transformacion";
  }if(entrada == "M"){
      var Estado = "Muerto";
  }else{
      var estado = "Deconocido";
  }
   
  if(entrada != '') 
  {
    var action = "Create";
   $.ajax({
    url : "action.php",   
    method:"POST",     
    data:{nombre:nombre, apellido_paterno:apellido_paterno, apellido_materno:apellido_materno,estado:estado,hora:hora, action:action}, 
    success:function(data){
     alert(data);    
     $('#customerModal').modal('hide'); 
    }
   });
  }
  else
  {
   alert("Por favor llene los campos de entrada"); 
  }
 });
});
