<!DOCTYPE html>
<html>
    <head>
        <title>Examen</title>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="style.css" type="text/css"></script>
        <script src="AJAX.js"></script>
    </head>
    <body>
     <!--Sesion Activa-->
     <?php
        session_start();
     if(!isset($_SESSION['start_time'])){
         $str_time=time();
         $_SESSION['start_time']=$str_time;
     }
     
     ?>
     <div class="container box">
        <h1 align="center">EX 2</h1>
        <br/>
        <div align="right">
            <button type="button" id="modal_button" class="btn btn-info">Registrar</button>
        </div>
        <div align="leftt">
            <button type="button" class="btn btn-info">Report A</button>
        </div>
        <div align="left">
            <button type="button" class="btn btn-info">Report B</button>
        </div>
        <div align="left">
            <button type="button" class="btn btn-info">Report C</button>
        </div>
         <br/>

        <div id="result" class="table-responsive">

        </div>






<!--Modal-->
         <div id="MainModal" class="modal fade">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h4 class="modal-title">Registrar Zombie</h4>
                     </div>
                     
                     <div class="modal-body">
                         <label>Nombre</label>
                         <input type="text" name="entrada_n" id="entrada_n" class="form-control" />
                         <br/>
                     </div>
                     <div class="modal-body">
                         <label>Apellido Paterno</label>
                         <input type="text" name="entrada_ap" id="entrada_ap" class="form-control" />
                         <br/>
                     </div>
                     <div class="modal-body">
                         <label>Apellido Materno</label>
                         <input type="text" name="entrada_am" id="entrada_am" class="form-control" />
                         <br/>
                     </div>
                     <div class="modal-body">
                         <label>Estado(I = Infeccion), (C = Coma), (T = Transformacion) y (M = Muerto)</label>
                         <input type="text" name="entrada_s" id="entrada_s" class="form-control" />
                         <br/>
                     </div>
                     
                     
                     <div class="modal-footer">
                         <input type="hidden" name="customer_id" id="customer_id" />
                         <input type="submit" name="action" id="action" class="btn btn-success" />
                         <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    </body>
    
    <?php 
session_start();
if (!isset($_SESSION['start_time']))
{
    $str_time = time();
    $_SESSION['start_time'] = $str_time;
}
?>
    
    <footer>
    </footer>
</html>
