<?php 
   require '../modelo/m.tipoventa.php';
   $ope=$_REQUEST['ope'];
    if($ope==NULL){
        $ope=$_GET['ope'];
        if($ope==NULL){
            exit;
        }
    }
     
     
    switch($ope){

        case 1:

        $validar = new Tipoventa();
        $validar->reg_tipoventa();
            

        break;

    }
?>