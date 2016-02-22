<?php 
   require '../modelo/m.modelo.php';
   $ope=$_REQUEST['ope'];
    if($ope==NULL){
        $ope=$_GET['ope'];
        if($ope==NULL){
            exit;
        }
    }
     
     
    switch($ope){

        case 1:

        $inserta = new Modelo();
        $inserta->reg_modelo();
            

        break;

    }
?>