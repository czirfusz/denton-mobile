<html>

	<head>

		<link rel="stylesheet" href="./css/jq.m-wellness.css" />
		<script type="text/javascript" src="./js/jquery-1.6.2.js"></script>
		<script type="text/javascript" src="./js/jquery.mobile-1.0.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

		<meta http-equiv="expires" content="0" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="pragma" content="no-cache" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta name="keywords" content="zahnwellness, mobile, handy, vcard, drcaspary, caspary, zahn, wien, 1060, emese, 6. bezirk, zahnarzt, zahnärztin, dr, caspari, kaspary, kaspari, raimund theater, mariahilf">

		<title>Zahnwellness - Zahnarztpraxis Dr. Caspary</title>

		<script>

			function changePage(destination, transition)
            		{
			//	location.href = destination;
                		$.mobile.changePage( destination, {
                    			transition: transition,
					reverse: true
               			});
            		}

			function calcDist(mylat, mylng, targetlat, targetlng)
            		{	
                		//alert(mylat + ' ' + mylng + ' ' + targetlat + ' ' + targetlng);
            			var R = 6371; // km
            			var dLat = (targetlat-mylat) * Math.PI / 180;
            			var dLon = (targetlng-mylng) * Math.PI / 180;
            			var lat1 = mylat * Math.PI / 180;
            			var lat2 = targetlat * Math.PI / 180;

            			var a = Math.sin(dLat/2) * Math.sin(dLat/2) + Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
            			var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
            			var dist = R * c;

            			return Math.round(dist*100)/100;
            		}	

		</script>

	</head>

	<body>

		<!--div data-role="page" id="index" data-theme="a" style="background-image:url('./image/zahnwellness.gif'); background-repeat:no-repeat; background-position:center; background-size: 100% auto;"-->
		<div data-role="page" id="main" data-theme="a">

			<div data-role="header" data-theme="a" id="header" style="height: 0px;">
			</div>

			<?php
				$page = $_GET["page"];
				if ( $page == "contact" )
					include("./content/contact.php");
				else if ( $page == "service" )
                                        include("./content/service.php");
				else if ( $page == "time" )
                                        include("./content/time.php");
				else
					include("./content/start.php");
			?>

			<div data-role="footer" data-theme="b" style="height: 100px;">
				<center>
					<div style="font-weight: bold;">
                                                Dr. med. univ. EMESE CASPARY
                                        </div>
					<div style="color: #e39000; font-weight: bold;">
						ALLE KASSEN
					</div>
					<div>
						Terminvergabe:&nbsp;
						<a href="tel:+4315974692">
							01/597 46 92
						</a>
					</div>
					<div>
                                                Strohmayergasse 7/8 1060 Wien
                                        </div>
				</center>
			</div>

		</div>

	</body>

</html>
