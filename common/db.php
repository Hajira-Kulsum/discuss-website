<?php
$host="localhost";
$user="root";
$password="";
$db="test";

$conn=new mysqli($host,$user,$password,$db);

if($conn->connect_error){
   die ("cant connect: ".$conn->connection_error);
}
 
?>