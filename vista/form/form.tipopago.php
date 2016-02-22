<hr>
 <a class="waves-effect waves-light btn modal-trigger" href="#modal3">Registra Tipo de pago</a>

  <!-- Modal Structure -->
  <div id="modal3" class="modal barra">
    <div class="modal-content">
       <fieldset>
<legend>
      <h5>Registra Modelo</h5>

</legend>

	<form class="col s12 m12"  enctype="multipart/form-data" method="POST" action="../controlador/controlador.tipopago.php">
 	<input type="hidden" name="ope" value="1" >
 	<input type="hidden" name="status" value="A" >

    <div class="row col s12 ">

 <div class="input-field col s4 m4">
                <input id="icon_prefix" name="nombrep" type="text" class="validate" required="required">
        <label for="icon_prefix">Nombre</label>
      </div>
      
     <div class="input-field col s4 m4">
                <input id="icon_prefix" name="descriptp"  type="text" class="validate"required="required" >
        <label for="icon_prefix">Descripcion</label>
      </div>


   
            <div class="input-field col s12 m12">

          <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">&#xE2C3;</i></i>guardar</button>
<a href="#!" class="modal-action modal-close waves-effect waves-light btn">salir</a>
</div>
    </div>
  </form>
</fieldset>
    </div>

  </div>