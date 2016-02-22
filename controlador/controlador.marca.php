<?php 
   require '../modelo/m.marca.php';
   $ope=$_REQUEST['ope'];
    if($ope==NULL){
        $ope=$_GET['ope'];
        if($ope==NULL){
            exit;
        }
    }
     
     
    switch($ope){

        case 1:

        $inserta = new Marca();
        $inserta->reg_Marca();
            

        break;

    }
?>