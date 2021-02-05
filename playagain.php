<?php
session_start();
if(isset($_POST['playagain'])){
    include 'connection.php';
    $ret="";
    $conn = new MySQLi($server, $username, $password);
    $sql="Update ".$dbname.".gamesessions set box1=0,box2=0,box3=0,box4=0,box5=0,box6=0,box7=0,box8=0,box9=0,count=0";
    $result = $conn->query($sql);
	if($result){
        header("Location:game.php");
    }
    else{
        echo $conn ->error;
    }
	
}


?>