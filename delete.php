<?php
$host="localhost";
$username="root";
$password="";
$db_name="achs";
$con = mysqli_connect($host,$username,$password,$db_name);
$id=$_GET["id"];
$sql="DELETE FROM users WHERE id='$id'";
$result=mysqli_query($con,$sql);
if($result)
{
    header('Location:data.php');
}