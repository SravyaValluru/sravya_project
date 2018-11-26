<?php

   $username=$_POST["email"];
   $password=$_POST["pwd"];

   $con = mysqli_connect("localhost", "root", "", "fruitdb");

 if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
  } 
$sql = "SELECT email from retailer where  email = '$username'  and  password = '$password'  " ;
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 1) {
  # code...
  //$emailid  = $row['username'];
  echo "login success";
   //setcookie("test","x", time() + (86400 * 30), "/");
       setcookie("test2","$username", time() + (86400 * 30), "/");
       //echo "<h1>This is fine</h1>";

       header("Location:../jsontojquery1.php");
}

else
{
  echo "failed";
   header("Location:../retailerlogin.html");
}
   
?>
