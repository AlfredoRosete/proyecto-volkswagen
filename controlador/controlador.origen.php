<?php 
   require '../modelo/m.origen.php';
   $ope=$_REQUEST['ope'];
    if($ope==NULL){
        $ope=$_GET['ope'];
        if($ope==NULL){
            exit;
        }
    }
     
     
    switch($ope){

        case 1:

        $inserta = new Origen();
        $inserta->reg_Origen();
            

        break;

    }
?>