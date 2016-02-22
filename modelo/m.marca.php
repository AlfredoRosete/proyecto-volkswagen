 
<?php

require_once 'Conexion.php';



class Marca extends Conexion
{


    public $mysqli;  
      //-----------------------------------------------------------------------------------------------------------
      function __construct(){
         $this->mysqli = parent::conectar();
      }
      //-----------------------------------------------------------------------------------------------------------
   

 public function reg_Marca()
        {




          \error_reporting(E_ALL ^ E_NOTICE);
$ruta="images/";
$nom=$_POST['clavem'];
$archivo=$_FILES['imagen']['tmp_name'];
$nom_archivo=$_FILES['imagen']['name'];
$ext=  pathinfo($nom_archivo);
$subir = move_uploaded_file($archivo,$ruta."/".$nom.".".$ext['extension']);

$rutaf = "images/" . $_FILES['imagen']['name'];

         if (!($sentencia = $this->mysqli->prepare("INSERT INTO marca (claveM,nombreM,img,status)VALUES (?,?,?,?)")))
             echo "Falló la preparación: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
         
         /* Sentencia preparada, etapa 2: vinculación(parceo) y ejecución */
         if (!$sentencia->bind_param('ssss',$_POST['clavem'], $_POST['nombrem'],$rutaf,$_POST['status']))
            echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
         

        if (!$sentencia->execute())
            echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
         
         echo "<script type='text/javascript'> alert('datos almacenados');</script>";

        echo "<script language\"javascript\"> location.href='../vista/panel.php';</script>";    


        }





}