<hr>
 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Registra Administrador <i class="material-icons right"><i class="material-icons">&#xE420;</i>add_circle</i></a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal barra ">
    <div class="modal-content">
       <fieldset>
<legend>
      <h5>Registra Administrador</h5>

</legend>

	<form class="col s12 m12"  enctype="multipart/form-data" method="POST" action="../controlador/controlador.admin.php">
 	<input type="hidden" name="ope" value="1" >
	<input type="hidden" name="usu" value="2" >
 	<input type="hidden" name="status" value="A" >

    <div class="row col s12 ">


      <div class="input-field col s4 m4">
                <input id="icon_prefix" name="nombre" type="text" class="validate" required="required">
        <label for="icon_prefix">Nombre</label>
      </div>
      
      <div class="input-field col s4 m4">
                <input id="icon_prefix" name="apv"  type="text" class="validate"required="required" >
        <label for="icon_prefix">Apellido Paterno</label>
      </div>


      <div class="input-field col s4 m4">
                <input id="icon_email" name="apm" type="text" class="validate"required="required" >
        <label for="icon_email">Apellido Materno</label>
      </div>

      <div class="input-field col s4 m4">
                <input id="icon_email" name="rfc" type="text" class="validate"required="required">
        <label for="icon_email">RFC</label>
      </div>
     
     
      <div class="input-field col s4 m4">


                <input id="icon_email" name="pass"  type="password" class="validate"required="required">
        <label for="icon_email class="active" ">Contraseña</label>
      </div>
      

       
            <div class="input-field col s12 m12">


        <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">&#xE2C3;</i></i>guardar</button>
        <a href="#!" class="modal-action modal-close waves-effect waves-light btn"> salir</a>
        </div>
    </div>
  </form>
</fieldset>
    </div>
   
  </div>