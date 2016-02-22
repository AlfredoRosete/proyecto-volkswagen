<?php 
   require '../modelo/m.tipocliente.php';
   $ope=$_REQUEST['ope'];
    if($ope==NULL){
        $ope=$_GET['ope'];
        if($ope==NULL){
            exit;
        }
    }
     
     
    switch($ope){

        case 1:

        $registra = new Tipocliente();
        $registra->reg_tipocliente();
            

        break;

    }
?>