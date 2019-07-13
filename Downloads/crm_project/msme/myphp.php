
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
        // put your code here
        session_start();
        /*$_SESSION['mail']= $_SESSION['mail'];*/
        $_SESSION['username']=$_SESSION['username'];
        

$res=$_GET['msg'];
$host="localhost";
$user = "root";
$pwd = "";
$db ="msme";

// establish a connection
$conn = mysqli_connect($host,$user,$pwd,$db);

     mysqli_query($conn,"update seller set rating=$res where name='".$_SESSION['username']."'") or die(mysqli_connect_error());
       header("Location: rate1.php");
?>