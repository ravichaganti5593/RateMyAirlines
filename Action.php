<?php

header("refresh:15;url=Ratings&Rankings.html");

$airline = $_POST['Airline'];
$origin = $_REQUEST['Origin'];
$destination = $_REQUEST['Destination'];
$duration = $_REQUEST['Duration'];
$food = $_REQUEST['Food'];
$ife = $_REQUEST['IFE'];
$ambiance = $_REQUEST['Ambiance'];
$service = $_REQUEST['Service'];
$performance = $_REQUEST['Performance'];
$groundstaffservice = $_REQUEST['GroundStaffService'];
$checkbox = isset($_POST['Checkbox']) ? 1 : 0;
$sum1 = $food + $ife + $ambiance + $service + $performance + $groundstaffservice;
$sum = $sum1/6*10;
//OriginIndex, DestinationIndex, TimeMultiple, EffectiveScore, difference of OriginalScore and Effective Score. 


if (!empty($_SERVER['HTTP_CLIENT_IP'])){
  $ip=$_SERVER['HTTP_CLIENT_IP'];
}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}elseif (!empty($_SERVER['REMOTE_ADDR'])){
  $ip=$_SERVER['REMOTE_ADDR'];
}


echo "
	<!DOCTYPE html>
	<html lang=\"en\">
	<head>
		<title>Ratings Submission</title>
		<meta charset=\"utf-8\">
		<link rel=\"stylesheet\" href=\"css/reset.css\" type=\"text/css\" media=\"all\">
		<link rel=\"stylesheet\" href=\"css/layout.css\" type=\"text/css\" media=\"all\">
		<link rel=\"stylesheet\" href=\"css/style.css\" type=\"text/css\" media=\"all\">
		<link href=\"selectExample.css\" rel=\"stylesheet\">
		<script type=\"text/javascript\" src=\"js/jquery-1.6.js\" ></script>
		<script type=\"text/javascript\" src=\"js/cufon-yui.js\"></script>
		<script type=\"text/javascript\" src=\"js/cufon-replace.js\"></script>  
		<script type=\"text/javascript\" src=\"js/Vegur_300.font.js\"></script>
		<script type=\"text/javascript\" src=\"js/PT_Sans_700.font.js\"></script>
		<script type=\"text/javascript\" src=\"js/PT_Sans_400.font.js\"></script>
		<script type=\"text/javascript\" src=\"js/atooltip.jquery.js\"></script>
		<!--[if lt IE 9]>
			<script type=\"text/javascript\" src=\"js/html5.js\"></script>
			<link rel=\"stylesheet\" href=\"css/ie.css\" type=\"text/css\" media=\"all\">
		<![endif]-->
		<!--[if lt IE 7]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href=\"http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode\"><img src=\"http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg\" border=\"0\" height=\"42\" width=\"820\" alt=\"You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.\" /></a>
			</div>
		<![endif]-->
		<style type=\"text/css\">
			div.topBox{
				margin-top: 0px;
				margin-left: 0px;
				width: 650px;
				height: 125px;
				visibility: hidden;
			}
			div.form{
				margin-left: auto;
				margin-right: auto;
			}
			div.badatable{
				margin-left: 50px;
			}
			div.badatable1{
				margin-left: 150px;
			}
			#trial{
				padding-left: 50px;
				padding-top: 20px;
			}
			div.bg1{
				border-top-left-radius: 5px;
				border-top-right-radius: 5px;
				border-bottom-left-radius: 5px;
				border-bottom-right-radius: 5px;
			}
			input{
				border-top-left-radius: 2px;
				border-top-right-radius: 2px;
				border-bottom-right-radius: 2px;
				border-bottom-left-radius: 2px; 
			}

div.bottom{width:100%;background: black;}		</style>
	</head>
	<body id=\"page2\">
		<div class=\"main\">
			<!--header -->
			<header>
				<div class=\"topBox\"> 
					<p></p>
				</div>
				<nav>
					<ul id=\"menu\">
						<li><a href=\"index.html\"><span>Home</span></a></li>
						<li class=\"Ratings&Rankings.html\"><a href=\"Ratings&Rankings.html\"><span>Ratings & Rankings</span></a></li>
						<li><a href=\"BlueSpinach.html\"><span>BlueSpinach</span></a></li>
						<li><a href=\"Careers.html\"><span>Careers</span></a></li>
						<li class=\"last\"><a href=\"AboutUs.html\"><span>About Us</span></a></li>
					</ul>
				</nav>
			</header>
			<div class=\"main\">
				<br><br>
				<div class=\"bg1\">
				<article id=\"content2\">
					<div class=\"wrapper\">";


if ($airline != "" && $origin != "" && $destination != "" && $duration != "" && $food != "" && $ife != "" && $ambiance != "" && $service != "" && $performance != "" && $groundstaffservice != "" && $origin !== $destination && $checkbox == 1) {
	
	$error = 0;
} else {

	$error = 1;
	

					echo "<h3>Your rating was not stored in our databases because some of your inputs were wrong. Please check the following errors: </h3>";
					echo "<ul>";
					if ($airline == ""){

						echo "<li><h4>Airline field is missing. Please select an Airline from the drop-down menu.</h4></li>";	
					}
					else if ($origin == ""){

						echo "<li><h4>Origin field is missing. Please select the origin of your journey from the drop-down menu.</h4></li>";	
					}
					else if ($destination == ""){

						echo "<li><h4>Destination field is missing. Please select the destination of your journey from the drop-down menu.</h4></li>";	
					}
					else if ($duration == ""){

						echo "<li><h4>Duration field is missing. Please select the duration of your journey from the drop-down menu.</h4></li>";	
					}
					else if ($origin == $destination) {
						echo "<li><h4>Origin cannot be equal to destination.</h4></li>";
					}
					else if ($checkbox == 0) {
						echo "<li><h4>You forgot to read the Terms and Conditions. Please check the box and submit your rating again.</h4></li>";
					}
			
					echo "</ul>";

					
}

if ($error == 0) {

	$link = mysql_connect("localhost", "ravbhav_ratings", "b4223b2131") or die ("Sorry, there was some problem connecting to the server. Please email us at questions@ratemyairlines.com to report the error. <br><br>The page will redirect to the www.ratemyairlines.com/Ratings in 15 seconds or <a href=\"Ratings.php\" style = \"color: white;\">CLICK HERE</a>");
	mysql_select_db("ravbhav_ratings", $link) or die ("Sorry, there was some problem connecting to the server. Please email us questions@ratemyairlines.com to report the error. <br><br>The page will redirect to the www.ratemyairlines.com/Ratings in 15 seconds or <a href=\"Ratings.php\" style = \"color: white;\">CLICK HERE</a>");
	

	$query1 = "insert into table1 (Airline,Origin,Destination,Duration,Food,IFE,Ambiance,Service,Performance,GroundStaffService,OriginalScore,Checkbox,IPAddress,Time) values ('".$airline."','".mysql_real_escape_string($origin)."','".mysql_real_escape_string($destination)."','".$duration."','".$food."','".$ife."','".$ambiance."','".$service."','".$performance."','".$groundstaffservice."','".$sum."','".$checkbox."','".$ip."',NOW())";

	if (!mysql_query($query1, $link)) {
			die ("<h3>Sorry, your rating could not be stored in our databases. Please check your inputs and try to submit your rating again. If the problem still persists, please email us at questions@ratemyairlines.com to report an error. <br><br>The page will redirect to the www.ratemyairlines.com/Ratings in 15 seconds or <a href=\"Ratings.php\" style = \"color: white;\">CLICK HERE</a> </h3>");
	}
	
	else {
			echo ("<h3><img src = 'images/tick.jpg' align = 'left'/>Thank you for your rating! It has been successfully stored in our databases.<h4>Please visit www.ratemyairlines.com/Rankings on 1st November, 2015 at 00:00 EDT to check out the World Rankings!<br> </h4></h3>");
		}
}
	echo "<br>
					<br>
					
					<p>The page will redirect to the www.ratemyairlines.com/Ratings in 15 seconds or <a href=\"Ratings.php\" style = \"color: white;\">CLICK HERE</a></p>
					</div>
						</td>
						<td Id=\"td\"></td>
					</tr>
					</table>
					</form>
					</div>
					</div>
				</article>
			</div>
			</div>
		</div>
		<br><br><br>
		<div class=\"bottom\">
		<!--content end-->
		<!--footer -->
			<footer>
				<ul id=\"icons\">
					<li class=\"first\">Follow Us:</li>
					<li><a href=\"#\" class=\"normaltip\" title=\"Facebook\"><img src=\"images/icon1.jpg\" alt=\"\"></a></li>
					<li><a href=\"#\" class=\"normaltip\" title=\"Twitter\"><img src=\"images/icon2.jpg\" alt=\"\"></a></li>
					<li><a href=\"#\" class=\"normaltip\" title=\"Google+\"><img src=\"images/icon3.jpg\" alt=\"\"></a></li>
					<li><a href=\"#\" class=\"normaltip\" title=\"YouTube\"><img src=\"images/icon4.jpg\" alt=\"\"></a></li>
				</ul>
				BlueSpinachRatings &copy; 2015 <br>
				<!-- {%FOOTER_LINK} -->
			</footer>
		<!--footer end-->
		</div>
		<script type=\"text/javascript\"> Cufon.now(); </script>
      
	</body>
	</html>";

?>