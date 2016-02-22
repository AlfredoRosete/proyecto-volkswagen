
<?php

require_once 'Conexion.php';

session_start();

class Usuario extends Conexion
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
   
   
	public function validar()

	{

		$consulta = $this->mysqli->query("SELECT * FROM usuario WHERE nombre = '".$_POST['usuario']."' and contrasena = '".$_POST['pass']."' and status = 'A'  ");

		
		 $row_cnt = $consulta->num_rows;
        if($row_cnt<1)
         
      {
      				echo "<script language\"javascript\">  alertify.error('Error Comunicate con el administrador para acceder al sistema.');   alertify.set('notifier','position', 'top-right'); 
 						alertify.set('notifier','delay', 10);
						</script>";

               //     echo "<script type='text/javascript'>   alertify.alert('este es mi mensaje');</script>";
                    echo "<script language\"javascript\"> location.href='../index.php?error=1';</script>";

      }
			
		else
		
			{

				$datos =  $consulta->fetch_assoc();


				if ($datos['clave'] == 1)

				{


					  //session_start();
		              $_SESSION['Id_admin']=$datos['id_usuario'];
		              $_SESSION['admin']=$datos['nombre'];

		              echo '<script type="text/javascript">window.location.href="../vista/admin.php";</script>';}


				

				else
				{

					//session_start();
					$_SESSION['id_usuario']=$datos['id_usuario'];
     				$_SESSION['admin']=$datos['nombre'];
         			echo '<script type="text/javascript">window.location.href="../vista/v.usuario.php";</script>';
	            }

				}
			}
			
			}
			

?>