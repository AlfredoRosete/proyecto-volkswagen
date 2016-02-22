
<hr>
 <a class="waves-effect waves-light btn modal-trigger" href="#modal7">Registra tipo de Cliente</a>

  
  <div id="modal7" class="modal barra">
  <div class="modal-content">
    <fieldset>
    <legend>
          <h5>Registra tipo de Cliente</h5>

    </legend>
      <form class="col s12 m12"  enctype="multipart/form-data" method="POST" action="../controlador/controlador.tipocliente.php">
      <input type="hidden" name="ope" value="1" >
      <input type="hidden" name="status" value="A" >

        <div class="row col s12 ">

     <div class="input-field col s4 m4">
                    <input id="icon_prefix" name="tipocliente" type="text" class="validate" required="required">
      <label for="icon_prefix">clave Tipo cliente</label>
      </div>

      <div class="input-field col s4 m4">
      <label for="icon_prefix">Desripcion</label>
      <input id="icon_prefix" name="descrip" type="text" class="validate" required="required">
      
      </div>

      </div>

  <div class="input-field col s12 m12">

        <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">&#xE2C3;</i></i>guardar</button>
<a href="#!" class="modal-action modal-close waves-effect waves-light btn">salir</a>  </div>
  </div>
  </form>
</fieldset>
    </div>
 
  </div>