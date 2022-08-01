<?php
global $con;
$servername="localhost";
$username="root";
$password="";
$dbname="subicake";

$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    die("connection eror: ".mysqli_connnect_eror());
    
}

?>