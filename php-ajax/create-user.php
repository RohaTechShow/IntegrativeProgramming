<?php

/**
 * Handle data coming frome client
 */

$id=intval(@$_POST['emp_id']);
$fname=@$_POST['fname'];
$mname=@$_POST['mname'];
$lname=@$_POST['lname'];

$qualification=@$_POST['qualification'];
$dept=@$_POST['department'];

$connection=@mysqli_connect("localhost","root","",hrm)
    or die("Couldn't not connect to server.");

$sql="INSERT INTO employees (emp_id,emp_fname,emp_mname,emp_lname,emp_qualification,emp_dept,emp_start_date)
      VALUES ('$id','$fname','$mname','$lname','$qualification','$dept', current_date)";

if (mysqli_query($connection,$sql)){
    echo "<b><span style='background-color: green;color: white;font-family: Arial'> New user has been created successfully.</span></b>";
}

else{
    echo "<b><span style='background-color: red;color: white; font-family: Arial;'> Something went wrong in creating user.".mysqli_error($connection)."</span></b>";
}