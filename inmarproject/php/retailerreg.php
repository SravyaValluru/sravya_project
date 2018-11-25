<?php
$email = $_POST['email'];
$fn = $_POST['fn'];
$ln = $_POST['ln'];
$add = $_POST['add'];
$pan = $_POST['pan'];
$pass = $_POST['pass'];
$sname = $_POST['sname'];

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
	  $query="insert into retailer (email,firstname,lastname,address,pannumber,password,shopname)values('$email','$fn','$ln','$add','$pan','$pass','$sname')";
        echo "<br>".$query."<br>";

	if (mysqli_query($con, $query))
     {
        echo "<script>alert('Query added successfully')</script>";
        $sql = "insert into retailer_wallet(seller_email,amount)values('$email',3500)";
            if (mysqli_query($con,$sql)) {
                    echo "<script type='text/javascript'>alert('3500 is added to your cart');</script>";
                           }
        header("Location: ../retailerlogin.html");
     } 
    else
    {
        echo "<script>alert('Query not added successfully')</script>";
    }

	$con->close();

?>