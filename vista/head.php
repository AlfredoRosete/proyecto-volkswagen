<?php
session_start();
if(!isset($_SESSION['admin']))
{
 
   $redir="../index.php";
    header("Location:" . $redir);
}


?>
 <!DOCTYPE html>
  <html  >
   <head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link href="../asset/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="img/icon.png" >
    <meta name="theme-color" content="#000000">
    <link href="../asset/css/materialize.min.css" type="text/css" rel="stylesheet">
    <link href="../asset/css/style.css" type="text/css" rel="stylesheet" >
    <link href="../asset/css/font-awesome.min.css" type="text/css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="../asset/pace-master/themes/blue/pace-theme-corner-indicator.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head> 