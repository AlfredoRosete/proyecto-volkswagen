<!DOCTYPE html>
  <html>
   <head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link href="asset/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="img/icon.png" >
    <meta name="theme-color" content="#000000">
    <link href="asset/js/css/alertify.css" type="text/css" rel="stylesheet">
    <link href="asset/css/materialize.min.css" type="text/css" rel="stylesheet">
    <link href="asset/css/font-awesome.min.css" type="text/css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="asset/css/main.css">
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">

    <link rel="stylesheet" type="text/css" href="asset/pace-master/themes/blue/pace-theme-center-circle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    

    </head> 
    


<div class="col s12 z-depth-4 card-panel  animate-in " data-anim-type="bounce-in-up" data-anim-delay="200">
      <form class="login-form" method='post' action='controlador/controlador.usuario.php' >
      <input type="hidden" name="ope" value="1" >
        <div class="row">
          <div class="input-field col s12 center">
            <img  width="150" height="150"  src="http://img2.wikia.nocookie.net/__cb20110913035243/autos-y-tunning/es/images/4/41/150px-Volkswagen_logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <br>
            <img width="60" height="60" src="https://lh6.googleusercontent.com/-5GkSTCdExFc/AAAAAAAAAAI/AAAAAAAAAJk/vmuKVyrW06c/photo.jpg" >

          </div>
        </div>
        <div class="row margin">
          <div class="input-field  col s12">
            <i class="mdi-social-person-outline prefix" ></i>
            <input id=""   class="  "  name = "usuario" type="text">
            <label for="username" class="center-align">Usuario</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class=" mdi-action-lock-outline prefix  orange600 "></i>
            <input id="password" name = "pass"  type="password">
            <label for="password" class="">Contraseña</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me">
              <label for="remember-me">Recordar</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            
             <button type="submit"  class="btn blue darken-3 waves-effect waves-light col s12">Entrar</button>
          </div>
        </div>
      </form>
    </div>

    <script src="asset/js/jquery-2.1.0.min.js"></script>
    <script src="asset/js/materialize.min.js"></script>   
    <script src="asset/js/init.js"></script>
    <script src="asset/js/jquery.timeago.min.js"></script>
    <script src="asset/js/live.js"></script>
    <script src="asset/js/prism.js"></script>
    <script src="asset/js/modernizr.js"></script> <!-- Modernizr -->
    <script src="asset/pace-master/pace.js"></script>
    <script src="asset/js/notify.js"></script>
    <script src="asset/js/alertify.js"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>
       <script >
        
        

        </script>
        

<?php
error_reporting(1);

$identificador = $_GET['error']; 

if ($identificador != 1) 
{

}
else
{
echo "<script language\"javascript\">  alertify.error('Error Comunicate con el administrador para acceder al sistema.');   alertify.set('notifier','position', 'top-right'); 
 alertify.set('notifier','delay', 10);

 </script>";

}

?>
    </body>
  </html>