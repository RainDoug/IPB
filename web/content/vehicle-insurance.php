<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
        $pageTitle="Vehicle Insurance";
        $pageMetaKeyword="auto insurance Florida, car insurance Florida, classic car insurance Florida, motorcycle insurance Florida, boat insurance Florida, watercraft insurance Florida";
        $pageMetaDescription="At Hennessey Insurance Services, you won't find celebrity spokespersons or talking animals to promote our auto insurance, just experienced, knowledgeable agents ready to offer you quality coverage at affordable prices.";
        $pagePhoto="banner_auto_insurance.jpg";
        $pagePhotoAlt="ATV Insurance, RV Insurance";
?>
<?php include("header.php"); ?>
<?PHP include ("sidebar.php");?>

<div id="bodytext" class="column">
<h1>Vehicle Insurance<!-- in <?php echo $stateName;?>--></h1>
<p>At Hennessey Insurance Services, you won't find celebrity spokespersons or talking animals to promote our auto insurance, just experienced, knowledgeable agents ready to offer you quality coverage at affordable prices.</p>
<p>Whether you need to coverage for your standard automobiles, classic cars, motorcycles, recreational vehicles or boat and watercraft, let us review your insurance needs and tailor a program to your needs.</p>
<p>Start a <a href="quote.php?type=personal">Free Rate Quote</a> or call us at 321-752-5266 and let the professional insurance agents at Hennessey Insurance Services demonstrate our dedication to be your path to peace of mind.</p>


<div class="servicesList">
					<h1>Vehicle Insurance Products</h1>

					<ul>
						<li>Standard Auto</li>
						<li>Non-Standard Auto</li>
						<li>Classic Car</li>
                        <li>RV</li>
                        <li>Motorcycle</li>
                        <li>Watercraft</li>
					</ul>
	</div>
	</div>

	<div class="servicesImages">
		<img src="images/vehicle-photo1.jpg" alt="<?PHP echo $altTag3?>" border="0"/>
		<img src="images/vehicle-photo2.jpg" alt="<?PHP echo $altTag4?>" border="0"/>
		<img src="images/vehicle-photo3.jpg" alt="<?PHP echo $altTag5?>" border="0"/>
	</div>
</div>

<?php include("footer.php"); ?>
