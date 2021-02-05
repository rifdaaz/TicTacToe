<?php
session_start();
if(!(isset($_SESSION['Name']))){
	header("Location: index.php"); /* this redirect user to index page if user is not logged in */
exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="mainsendiri/styles2.css">
   <!--<link href="css/bootstrap2.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Butcherman+Caps" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Creepster+Caps" />
    <script src="mainsendiri/script.js" defer></script>
    <title>Document</title>
</head>
<body  style="background: url(images/bg.png)" class = "jalan"> 
<nav class="navbar navbar-default" style="background:linear-gradient(270deg, #340000 0%, #4D0000 34.63%, #7C0000 83.64%, #D8BCBC 102.29%), #215273;
  background-size: auto 100%;">
  <div class="container-fluid"> 
  <a href="dashboard.php" > <button style="float:left; margin:2%;float:left; margin:2%;color: rgb(87, 86, 86);
        background : rgb(212, 212, 212);
        border: 2px solid rgb(197, 195, 195);
        border-color: rgb(255, 255, 255);
        width: 120px;
        height: 30px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 10px;" class="btn btn-default"><span class="glyphicon glyphicon-backward"> </span> Back</button></a>
    <!-- Brand and toggle get grouped for better mobile display -->
    <img src = "images/judul.png" style = " width: 202px;height: 72px; margin-left:30%;"> </img>
    <!-- <h1 style=" color: #440000; font-family: "Butcherman Caps" ;"> Tic Tac Toe</h1>
    <h3 style="position : relative ; color: #440000 ; font-family: "Butcherman Caps" ;"> Horror</h3>-->
</div></nav>
    <div class="board" id="board">
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
        <div class="cell" data-cell></div>
    </div>
    
    <div class="pesan-menang" id="pesanMenang">
        <div data-pesan-menang-text></div>
        <button id="restartButton">Restart</button>
    </div>
</body>
</html>