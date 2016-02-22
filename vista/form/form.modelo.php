<hr>
 <a class="waves-effect waves-light btn modal-trigger" href="#modal6">Registra Modelo</a>

  
  <div id="modal6" class="modal">
    <div class="modal-content">
    <fieldset>
<legend>
      <h5>Registra Modelo</h5>

</legend>
      <form class="col s12 m12"  enctype="multipart/form-data" method="POST" action="../controlador/controlador.modelo.php">
      <input type="hidden" name="ope" value="1" >
      <input type="hidden" name="status" value="A" >

        <div class="row col s12 ">

     <div class="input-field col s3 m3">
                    <input id="icon_prefix" name="clavem" type="text" class="validate" required="required">
      <label for="icon_prefix">Nombre Modelo</label>
      </div>
          
         <div class="input-field col s3 m3">
                    <input id="icon_prefix" name="nombrem"  type="text" class="validate"required="required" >
            <label for="icon_prefix">Nombre de Modelo</label>
          </div>



         <div class="input-field col s5 m5">
         <div class="file-field input-field">
              <div class="btn">
              <i class="material-icons right ">&#xE2BC;</i>
                <span style="font-size:10px" >selecciona imagen</span>
                <input name="imagen" type="file">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
        </div>


  <div class="input-field col s12 m12">
   <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">&#xE2C3;</i></i>guardar</button>
        <button href="#!" class="modal-action modal-close waves-effect waves-light btn">salir</button>
</div>
  
        </div>


            
    </div>
  </form>
</fieldset>
    </div>
  
  </div>