
<?php include 'head.php'; ?>
 <body>
  <ul id="dropdown1" class="dropdown-content" >
  <li  style = "font-size: 15px" ><i class="material-icons right center ">&#xE853;</i> <a href="#!">cambiar contraseña</a></li>
  <li  class="divider"></li>
  <li style = "font-size: 15px" ><i class="material-icons right">&#xE879;</i> <a href="cerrar.php">Salir</a></li>
</ul>
     
     
    <div class="navbar-fixed ">
    <nav class="blue darken-3">
      <div class="nav-wrapper">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="small material-icons">toc</i></i></a>

        <ul class="right hide-on-med-and-down">
          <?php
              $img= 'http://www.muniquemchi.cl/wp-content/uploads/2015/09/perfilhombre.jpg';
              ?>
                <a class="dropdown-button" href="#!" data-activates="dropdown1">
        <li style="margin: 0; padding: 7px" >Bienvenido: <?php echo $_SESSION ['admin'];?></li> 
        <li><li><img  width="50" height="50" src="<?php echo $img ?>" alt="" class="circle responsive-img"> </li> </li></a>
        </ul>
      </div>
    </nav>
</div>

        
 <div class="row">
    <div class="col s12  ">
      <ul class="tabs ">
       <li class="tab col s1,5"><a rel="prefix" href="#test1"> <i class="material-icons">&#xE420;</i> <i class="material-icons">&#xEB3F;</i>Vendedores</a></li>
       <li class="tab col s1,5"  ><a href="#test2"><i class="material-icons">&#xE54C;</i>Tipos de Venta</a></li>
       <li class="tab col s1,5"><a href="#test3"><i class="material-icons">&#xE263;</i>Tipos de Pago</a></li>
       <li class="tab col s1,5" ><a href="#test4"> <i class="material-icons">&#xE0BC;</i> Origenes</a></li>
       <li class="tab col s1,5 "title="Marcas de Auto"><a href="#test5"><i class="material-icons">&#xE531;</i>Marcas de autos</a></li>
       <li class="tab col s1,5"title="Modelos de Auto" ><a href="#test6"><i class="material-icons">&#xE642;</i>Modelos de autos</a></li>
       <li class="tab col s1,5" title="tipos de Cliente"><a href="#test7"><i class="material-icons">&#xE7EF;</i>Tipos de Cliente</a></li>
       <li class="tab col s1,5"><a href="#test8">Test 4</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">

	<?php include 'form/form.vendedor.php';?>

    </div>
    <div id="test2" class="col s12">

    	<?php include 'form/form.tipoventa.php' ?>
 
    </div>
    <div id="test3" class="col s12">
    	<?php include 'form/form.tipopago.php' ?>

    </div>
    <div id="test4" class="col s12">
      	<?php include 'form/form.origen.php' ?>
    </div>

      <div id="test5" class="col s12">
      <?php include 'form/form.marca.php'; ?>
    </div>

      <div id="test6" class="col s12">
      <?php include 'form/form.modelo.php'; ?>

    </div>

      <div id="test7" class="col s12">
      <?php include'form/form.tipocliente.php'; ?>
    </div>

    <div id="test8" class="col s12">

    </div>
     
  </div>



   <?php include 'footer.php'; ?>