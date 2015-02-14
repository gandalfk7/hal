<?php include 'config/sensors.php'; ?> <!-- this is the file where the sensors and how they get data are defined -->

<!DOCTYPE HTML>
<html lang="en-GB">
<head>
  <meta charset="UTF-8">
  <title>HAL@HomeSweetHome</title>

<link href="css/background-image.css" type="text/css" rel="stylesheet">

</head>
<body>

<?php include 'config/controls.php'; ?>

<div class="image">
	<!-- define the image to be used by hal -->
	<img src="images/casa_hal01.png" alt="" usemap="#Map" />

	<!-- text over the image, the position is defined in the css defined above -->
	<p1><span>Room:<span class='spacer'></span><br /><span class='spacer'></span><?php echo $sens01_temp . '°C' ?> </span></p1>
	<p2><span>External: <?php echo $sens02_temp . '°C' ?> </span></p2>

<!-- clickable areas defined on the image -->
<map name="Map" id="Map">
	<area alt="1" title="area1" href="#" shape="poly" coords="10,9,10,228,116,229,123,13" 
/>
	<area alt="2" title="area2" href="#" shape="poly" coords="128,12,124,757,402,755,403,13" />
	<area alt="3" title="area3" href="#" shape="poly" coords="415,172,416,631,626,631,626,171" />
	<area alt="4" title="area4" href="#" shape="poly" coords="641,173,641,627,861,630,862,173" />
	<area alt="5" title="area5" href="#" shape="poly" coords="872,174,873,758,1222,759,1223,172" />
	<area alt="6" title="area6" href="#" shape="poly" coords="1235,172,1234,758,1525,758,1526,172" />
	<area alt="7" title="area7" href="areas/area7_external.html" shape="poly" coords="415,644,415,757,862,758,860,646" />
	<area alt="8" title="area8" href="#" shape="poly" coords="414,10,415,159,1392,158,1394,12" />
	<area alt="9" title="area9" href="#" shape="poly" coords="1405,12,1408,157,1528,158,1529,13" />
</map>
</div>

<!-- debug info of sensor date -->
<p991><span><?php echo 'sens01 last update: '.$sens01_date ?><br /> </span></p2>
<p992><span><?php echo 'sens02 last update: '.$sens02_date ?><br /> </span></p2>

<!-- refresh page in 120 sec -->
<?php
$url1=$_SERVER['REQUEST_URI'];
header("Refresh: 120; URL=$url1");
?>

</body>
</html>
