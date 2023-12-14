<?php
include 'header.php';
include 'mysql_connected.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">

<br>
        <h4>Customer Form</h4>
<hr>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Nic</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            
        </tr>
    </thead>
    <tbody>
<?php

$sql="SELECT * FROM customer";
$result=mysqli_query($con,$sql);
if($result){
    while ($raw=mysqli_fetch_assoc($result)){
        $nic=$raw['nic'];
        $name=$raw['name'];
        $address=$raw['address'];
        $salary=$raw['salary'];


echo '

<tr>
            <td>'.nic.'</td>
            <td>'.name.'</td>
            <td>'.address.'</td>
            <td>'.salary.'</td>
<td>
<a href="#" class="btn btn-success btn-sm">Update</a>
<a href="customer-delete.php?customeNic=.$nic." class="btn btn-danger btn-sm">Delete</a>
</td>


        </tr>
        ';





    }
}

?>




        
    </tbody>




</table>


</div>
</body>
</html>