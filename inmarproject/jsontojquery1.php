<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		.fruit_information>.row>div>table img
		{
			cursor: -webkit-grab; cursor: grab;
		}
		.fruit_information
		{
			//background-color:#e8e8e8;
		}
		.add_fruit_information
		{
			margin-top: 2%;
		}
	</style>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		var mytest1=document.cookie.split(';');

			
			var email_in_cookie = (mytest1[0].substr(mytest1[0].search("=")+1,mytest1[0].length-1)).replace("%40","@");
			//console.log(email_in_cookie);

			var email =email_in_cookie;			
			//var email="ram@gmail.com";
			document.getElementById("email_head").innerHTML = "Hi "+email+" Welcome to the session";
			var fruits_from_server="";
			$.post("php/get_fruit_information.php",
				    {"email":email},
				    function(data,status){
				    	if (data.trim()!="no[]") {
				    		console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	//alert(fruits_from_server[2].fname);
				    	drawTable(fruits_from_server,email);
				    	}
				    	else
				    	{
				    		console.log(data+"this is bad");
				    	}	
				    	
				    }
		    );
									
			$(document).on("click","#delete",function(){
					var temp=$(this).attr("name");
					console.log(temp.split(":")[0]+" "+temp.split(":")[1]);
					deleteRow(temp.split(":")[0],temp.split(":")[1]);
			});
			$(document).on("click","#update",function(){
					var temp=$(this).attr("name");
					//console.log(temp);
			});
			$("#btn_add").click(function(){
				$("tbody").remove();
				$.post("php/add_fruit_information.php",
				    {
				      "email":email,
				      "fruit_name":$("#fruit_name").val(),
				      "quantity":$("#quantity").val(),
				      "price":$("#price").val()
				    },
				    function(data,status){
				     	if (data.trim()!="[0]") {
				    		console.log(data);
				    	fruits_from_server = JSON.parse(data);
				    	//alert(fruits_from_server[2].fname);
				    	drawTable(fruits_from_server,email);
				    	}
				    console.log(data);
				}
		    	);
			});
			$(document).on("click","#update",function(){
				var index=$(this).attr("name");
				console.log(index);
				console.log(fruits_from_server[index].fname);
				$("#update_fruit").text(fruits_from_server[index].fname);
				$("#update_quantity").val(fruits_from_server[index].quantity);
				$("#update_price").val(fruits_from_server[index].price);

			});
			$("#update_btn").click(function(){
				 $("tbody").remove();
				 $.post("php/update_fruit_information.php",
				    {
				      "email":email,
				      "fruit_name":$("#update_fruit").text(),
				      "quantity":$("#update_quantity").val(),
				      "price":$("#update_price").val()
				    },
				    function(data,status){
				    	if (data!="[0]") {
				    		console.log(data);
				    	fruits_from_server=JSON.parse(data);
				    	drawTable(fruits_from_server,email);
				    	}
				    	
				    }
		    	);
			});
		});
		function drawTable(fruits,email){
			//console.log(fruits.length);
			for (var i = 0; i < fruits.length; i++) {
        			drawRow(fruits[i],email,i);
    		}
		}
		function drawRow(fruit,email,index)
		{
			    //console.log(fruit.fname);
				var row = $("<tr />");
				var tbody=$("<tbody/>");
				$("#tableone").append(tbody);
			    tbody.append(row); 
			    row.append($("<td><img id='delete' name='"+email+":"+fruit.fname+"' src='delete.png' width='10' height='10'></td>"));
			    row.append($("<td>" + fruit.fname + "</td>"));
			    row.append($("<td>" + fruit.quantity + "</td>"));
			    row.append($("<td>" + fruit.price + "</td>"));
			    row.append($("<td><img data-toggle='modal' data-target='#myModal' id='update' name='"+index+"' src='update.png' width='20' height='20'></td>"));
		}       
		function deleteRow(email,fruit_name)
		{
			
			$("tbody").remove();
			$.post("php/delete_fruit_information.php",
				    {"email":email,"fruit_name":fruit_name},
				    function(data,status){	
				    if (data!="[0]") {
				    	fruits_from_server=JSON.parse(data);
				    	drawTable(fruits_from_server,email);
				    }			    	
				    	//console.log(data);
				    	
				    }
				  );
		}
	</script>
	
</head>
<body style="background-image: url(css/reg12.jpg);background-repeat: no-repeat;
	      background-size: cover; ">
	<div class="head">
			<h3 style="font-family:TimesNewRoman; font-size: 55px; color: black;text-align: center;">Fruit It</h3>
		</div>
		<nav class="navbar navbar-inverse">
  					<div class="container-fluid">
    					<div class="navbar-header">
      						<a class="navbar-brand" href="#" style="color:black; ">Fruit It</a>
    					</div>
    					<ul class="nav navbar-nav">
     						 <li class="" "><a href="homepage.html" style="color: white;">Home</a></li>
      						<li><a href="homepage.html" style="color: white;">About Us</a></li>
      						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">REGISTRATION <span class="caret"></span></a>
      							<ul class="dropdown-menu">
          							<li><a href="retailer-reg.html">Seller/Retailer SignUp</a></li>
          							<li><a href="customer-reg.html">Customer SignUp</a></li>
          							
        						</ul>
     						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">LOGIN <span class="caret"></span></a>
      							<ul class="dropdown-menu">
          							<li><a href="retailerlogin.html">Seller/Retailer LOGIN</a></li>
          							<li><a href="custlogin.html">Customer LOGIN</a></li>
          							
        						</ul>
        						<li><a href="php/retailerlogout.php" style="float: right;">Logout</a></li>
    					</ul>
  					</div>
		</nav>
	
<!--start Modal add information-->
<h3 id="email_head"> </h3>

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
           <form >
					<div class="form-group">
  						<label> FruitName:</label>
  						<input type="text" class="form-control" id="fruit_name">
					</div>
					<div class="form-group">
  						<label>Quantity:</label>
  						<input type="text" class="form-control" id="quantity">
					</div>
					<div class="form-group">
  						<label>Price:</label>
  						<input type="text" class="form-control" id="price">
					</div>
					<button type="button" id="btn_add" class="btn btn-default" data-dismiss="modal">Add</button>
			</form>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--End Modal add information-->
<!--start Modal update-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="update_fruit"></h4>
        </div>
        <div class="modal-body">
           <form>
           		<div class="form-group">
           			<label>Qunatity</label>
           			<input type="number" id="update_quantity" class="form-control">           			
           		</div>
           		<div class="form-group">
           			<label>Price</label>
           			<input type="number" id="update_price" class="form-control">           			
           		</div>
           		<button id="update_btn" type="button" class="btn btn-default" data-dismiss="modal">Update</button>
           </form>           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--End Modal update-->
  
	<div class="container fruit_information" style="">
		<div class="row">
			<div class="col-xs-12 col-sm-3"></div>
			<div class="col-xs-12 col-sm-6">
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">Add</button>

				<table class="table table-striped" id="tableone">
					<thead>
						<tr>
							<th>Delete</th>
							<th>Fruit</th>
							<th>Quantity</th>
							<th>Price/Unit</th>
							<th>Update</th>
						</tr>
					</thead>					
				</table>
			</div>
			<div class="col-xs-12 col-sm-3"></div>
		</div>
	</div>
	<!-- <div class="container add_fruit_information">
		<div class="row">
			<div class="col-xs-12 col-sm-4"></div>		
			<div class="col-xs-12 col-sm-4">
				
			</div>		
			<div class="col-xs-12 col-sm-4"></div>		
		</div>
	</div> -->
</body>
</html>
