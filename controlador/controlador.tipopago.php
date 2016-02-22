<?php 
   require '../modelo/m.tipopago.php';
   $ope=$_REQUEST['ope'];
    if($ope==NULL){
        $ope=$_GET['ope'];
        if($ope==NULL){
            exit;
        }
    }
     
     
    switch($ope){

        case 1:

        $inserta = new Tipopago();
        $inserta->reg_tipopago();
            

        break;

    }
?>