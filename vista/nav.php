 <body>
  <ul  id="dropdown1" class="dropdown-content" >
  <li  style = "font-size: 15px" > <a href="#!">cambiar contraseña</a></li>
  <li  class="divider"></li>
  <li style = "font-size: 15px" ><a href="cerrar.php">Salir</a></li>
</ul>
     
     
    <div class="navbar-fixed ">
    <nav class="blue darken-3">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><img   width="75" height="75" src="https://upload.wikimedia.org/wikipedia/hr/7/7e/Vw_Logo.png" alt="" class=" responsive-img"></a>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="small material-icons">toc</i></i></a>

        <ul class="right hide-on-med-and-down">
          <?php
              $img= 'http://www.muniquemchi.cl/wp-content/uploads/2015/09/perfilhombre.jpg';
              $logo= 'http://vignette4.wikia.nocookie.net/logopedia/images/1/1a/Volkswagen_Logo.png/revision/latest?cb=20120721121532';
              ?>
                <a class="dropdown-button" href="#!" data-activates="dropdown1">
        <li style="margin: 0; padding: 7px" >Bienvenido: <?php echo $_SESSION ['admin'];?></li> 
        <li><li><img  width="50" height="50" src="<?php echo $img ?>" alt="" class="circle responsive-img"> </li> </li></a>
        </ul>
      </div>
    </nav>

  </div>
  <a href=""></a>

 <ul id="slide-out" class="side-nav fixed    grey lighten-3 ">
  <a id="logo-container"  align="center" href="http://materializecss.com/" class="indigo lighten-5"><object id="front-page-logo" type="image/svg+xml" data="res/materialize.svg"> <img  width="70" height="70" src="<?php echo $logo ?>" alt="" class="circle responsive-img">    </object></a>


           <li><a class="bordes" href="#test1">informacion personal</a></li>
           <hr class="bordes">
           <li><a  class="bordes" href="#test2">Ventas</a></li>
           <hr class="bordes">
           <li><a class="bordes" href="#test2">detalle de Venta</a></li>
           <hr class="bordes">
           <li><a class="bordes" href="#test2">detalle de Venta</a></li>
           <hr class="bordes">

  </ul>
      



   