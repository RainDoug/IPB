<div id="sidebar" class="column">
	<div class="quickContact">
	
		<!--<?php echo ($slogan != "") ? "<h1> $slogan </h1>" : null;?>-->
		<h2>Contact Us </h2>
		<form action="form_generalAction.php" method="post" id="generalQuote" class="generalForm">
			<input type="hidden" name="toEmail" value="<?PHP echo $formEmail;?>" /> 
			<input type="hidden" name="requestType" value="request for contact" />
			<input type="hidden" name="mailSubject" value="Website Contact Request" />

			<p><input type="text"  name="Name" onFocus="clearText(this)" onBlur="clearText(this)" value="Your Name" width="100px"></p>
			<p><input type="text"  name="Phone" onFocus="clearText(this)" onBlur="clearText(this)" value="Your Phone Number" width="100px"></p>
			<p><input type="text"  name="Email" onFocus="clearText(this)" onBlur="clearText(this)" value="Your Email" width="100px"></p>
			<p><textarea name="Comments" value="Comments" onFocus="clearText(this)" onBlur="clearText(this)" class="sidebarTextBox">Comments</textarea></p>
			<p><input type="submit" value="submit" alt="submit" class="submitButton color1"/></p>	
		</form>
	</div>
	
	<?php if ($location) { 		
		foreach ($location as $key) {
			//if (count($location) > 1) { 
			
			echo (count($location) > 1) ? "<h3>{$key['city']} Location</h3>" : "<h3>{$businessName}</h3>"  ;
						
			echo "<p>";
			echo $key['phone']. "<br />";
			echo "{$key['address']} <br /> {$key['city']}, {$key['state']} {$key['zip']} <br/>";
			
			/* foreach ($key['email'] as $emailName => $emailAddress){
				echo "<a href='mailto:$emailAddress'>";
				echo ($emailName=="name") ? $emailAddress : $emailName . " : " . $emailAddress;
				echo "</a><br />";
			} */
			
			echo "</p>";
		}
	} ?>
    
	<a href="http://www.flhi.com/" target="_blank"><img src="images/frontline_logo.jpg" /></a>
    
	<!--<p style="text-align:center;"><img src="images/iia.png"></p> -->
</div>