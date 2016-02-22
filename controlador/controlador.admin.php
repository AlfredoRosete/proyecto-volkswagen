<?php 
   require '../modelo/m.admin.php';
   $ope=$_REQUEST['ope'];
    if($ope==NULL){
        $ope=$_GET['ope'];
        if($ope==NULL){
            exit;
        }
    }
     
     
    switch($ope){

        case 1:

        $registra = new Admin();
        $registra->reg_vendedor();
            

        break;

       
        


    }
?>