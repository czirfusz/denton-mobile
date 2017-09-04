<?php
	$uagent = $_SERVER['HTTP_USER_AGENT'];
	$today = getdate();
	$timeStamp = $today["year"]."-".$today["mon"]."-".$today["mday"]." ".$today["hours"].":".$today["minutes"].":".$today["seconds"]."|".$uagent;
	$counterFile = 'counter.txt';
	$cf = fopen($counterFile, 'a') or die("Cannot open file!");
	fwrite($cf, $timeStamp."\n");
	fclose($cf);
?>
			

			<div data-role="content" data-theme="a">

				<div>
					<center>
						<img src="./image/zahnwellness_logo.png" width="300px" height="90px"/>
					</center>
				</div>

				<br/>

				<div data-role="controlgroup" data-type="horizontal">
					<center>
	        				<a href="javascript:changePage('index.php?page=service', 'slide');" class="ui-button-200" data-theme="d" data-role="button" data-icon="star">Leistungen</a>
					</center>
	        		</div>
	        	
	        		<div data-role="controlgroup" data-type="horizontal" style="padding-top: 10px;">
					<center>
	        				<a href="javascript:changePage('index.php?page=contact', 'slide');" class="ui-button-200" data-theme="d" data-role="button" data-icon="home">Ortung</a>
					</center>
	        		</div>

				<div data-role="controlgroup" data-type="horizontal" style="padding-top: 10px;">
					<center>
	        				<a href="javascript:changePage('index.php?page=time', 'slide');" class="ui-button-200" data-theme="d" data-role="button" data-icon="gear">Termine</a>
					</center>
	        		</div>

				<div data-role="controlgroup" data-type="horizontal" style="padding-top: 10px;">
                                        <center>
                                                <a href="javascript:location.href='./content/vcard.php';" class="ui-button-200" data-theme="d" data-role="button" data-icon="arrow-d">V-card</a>
                                        </center>
                                </div>

				<br/>

			</div>
