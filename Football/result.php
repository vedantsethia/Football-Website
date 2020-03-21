<?php
	include_once "./include/dbhinc.php";
	session_start();
	$name = $_POST['name'];
	$email = $_POST["email"];
	$team = $_POST["team"];
	$frequency = $_POST["frequency"];
	$sql = "
		INSERT INTO subs(Name,Email,Type,favteam) 
		VALUES('$name','$email','$frequency','$team');
	";
	mysqli_query($conn,$sql) or die("Cant insert");
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Results</title>
<style>
	body{background-color:rgba(216,216,216,0.8)}
		div{border:2px solid black;width:50%;align:center;}
	
	#details{font-family:Garamond;font-size:20px;text-decoration:bold}
	a{font-size: 16px;
  color: green;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;}
	
	a:hover{ background-color: white;
  color: brown;}

</style>
</head>
<body>
<center>
<div>
<h2><font color=red>Thanks for Subscribing</font></h2><br/><br/><br/>

<?php
	echo "<p id='details'>Your name is ".$name."</p>";

?><br/>
<?php
	echo "<p id='details'>Your email is ".$email."</p>";

?><br/>
<?php
	echo "<p id='details'>Your favourite Team is ".$team."</p>";

?><br/>
<?php
	echo "<p id='details'>Your Subscription type is ".$frequency."</p>";

?><br/>
<a href="form1.html">Submit Another Response</a>
<br/><br/><br/>

</div>
<center>
</body>
</html>
