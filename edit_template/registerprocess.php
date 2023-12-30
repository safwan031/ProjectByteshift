<?php
//connect db
include("dbconnect.php");
//retrieve data from registration form
$fic=$_POST['fic'];
$fname=$_POST['fname'];
$fpwd=$_POST['fpwd'];
$fphone=$_POST['fphone'];
$femail=$_POST['femail'];
$flic=$_POST['flic'];
$fadd=$_POST['fadd'];
//CRUD Operations
//CREATE-SQL Insert statement
$sql="INSERT INTO tb_user(u_ic,u_pwd,u_name,u_phone,u_email,u_add,u_lic,u_type)
        VALUES('$fic','$fpwd','$fname','$fphone','$femail','$fadd','$flic','2')";

//Execute SQL
mysqli_query($con,$sql);
//close DB connection
mysqli_close($con);

header('Location:login.php');
?>
