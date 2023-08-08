<?php 
$conn=new mysql('localhost','root','','test2');

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
?>