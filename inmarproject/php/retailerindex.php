<!DOCTYPE html>
<html>
<head>
	<title></title>
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
	<?php
	    header("Cache-Control: no-store, must-revalidate, max-age=0");
		header("Pragma: no-cache");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
	?>
	<script type="text/javascript">	
	   (function(){
              
	   	     // alert(document.cookie);
	   	      var c=document.cookie;
	   	      var mytest1=c.split(';');
	   	      /*alert(mytest1[0]+"  "+mytest1[1]);*/
	   	      console.log(document.cookie);
	   		  //var check=document.cookie;
	   		  alert( $.cookie("alert") );

	   		  var i=mytest1[0].search("=");
	   		  i=i+1;
	   		  if(mytest1[0].charAt(i)=="x")
	   		  {
          			alert("working good");
	          }
       		  else
       		  {
       		  	console.log(document.cookie);
       	      	window.location.assign("login.html");

       		  }
	   }());
	   function delcookie()
	   {
	   	  /*var c=document.cookie;
	   	  var mytest1=c.split(';');
          alert("before closing:"+mytest1[0]+" "+mytest1[1]);
          var v1=mytest1[0].substr(0,mytest1[0].search("="));
          var v2=mytest1[1].substr(0,mytest1[1].search("="));
          /*alert(v1+"  "+v2);
	   	  /*document.cookie = mytest1[0]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	   	  document.cookie = mytest1[1]+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
	   	  alert("close");*/
	   	  window.location.assign("logout.php");
          

	   }
	</script>
</head>
<body>
       <h1>This is Home</h1>
       <a href="#" onclick="delcookie()">Signout</a>
</body>
</html>