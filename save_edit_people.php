<?php
require("connect_db.php");

$id=$_POST["id"];
$f_name=$_POST["f_name"];
$l_name=$_POST["l_name"];
$age=$_POST["age"];
$sex=$_POST["sex"];
$marry_status=$_POST["marry_status"];

echo "f_name:$f_name l_name:$l_name age:$age sex:$sex marry_status:$marry_status";
$sql="UPDATE survey set f_name='$f_name',age='$age',sex='$sex',marry_status='$marry_status'WHERE id=$id";
$conn->query($sql);
header( "location: list_people.php" );
?>