<?php
require_once('db.php');
$uname = $_POST["username"];
$email = $_POST["email"];
$sql="INSERT INTO users (username,email) VALUES('$uname','$email')";
echo $sql;
$result = mysqli_query($con,$sql);
if($result)
{
   header('Location:data.php');
}
else{
    echo "wrong sql";
}

echo "Your name is " .$uname. "<br> and email is " .$email;