
<?php 	//Set Page Specific Vars Here 
		//$generalTitle="";
		//$formEmail="john@rainman.com";
        $pagePhoto="headerIntro_1.jpg";
        $pagePhotoAlt="Independent Insurance Agent for $state";
?>
<?php include("Emailer_Captcha.php"); ?>

<?php include("header.php"); ?>

<div id="bodytext" class="column">

    <h1>Form Submitted</h1>
    
	<p>Thank you for your <?PHP echo $_POST["requestType"]; ?>.<br />
    We will process your information and contact you shortly.<br />
    If you have any questions, please <a href=contact.php>contact us</a>.</p>
</div>

<?php include("footer.php"); ?>