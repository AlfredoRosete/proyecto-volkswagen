<?php 
   require '../modelo/m.usuario.php';
   $ope=$_REQUEST['ope'];
    if($ope==NULL){
        $ope=$_GET['ope'];
        if($ope==NULL){
            exit;
        }
    }
     
     
    switch($ope){

        case 1:

        $validar = new Usuario();
        $validar->validar();
            

        break;

    }
?>