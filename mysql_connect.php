<?php 
$con = new mysqli(hostname:'localhost',username:'root',password:'1234',database:'customer_crud');

if(!$con){
    echo 'Connected';
}else{
    die(mysqli_error(@con));
}
?>