<?php
    header('Content-Type: text/xml');
    echo "<?xml version='1.0' encoding='UTF-8'?>";
?>
    <employees>
<?php
$connection=mysqli_connect("localhost","root","","hrm")
    or die("Server connection error.");

    $sql="SELECT * FROM employees";
    $sql=mysqli_query($connection,$sql);
    while($row=mysqli_fetch_array($sql)){
        ?>
            <employee>
                <emp_fname><?=$row['emp_fname']?></emp_fname>
                <emp_mname><?=$row['emp_mname']?></emp_mname>
                <emp_lname><?=$row['emp_lname']?></emp_lname>
                <emp_qualification><?=$row['emp_qualification']?></emp_qualification>
                <emp_dept><?=$row['emp_dept']?></emp_dept>
            </employee>
<?php
 }

 ?>
    </employees>
