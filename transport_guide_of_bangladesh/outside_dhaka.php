<!DOCTYPE HTML>

<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />	
<link href='//fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/responsiveslides.css">
<script src="js/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>

<head>
<title>about us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #323A45;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 15px;
	padding-bottom:270px;

}

.left {
    background-color:#6495ED;
	text-align:center;
}
.right {
    background-color: 	#F0E68C;
	text-align:center;
}


/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width:600px) {
    .column {
        width: 100%;
    }
}

//style modified form here
 
</style>
</head>
<body>

		<!---start-header---->
			<div class="header">
				<div class="wrap">
				<div class="logo">
					<a href="index.html"><img src="images/logo1.jpg" title="logo" /></a>
				</div>
				<div class="top-nav">
					<ul>
						<li class="active"><a href="index.html">HOME</a></li>
						<li><a href="about_us.html">ABOUT US</a></li>
						
						<li><a >ADMIN</a></li>
						<li><a href="contact.html">CONTACT</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>

 
 <div class='grid' >
 <div class='form' target="">
   <div class='form_padding' style="padding: 70px;" "border-width: 5px;"  >
     
       <form action = "<?php $_PHP_SELF ?>" method="post" >
	   <h1 style=background-color:Tomato;>Bus</h1>
       From: 
	   <br><input type="text" name="from" placeholder="dhaka"><br>
       Destination: 
	   <br><input type="text" name="to" placeholder="location"><br>
       <input type="submit" name="show" value="Search">
       </form>
	   
	</div>   
</div>
</div>




<?php


  

 

$servername = "localhost";
$username = "root";
$password = "";
$db = "outside_dhaka";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	
}
//echo "Connected successfully.<br>";
if(isset($_POST['show']))
{
 $from = $_POST["from"];
  $to = $_POST["to"];

$sql1 =  "SELECT * FROM `outside_dhaka` WHERE `from` LIKE '%$from%' AND `to` LIKE '%$to%' ";
$sql2 = "SELECT * FROM `busInfo` WHERE `route` LIKE '$to' ";
$result1 = mysqli_query($conn, $sql1);

$result2 = mysqli_query($conn, $sql2);

echo "
<style>
		table, th, td {
    border: 5px solid black;
	text-align: left;
	width:50%;
}
</style>

	<table>
	

		<tr>
		
		 <th>From</th>
		 <th>destination</th>
		 <th>distance(KM)</th>
		 <th>Fare</th>
		</tr>
		
		</table> ";
		

if ($result1->num_rows > 0) {
    // output data of each row
    while($row1 = $result1->fetch_assoc()) {
        echo "
		<style>
		table, th, td {
    border: 3px solid black;
	text-align: left;
	width:50%;
}
</style>
	   <table>
		 
		<tr>
		
          
          <td>".$row1['from']."</td>
          <td>".$row1['to']."</td>
		  <td>".$row1['destination']."</td>
		  <td>".$row1['fare']."</td>
	
        </tr>
		</table><hr><hr><hr>";
    }
} else {
    echo "0 results";
}

echo "<h1 style=background-color:Tomato;>bus info:</h2>
    <style>
		    table, th, td {
            border: 1px solid black;
	        width:50% 
			align:right;
            }
         </style>
		 <table>
		<tr>
		 <th>BusName</th>
		 <th>from dhaka</th>
		 <th> stand</th>
		 <th>route</th>
		 
		</tr>
		</table>";

//retrieve data from busInfo table
if ($result2->num_rows > 0) {
    // output data of each row
	 while($row2 = $result2->fetch_assoc()) {
    
        echo "
		 <style>
		    table, th, td {
            border: 1px solid black;
	        width:50% 
			align:right;
            }
         </style>
		 <table>
		
		<tr>
         <td>".$row2['busName']."</td>
         <td>".$row2['fromStand']."</td>
         <td>".$row2['toStand']."</td>
		 <td>".$row2['route']."</td>
		
		
        </tr>
		</table>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

}

?>






</body>
</html>