 <?php

require_once 'Conexion.php';


class Tipocliente extends Conexion
{


    public $mysqli;  
   
      function __construct(){
         $this->mysqli = parent::conectar();
      }

   

 public function reg_tipocliente()
        {

         if (!($sentencia = $this->mysqli->prepare("INSERT INTO tipo_clientef (tipocliente,descripcionTc,status)VALUES (?,?,?,?)")))
             echo "Falló la preparación: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
         
         if (!$sentencia->bind_param('ssss',$_POST['clavem'], $_POST['nombrem'],$rutaf,$_POST['status']))
            echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
         

        if (!$sentencia->execute())
            echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
         
         echo "<script type='text/javascript'> alert('datos almacenados');</script>";

        echo "<script language\"javascript\"> location.href='../vista/panel.php';</script>";    


        }





}