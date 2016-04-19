<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
        //$generalTitle="";
        //$formEmail="";
        $pagePhoto="banner_auto_insurance.jpg";
        $pagePhotoAlt="$stateName Auto Insurance";
?>
<?php include("header.php"); ?>
<?PHP include ("sidebar.php");?>

<div id="bodytext" class="column">
<h1>Vehicle Insurance</h1>
<p>Having personal auto insurance is a fact of life, but  understanding all the different options can be  confusing.</p>
<p>If you are a responsible driver, then you need to protect yourself from other drivers by carrying liability insurance.  Even the best drivers
can be liable for things beyond their control--you might not be able to avoid that patch of black ice, but you can be the good guy and make sure that 
you protect other drivers by maintaining liability insurance.</p>
<p>But you need to seriously consider that there are a number of other coverages that you could have.  Maybe you have them through your
current carrier, and they aren't the best or most appropriate for your situation. Maybe you don't need premium comprehensive-coverage policy 
on your teenager's $800 junker.
We would be happy to take a look at your policy and see if you have an appropriate coverage.</p>
<p>For more information about auto insurance, please click <a href="vehicle-detail.php">here</a>.</p>
<p><a href="contact.php">Contact Us</a> today at <? echo $mainPhone[0];?> or visit the location nearest you, and let us find the right coverage for your farm and ranch needs. We can provide an free, exploratory <a href="insurance-quote.php">quote</a> that gives you a fast, accurate picture of rates and coverages.</p>
<div class="servicesList">
					<h1>Auto Insurance Products</h1>

					<ul>
						<li>Standard Auto</li>
						<li>Non-Standard Auto</li>
						<li>Classic Car</li>
                        <li>RV</li>
                        <li>Motorcycle</li>
                        <li>Watercraft</li>
					</ul>
	</div>

	<div class="servicesImages">
		<img src="images/vehicle-photo1.jpg" alt="<?PHP echo $altTag3?>" border="0"/>
		<img src="images/vehicle-photo2.jpg" alt="<?PHP echo $altTag4?>" border="0"/>
		<img src="images/vehicle-photo3.jpg" alt="<?PHP echo $altTag5?>" border="0"/>
	</div>
</div>

<?php include("footer.php"); ?>
