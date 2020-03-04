<html>
<head>
<link rel="stylesheet" href="styling.css">

<title>Earthworm(For Farmers)</title>
</head>
<body>

<center>
  
	<header>
		<h1>Earthworm</h1>
	</header>

</center>



<center><img  class = "image" src="img1.jpg" height=300px width=400px></center>
<div id ="division1"><h2>Why Are Indian Farmers Facing Problems?</h2></div>
<div id ="division">
<p>Since the 1960s, industrialised agriculture came into the picture. This has been successful but it is leading to a decrease in the variety of crops and livestock produced. Farmers have to face the issue of lesser rainfall due to improper irrigation. In a country like India, they have to struggle hard to achieve sustained progress in irrigation. Mostly, the farmers suffer from infrastructural and economic problems in their routine life. This is mainly due to the lack of education and technical resources.

Farmers are not acquainted with advanced agricultural practices. This holds them back from utilising the proper technical resources in farming and other practices. In order to reduce their problems, farmers should be educated about using big labour machines. If they get familiar with the mechanism of technical devices, farmers can eliminate several problems faced by them. Apart from this, by bringing power from different sources – nuclear, coal, solar and water  industrialised agriculture can become better.</p>
</div>

<h3>Problems being faced by farmers</h3>
<h5>1. Small and fragmented land-holdings</h5>
<h5>2.Seeds</h5>
<h5>3. Manures, Fertilizers and Biocides</h5>
<h5>4.Irrigation</h5>
<h5>5.Lack of mechanisation</h5>
<h5>6. Soil erosion</h5>
<h5>7. Agricultural Marketing</h5>
<h5>8.Inadequate storage facilities</h5>



<footer>
<?php session_start(); ?>
<nav class="section">
   <a href="aboutus.html">
	About us
   </a> | <a href="projects.html"> Projects</a>
 <?php 
		                     if (isset($_SESSION['Sname'])){
                                echo "Welcome, ".$_SESSION['Sname']."!";
			            ?> <a href = "main.php">logout</a>
                <?php } else { ?>
                        <a href = "login.php"> Login</a>
                        <a href = "registration.html"> Register</a>
                        <?php }
                       if(isset($_SESSION['Sname'])){
                         unset($_SESSION['Sname']);
                    } ?>
</nav>
</footer>
&copy; 2020-All rights reserved

</body>
</html>