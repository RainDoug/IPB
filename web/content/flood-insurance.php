<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
        //$generalTitle="";
        //$formEmail="";
        $pagePhoto="banner_flood_insurance.jpg";
        $pagePhotoAlt="flood insurance in $stateName";
?>
<?php include("header.php"); ?>
<?PHP include ("sidebar.php");?>

<div id="bodytext" class="column">
<h1>Flood Insurance in <?PHP echo $area;?></h1>

<p>Most homeowners policies do not include flood insurance, but it is an important element to protect your home.  While flooding is a rare occurence in some areas, the damage caused by rain, melting snow during thaws, storm surges, and mudflows fall under this category.</p>
<p>We help you make sure that you are protected.  We would be happy to review your liabilities and your existing coverage to determine if you  are covered and if that coverage is worth the cost.</p>
<p>If your community participates in the National Flood Insurance Program (NFIP), you may  be eligible for federally-sponsored Flood Insurance coverage for your home or 
business.</p>
<p>For more information about property-related insurance, click <a href="property-insurance-information.php">here.</a></p>

<p><a href="contact.php">Contact Us</a> today at <? echo $mainPhone[0];?> or visit the location nearest you, and let us find the right coverage for your farm and ranch needs. We can provide an free, exploratory <a href="insurance-quote.php">quote</a> that gives you a fast, accurate picture of rates and coverages.</p>
</div>


<?php include("footer.php"); ?>
