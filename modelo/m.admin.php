<?php

require_once 'Conexion.php';

session_start();

class Admin extends Conexion
{


  /**
   * Class Constructor
   * @param    $mysqli   
   */
    public $mysqli;  
      //-----------------------------------------------------------------------------------------------------------
      function __construct(){
         $this->mysqli = parent::conectar();
      }
      //-----------------------------------------------------------------------------------------------------------
   

      public function reg_vendedor() {

            /* Sentencia preparada, etapa 1: preparación */
         if (!($sentencia = $this->mysqli->prepare("INSERT INTO vendedor (nombreV,ap,am,rfc,contraseniav,clave,status)VALUES (?,?,?,?,?,?,?)")))
             echo "Falló la preparación: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
         
         /* Sentencia preparada, etapa 2: vinculación(parceo) y ejecución */
         if (!$sentencia->bind_param('sssssss',$_POST['nombre'], $_POST['apv'],$_POST['apm'],$_POST['rfc'],$_POST['pass'],$_POST['usu'],$_POST['status']))
            echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
         

        if (!$sentencia->execute())
            echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
         
         echo "<script type='text/javascript'> alert('datos almacenados');</script>";

                    echo "<script language\"javascript\"> location.href='../vista/panel.php';</script>";    

                      }

       






   }