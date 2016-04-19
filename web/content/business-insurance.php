<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
        $pageTitle="Commercial Insurance";
        $pageMetaKeyword="Cocoa Beach insurance, Melbourne Beach insurance, commercial property insurance Florida, general liability insurance Florida, workers comp Florida, workers compensation Florida, umbrella insurance Florida, bonds Florida";
        $pageMetaDescription="Hennessey Insurance Services understands how the right insurance can protect you and your business from any unforeseen liabilities.";
        $pagePhoto="banner_commercial_insurance.jpg";
        $pagePhotoAlt="Independent Insurance Agent for $state";
		//$actionArea="<ul><li><a href='#'>john</a></li><li><a href='#'>bob dobbs</a></li></ul>";
?>

<?php include("header.php"); ?>
<?PHP include ("sidebar.php");?>

<div id="bodytext" class="column">
<h1>Business Insurance You Can Count On</h1>

<p> <? echo $businessName?> understands how the right insurance can protect you and your business from any unforeseen liabilities. Whether you've just started a home-based business in Cocoa Beach or your business is established and growing in Melbourne Beach, you can count on our professional insurance agents to provide businesses—large and small—with quality insurance products and policies to safeguard your assets.  Whether you need commercial property, general liability, workers compensation, umbrella insurance or bonds, you count on us to provide comprehensive coverage at competitive prices. </p>
<p>Whether you need a <a href="commercial-auto.php">commercial auto</a> policy to ensure your work truck or you need 
<a href="general-liability.php">general liability</a> to protect your entire business, <?php echo $businessName?> is 
your source for expert insurance advice.</p>
<p>We offer coverage ranging from <a href="small-business-package.php">Small Business Packages</a> to highly specific policies 
written just for your needs, and offer <a href="commercial-umbrella.php">Commercial Umbrella</a> insurance as well.</p>
<p>Call one of our experienced agents today at 321-752-5266 or start a <a href="quote.php?type=commercial">Free Rate Quote.</a> Let us review your insurance requirements and tailor a program to protect your assets and minimize your risk of loss while we demonstrate our dedication to delivering quality insurance policies that include comprehensive value and superior customer care. </p>
<p>You can also get a general overview of business insurance <a href="business-detail.php">here</a>.</p>

<div class="servicesList">
					<h1>Business Insurance Products</h1>

					<ul>
						<li>Commercial Property</li>
						<li>General Liability</li>
						<li>Small Bus. Package</li>
						<li>Workers Compensation</li>
						<li>Bonds</li>
						<li>Inland Marine</li>
						<li>Commercial Auto</li>
						<li>Commercial Umbrella</li>

					</ul>
	</div>

	<div class="servicesImages">
		<img src="images/business-photo1.jpg" alt="<?PHP echo $altTag3?>" border="0"/>
		<img src="images/business-photo2.jpg" alt="<?PHP echo $altTag4?>" border="0"/>
		<img src="images/business-photo3.jpg" alt="<?PHP echo $altTag5?>" border="0"/>
	</div>
</div>


<?php include("footer.php"); ?>
