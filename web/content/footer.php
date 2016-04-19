
</div>	<!--FROM HEADER contentContainer-->

	<div id="footerContainer" class="color1">
     	<div id="footerNav">
			<ul>
            	<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="services.php">Insurance Services</a></li>
				<li><a href="">Client Services</a></li>
				<!--<li><a href="about.php">Policyholder Services</a></li>-->
				<li><?PHP echo (count($location)>1) ? "<a href='contact.php'>Locations</a>" : "<a href='contact.php'>Contact Us</a> " ;?></li>
			</ul>
        </div>		
    
        <div id="legal">
            <ul>
                <li>&copy; <?PHP echo $copyYear?><br /><?PHP echo $businessName; ?></li>
                <li><?PHP echo $mainAddr;?> <br /> <?PHP echo $city;?>, <?PHP echo $state;?> <?PHP echo $zip?></li>
                <li><a href=privacy.php class=bottom>Privacy Policy</a></li>
                <li><a href=terms.php class=bottom>Terms and Conditions</a></li>
            </ul>
        </div>	

        <div id="footerSM">
            <p>Connect With Us:</p>
			<ul class="snFooter">
<li><a href="mailto:tjackson@ipbrevard.com"><img src="images/mail.png" border="0" width="27" ></a></li>
<li><a href="<?php echo $fbAddress; ?>" target="_blank"><img src="images/fb.png" border="0" width="27" /></a></li>
<li><a href="<?php echo $gpAddress; ?>" target="_blank"><img src="images/gp.png" border="0" /></a></li>
</ul> 
                
             <p class="power"><a href="http://rainman.com"  target="_blank">
                <img src="http://rainman.com/logos/RainmanChrome50xWide.png" alt="rainman web development" border="0" /><br />
                powered by rainman.com</a></p>
        
        </div>     
		
		<div id="footerDesc">
        	<?PHP echo $footerDescription?>
        </div>	      
	</div> <!--footer-->
        
</div> <!--FROM HEADER mainContainer-->
</body>
</html>