<?php

include 'header.php';
include 'mysql_connected.php';

if (isset($_POST['submit'])){
    $nic=$_POST['nic'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];

    echo $nic . "OK";

    //prepared statement
      $sql="INSERT INTO 'customer'(nic,name,address,salary)
            VALUES('$nic','$name','$address','$salary')";


     $result=mysqli_query($con,$sql);
     if ($result){
        echo"Customer was saved";
     }




}









?> 









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <title>Customer</title>
</head>
<body>
    <form method="post">
        <div class="container">

<br>
        <h4>Customer Form</h4>
<hr>
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <lable for="nic">=NIC</lable>
                        <input type ="text" name="nic" class="form-control" required>
                    </div>
                </div>
                <div class="col-3">
                <div class="form-group">
                        <lable for="nic">=Name</lable>
                        <input type ="text" name="name" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-3">
                <div class="form-group">
                        <lable for="nic">=Address</lable>
                        <input type ="text" name="address" id="address" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                <div class="form-group">
                        <lable for="nic">=Salary</lable>
                        <input type ="text" name="salary" id="salary" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <br>
                    <button type="submit" class="btn btn-primary" col-12>save  customer</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>