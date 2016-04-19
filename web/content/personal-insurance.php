<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
        //$generalTitle="";
        //$formEmail="";
        $pagePhoto="banner_property.jpg";
        $pagePhotoAlt="$stateName Property Insurance";
?>
<?php include("header.php"); ?>
<?PHP include ("sidebarProperty.php");?>

<div id="bodytext" class="column">
<h1>Property Insurance Products</h1>
<p>We carry a wide array of personal insurance products to keep you and your family safe from danger.  We all know that
as hard as we try, there is always danger in the world, and accidents will happen.  But we don't have to leave the outcome of
accident up to fate.</p>
<p>We protect ourselves to make sure that just because we are hit by an irresponsible uninsured motorist, 
we aren't left wondering how to replace our car or even how we will get our kids to school in the morning while the mechanic 
fixes our car.</p>
<p>We take control of our lives by making sure that if a guest in your home has an accident, you are protected 
from  liability through an umbrella policy.</p>
<p>It doesn't matter if you are a tenant who needs renters insurance to make sure that your possessions are protected from fire or theft, 
or a property owner who needs vacant dwelling insurance protection against vandalism or  frozen pipes, we can find the right level of coverage and the
appropriate insurance policy for your needs.</p>

<p>Whether you need <a href="homeowners-insurance.php">homeowners insurance</a>, <a href="auto-insurance.php">auto insurance</a>, 
<a href="tenant-dwelling-insurance.php">tenant dwelling</a>, <a href="flood-insurance.php">flood insurance</a>, or  other property 
coverage we can make ensure  you are appropriately covered.</p>

<p><a href="contact.php">Contact Us</a> today at <? echo $mainPhone[0];?> or visit the location nearest you, and let us find the right coverage for your farm and ranch needs. We can provide an free, exploratory <a href="insurance-quote.php">quote</a> that gives you a fast, accurate picture of rates and coverages.</p>
<p></p>


<div class="servicesList">
					<h1>Property Insurance Products</h1>

					<ul>
						<li>Homeowners</li>
						<li>Condo</li>
						<li>Renters</li>
						<li>Mobile Home</li>
						<li>Vacant Dwelling</li>
						<li>Tenant Dwelling</li>
						<li>Flood</li>
						<li>Personal Umbrella</li>
					</ul>
	</div>

	<div class="servicesImages">
		<img src="images/property-photo1.jpg" alt="<?PHP echo $altTag3?>" border="0"/>
		<img src="images/property-photo2.jpg" alt="<?PHP echo $altTag4?>" border="0"/>
		<img src="images/property-photo3.jpg" alt="<?PHP echo $altTag5?>" border="0"/>
	</div>
</div>

<?php include("footer.php"); ?>
