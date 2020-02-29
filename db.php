<?php
$host="localhost";
$username="root";
$password="";
$db_name="achs";
$con = mysqli_connect($host,$username,$password,$db_name);
if($con){
    echo "database connection";
}
else{
    echo "Something wrong";
}
