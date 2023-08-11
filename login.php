<?php
if(isset($_POST['name']))
{
    $server="localhost";
    $username="root";
    $password=""; //enter your password here
    $con=mysqli_connect($server,$username,$password);
    if ($con->connect_error){
        die ("DATABASE NOT CONNECTED". mysqli_connect_error());
    }
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $pass=$_POST["password"];

    $sql="INSERT INTO 'userinfo'.'user' ('name', 'email', 'phone', 'password','date') VALUES ('$name', '$email', '$phone', '$pass',current_timestamp())";
    if ($con->query($sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    $stmt->close();
}
?> 