<?php
$email = $_POST['email'];
$fn = $_POST['fn1'];
$ln = $_POST['ln1'];
$add = $_POST['add'];
$phn = $_POST['phn'];
$pass = $_POST['pass'];


$con = mysqli_connect("localhost", "root", "", "fruitdb");
 if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    } 
/*$self1 = $nob1*50+$noc1*20;
if($self1 > 60)
{
    $self 1= 60;
}
else
$self1 = $self1;*/
    // $query="insert into racc values($nob1,$noc1);";
      $query="insert into customer (email,firstname,lastname,address,password,mobilenumber)values('$email','$fn','$ln','$add','$pass',$phn)";
        echo "<br>".$query."<br>";

    if (mysqli_query($con, $query))
     {
        echo "<script>alert('Query added successfully')</script>";
        $sql = "insert into customer_wallet(seller_email,amount)values('$email',3500)";
            if (mysqli_query($con,$sql)) {
                    echo "<script type='text/javascript'>alert('3500 is added to your cart');</script>";
                           }
        header("Location:../custlogin.html");
     } 
    else
    {
        echo "<script>alert('Query not added successfully')</script>";
    }

    $con->close();

?>