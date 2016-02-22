 
<?php

require_once 'Conexion.php';

session_start();

class Origen extends Conexion
{


    public $mysqli;  
      //-----------------------------------------------------------------------------------------------------------
      function __construct(){
         $this->mysqli = parent::conectar();
      }
      //-----------------------------------------------------------------------------------------------------------
   

 public function reg_origen()
        {

         if (!($sentencia = $this->mysqli->prepare("INSERT INTO origen (claveO,nombreO,status)VALUES (?,?,?)")))
             echo "Falló la preparación: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
         
         /* Sentencia preparada, etapa 2: vinculación(parceo) y ejecución */
         if (!$sentencia->bind_param('sss',$_POST['nombreo'], $_POST['descripo'],$_POST['status']))
            echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
         

        if (!$sentencia->execute())
            echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
         
         echo "<script type='text/javascript'> alert('datos almacenados');</script>";

        echo "<script language\"javascript\"> location.href='../vista/panel.php';</script>";    


        }
}