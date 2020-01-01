<?php

$fname=@$_POST['first_name'];


$conn=mysqli_connect("localhost","root","","hrm")
    or die("Could not connect to server.");

$sql="SELECT * FROM employees WHERE emp_fname like '%$fname%' OR emp_mname like '%$fname%'";

$sql=mysqli_query($conn,$sql);

while ($result=mysqli_fetch_array($sql)){
    echo $result['emp_fname']." ".$result['emp_mname']."<br/>";
}