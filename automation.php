<!DOCTYPE html>
<html>
<head>
<meta name="H.O.D.O.R" content="H.O.D.O.R" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="icon" type="png" href="home.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/new.css">
</head>
<body>
  <title>H.O.D.O.R</title>
<nav>
  <div class="container">
  <div class="navbar-header">
  	<h2>H.O.D.O.R</h2>
  </div>
    <ul class="nav">
      <li><a href="#top">Home</a></li>
      <li><a href="automation.php">Automation</a></li>
	  <li><a href="about.html">About</a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron">
<div class="portfolio" id="portfolio">
  <div class="container">
    <h2>Home Automation</h2>
   	
	<font face="calibri">
		<div align="center">
		<img src="images/header.png" width="75" height="auto">
		
		<form method="post" action="index.php">
		<table>
			<tr><td><h2 class="text-center">Room1</h2>
			    Please click on buttons to control your room</td>
			</tr>
		</table>
		<table style="text-align: left;" border=1>
			<tr>
				<td><img src="images/fan-off.png" width=40px>
					<?php 
						system("gpio mode 25 out");
						if(isset($_POST['off1']))
						{
							echo '<img src="images/fan-off.png" width=40px>';
							exec("gpio write 25 0");	
						}
						if(isset($_POST['on1']))
						{
							echo '<img src="images/fan-on.gif" width=40px>';
							exec("gpio write 25 1");
						}
				   
					?>
				</td>
				<td><h4>FAN1</h4><input type="submit" value="ON" name="on1" style="background-color: green;width:40px;"><br>
						 <input type="submit" value="OFF" name="off1" style="background-color: red;width:40px;">
				</td>
				<td><img src="images/tube-off.png" width=40px>
					<?php 
						system("gpio mode 26 out");
						if(isset($_POST['off2']))
						{
							echo '<img src="images/tube-off.png" width=40px>';
							exec("gpio write 26 0");
						}
						if(isset($_POST['on2']))
						{
							echo '<img src="images/tube-on.gif" width=40px>';
							exec("gpio write 26 1");
						}
				    ?>
				</td>
				<td><h4>LIGHT1</h4><input type="submit" value="ON" name="on2" style="background-color: green;width:40px;"><br>
						   <input type="submit" value="OFF" name="off2" style="background-color: red;width:40px;">
				</td>
			</tr>	
		
			<tr>
				<td><img src="images/fan-off.png" width=40px>
					<?php 
						system("gpio mode 28 out");
						if(isset($_POST['off3']))
						{
							echo '<img src="images/fan-off.png" width=40px>';
							exec("gpio write 28 0");	
						}
						if(isset($_POST['on3']))
						{
							echo '<img src="images/fan-on.gif" width=40px>';
							exec("gpio write 28 1");
						}
				     ?>
				</td>
				<td><h4>FAN2</h4><input type="submit" value="ON" name="on3" style="background-color: green;width:40px;"><br>
						 <input type="submit" value="OFF" name="off3" style="background-color: red;width:40px;">
				</td>
				<td><img src="images/tube-off.png" width=40px>
					<?php 
						system("gpio mode 29 out");
						if(isset($_POST['off4']))
						{
							echo '<img src="images/tube-off.png" width=40px>';
							exec("gpio write 29 0");
						}
						if(isset($_POST['on4']))
						{
							echo '<img src="images/tube-on.gif" width=40px>';
							exec("gpio write 29 1");
						}
				    ?>
				</td>
				<td><h4>LIGHT2</h4><input type="submit" value="ON" name="on4" style="background-color: green;width:40px;"><br>
						   <input type="submit" value="OFF" name="off4" style="background-color: red;width:40px;">
				</td>
			</tr>		
		</table>
		</form>
	</div>
	</div>
	</div>
	<br><br><br><br>
		