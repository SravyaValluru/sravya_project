<?php 
     
    /* $p1=$_GET['p1'];
     $p2=$_GET['p2'];  
     $p1=trim($p1);   
     $p2=trim($p2); */  
    unset($_COOKIE["test"]);       
     unset($_COOKIE["test1"]);
     setcookie("test","0", time()-3600,"/");        
    setcookie("test1","0", time()-3600,"/");    

    echo "<h4>Logged Out</h4>";
    header("Location: ../custlogin.html");
    //echo "<a href='login.html'>click here login</a>";
    //$_COOKIE["test"]="0";
    /*if(!isset($_COOKIE["test"]))
     {
    	echo "cookie is not set";
	 }
	 else 
	 {
    	//echo "Cookie '" . $cookie_name . "' is set!<br>";
    	//echo "Value is: " . $_COOKIE["test"];
    	 header("Location:demo.html");
	 }*/

?>   
