
<hr>
 <a class="waves-effect waves-light btn modal-trigger" href="#modal5">Registra Marca</a>

  
  <div id="modal5" class="modal barra">
  <div class="modal-content">
    <fieldset>
    <legend>
          <h5>Registra Modelo</h5>

    </legend>
      <form class="col s12 m12"  enctype="multipart/form-data" method="POST" action="../controlador/controlador.marca.php">
      <input type="hidden" name="ope" value="1" >
      <input type="hidden" name="status" value="A" >

        <div class="row col s12 ">

     <div class="input-field col s4 m4">
                    <input id="icon_prefix" name="clavem" type="text" class="validate" required="required">
      <label for="icon_prefix">Clave Marca</label>
      </div>
          


   <div class="input-field col s4 m4">
                  
    <select id="campos" name="marca" style="overflow: auto;" >
    <?php 
       require_once  '../modelo/m.modelo.php';
       $obj = new Modelo();
       $datos = $obj->all();
       foreach ($datos as $elemento)
       echo "<option value=". $elemento['claveM'] .">".  $elemento['nombremo'] ."</option>";
    ?>
    </select>
            </div>

      <div class="input-field col s4 m4">
      <div class="file-field input-field">
      <div class="btn">
     <font size="2">
      <i class="material-icons right ">&#xE2BC;</i>
      <span >selecciona </span> <span>imagen</span>
      </font>
        <input type="file" name="imagen">
      </div>
      <div class="file-path-wrapper">
      <input class="file-path validate" type="text">
      </div>
      </div>
      </div>

            
   
            <div class="input-field col s12 m12">

       <button type="submit" class="waves-effect waves-light btn"><i class="material-icons right">&#xE2C3;</i></i>guardar</button>
<a href="#!" class="modal-action modal-close waves-effect waves-light btn">salir</a></div>
    </div>
  </form>
</fieldset>
    </div>
 
  </div>