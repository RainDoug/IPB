<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
        //$generalTitle="";
        //$formEmail="";
        $pagePhoto="banner_health_insurance.jpg";
        $pagePhotoAlt="health insurance in $stateName";
?>
<?php include("header.php"); ?>
<?PHP include ("sidebar.php");?>

<div id="bodytext" class="column">
	<h1>Health Insurance for <?PHP echo $area;?></h1>
	
	<p>	Experienced health insurance agents at <?PHP echo $businessName; ?> can assist you by designing a 
	policy that best fits your personal or business needs.</p>
	<p>Navigating your health insurance options and needs is more complex today than it ever has been, but we
	are expert insurance agents who can help you understand the different policies and options.  Weighing the costs
	versus the benefits is not a trivial decision; you need to be sure that when you need healthcare it is 
	not at a catastrophic cost to your finances.</p>
	
	<p>We offer a broad range of optional coverage in <?PHP echo  $area;?>.</p>
	
	<!--<p>We also offer a broad range of financial products to help you grow and plan for your future.</p>-->
	
	<p>Call us at <span style="white-space:nowrap"><?PHP echo  $mainPhone;?></span> or start a <a href="quote.php">Free Rate Quote</a>.</p>
	<p>For more information on life insurance <a href="health-detail.php">click here</a>.</p>
	
	
  <div class="servicesList">
					<h1>Health Insurance Products</h1>

					<ul>
						<li>Individual Health</li>
						<!--<li>Short Term Coverage</li>
						<li>Health Access</li>
						<li>Supplemental Coverage</li>-->
						<li>Small Group Health</li>
						<!--<li>Indemnity Plans</li>
						<li>Major Medical</li>
						<li>International/Travel Medical</li>
						<li>Dental</li>
						<li>Vision</li>
						<li>Medicare Supplemental</li>-->

					</ul>
	</div>

	<!--<div class="servicesImages">
		<img src="images/health-photo1.jpg" alt="<?PHP echo $altTag3?>" border="0"/>
		<img src="images/health-photo2.jpg" alt="<?PHP echo $altTag4?>" border="0"/>
		<img src="images/health-photo3.jpg" alt="<?PHP echo $altTag5?>" border="0"/>
	</div>-->
</div>


<?php include("footer.php"); ?>
