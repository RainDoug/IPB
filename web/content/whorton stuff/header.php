<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><meta http-equiv="X-UA-Compatible" content="IE=edge" />
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?PHP echo $generalTitle ?></title>
<meta name="description" content="<?PHP echo $siteDescription; ?>" />
<meta name="keywords" content="<?PHP echo $keywords?>" />
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/s3Slider.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/tab.css" />

<!--<link rel="stylesheet" type="text/css" media="screen" href="css/dropdown_menu.css" />-->

<!--[if IE]>
<style>
#contentNav {width:720px;}
#lesserNav {line-height: 1.3em;}

</style>
<![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="scripts/s3Slider.js"></script>
<script type="text/javascript" src="scripts/navmenu.js"></script>
<?PHP if (isset($pageScript)) {
	echo "<script src='scripts/$pageScript'></script>";
} ?>

<script>
//for quick content note
function clearText(field){
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

$(document).ready(function () { 
	//$("#contentNav li:nth-child(even)").css("background","#b2aa7e");
	$(".generalForm fieldset ul li:even").css("background","#DDD");

	<?PHP if (!isset($pagePhoto)){ ?>
	$('#s3slider').s3Slider({ 
		  timeOut: 5000 
	});
	<? } ?>

		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content
		//On Click Event
		$("ul.tabs li").click(function() {
			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content
			var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});
	
});


</script>

</head>

<body>
<center>
<div id="mainContainer">

	<!--logo is at the bottom of the stack so that it shows up IE7-->
	
	
	<div id="lesserNav">
	  <div id="snContainer">
       	  
		  <?PHP echo socialMediaIcons("snHeader")?>
	  </div>
        
		<div id="linkBar">
			<a href="index.php">Home</a>| 
			<a href="about.php">About <?php echo $businessName?></a>| 
			<?PHP echo (count($location)>1) ? "<a href='contact.php'>Locations</a>" : "<a href='contact.php'>Contact Us</a> " ;?>|
			<b>800-945-1191<!--<?PHP echo $mainPhone; ?>--></b>
		</div>    
	</div>

<div class="contentNav">
    	<ul>
        	<li class="color1"><a href="business-insurance.php"
            		onmouseover="menuopen('menu1')"
            		onmouseout="menuclosefade()">Industry Solutions</a>
                    <div id="menu1" class="color1"
                        onmouseover="menucancelfadetimer()"
                        onmouseout="menuclosefade()">        	
                          <a href="apartment.php">Apartment Buildings</a>
                          <a href="condo.php">Condos</a>
                          <a href="construction.php">Construction</a>
                          <a href="education.php">Education Institutions</a>
                          <a href="healthcare.php">Healthcare</a>
                          <a href="hotels.php">Hotels</a>
                          <a href="light-industrial.php">Light Industrial</a>
                          <a href="marinas.php">Marinas</a>
                          <a href="mobile-food-vendor.php">Mobile Food Vendors</a>
                          <a href="office-buildings.php">Office Buildings</a>
                          <a href="restaurants.php">Restaurants</a>
                          <a href="self-storage.php">Self-Storage</a>
                          <a href="shopping-centers.php">Shopping Centers</a>
                          <a href="theatres.php">Theatres</a>
                          <a href="technology.php">Technology</a>
                          <a href="wholesale.php">Wholesale/Distributors</a>
                          <a href="religious.php">Religious Institutions</a>
                          <a href="sport.php">Sports &amp; Fitness</a>
                    </div>
			</li>
        	<li class="color2"><a href="personal-insurance.php"
                    onmouseover="menuopen('menu2')"
                    onmouseout="menuclosefade()">Individual Solutions</a>				
                    <div id="menu2" class="color2"
                        onmouseover="menucancelfadetimer()"
                        onmouseout="menuclosefade()">        	
                        <a href="insurance-quote.php">Get a Quote</a>
                        <a href="auto-insurance.php">Auto Insurance</a>
                        <a href="vehicle-insurance.php">Vehicle Insurance</a>
                        <a href="homeowners-insurance.php">Homeowners Insurance</a>
                        <a href="tenant-dwelling-insurance.php">Tenant Dwelling</a>
                        <a href="rental-dwelling-insurance.php">Rental Dwelling</a>
                        <a href="flood-insurance.php">Flood Insurance</a>
                        <a href="health-insurance.php">Health Insurance</a>
                        <a href="life-insurance.php">Life Insurance</a>
                        <a href="http://www.dentalselect.com/?id=Njk0&amp;agent_name=Jim Whorton and Associates Inc&amp;agentid=105242&amp;state=Texas" target="_new">Dental Select Electronic Enrollment</a>
                    </div>	
			</li>
        	<li  class="color1"><a href="about.php"
            		onmouseover="menuopen('menu3')"
                    onmouseout="menuclosefade()">Policyholder Services</a>
                    <div id="menu3" class="color1"
                        onmouseover="menucancelfadetimer()"
                        onmouseout="menuclosefade()">        	
                        <a href="about.php">About Us</a>
                        <a href="claims.php">Claims</a>
                        <a href="links.php">Useful Sites</a>
                        <a href="calculators.php">Financial Calculators</a>
                        <a href="glossary.php">Insurance Glossary</a>					
                        <!--<li><a href="carriers.php">Carriers</a></li>-->
                        <!--<li><a href="coverage.php">Coverage</a></li>-->
                        <!--<li><a href="http://green26.appliedonline.net/inscope/login.jsp" target="_blank">InScope Login</a></li>	-->
                        <!--<li><a href="hr-connection.php">HR Connection Login</a></li>-->					
                        <!--<li><a href="myWavePortal.php">MyWave Portal</a></li>			-->		
                        <a href="certificate-request.php">Certificate Request</a>									
                    </div>			
			</li>
        	<li class="color2"><a href="insurance-quote.php" class="color2"
            		onmouseover="menuopen('menu4')"
                    onmouseout="menuclosefade()">Programs</a>
                <div id="menu4" class="color2"
                    onmouseover="menucancelfadetimer()"
                    onmouseout="menuclosefade()">        	
                      <a href="taa.php">Texas Apartment Assoc.</a>
                      <a href="http://www.mobilefoodvendorsinsurance.com" target="_blank">Mobile Food Vendors</a>	
                </div>			
			</li>
		</ul>
	</div>
	  		<?PHP if (isset($pagePhoto)){ ?>
			<div id="blingBar">
				<div id="subBlingBar">
				</div>
            	<img src="images/<?PHP echo $pagePhoto?>" alt="<?PHP echo $pagePhotoAlt; ?>" />
			</div>
			<? } else { ?>
			<script>
			$("#contentNav ul li ul").css("height","");
			</script>
			<div id="blingBarFlash">
				<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="870" height="275" id="home animation" align="middle">
				<param name="wmode" value="transparent" /> 
				<param name="allowScriptAccess" value="sameDomain" />
				<param name="movie" value="home_animation_R4_4_timing.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<embed src="home_animation_R4_4_timing.swf"  wmode="transparent" quality="high" bgcolor="#ffffff" width="870" height="275" name="home animation" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
				</object>
			</div>
<!--			
			   <div id="s3slider">
				   <ul id="s3sliderContent">
					  <li class="s3sliderImage">
						  <img src="images/headerIntro_1.jpg" alt="<?PHP echo $headerAlt; ?>" >
						  <span><?=$businessName?> is  your expert source for insurance coverage.</span>
					  </li>
					  <li class="s3sliderImage">
						  <img src="images/headerIntro_2.jpg" alt="<?PHP echo $headerAlt; ?>" >
						  <span>No matter how large your liability, we can help cover your business.</span>
					  </li>
					  <li class="s3sliderImage">
						  <img src="images/headerIntro_3.jpg" alt="<?PHP echo $headerAlt; ?>" >
						  <span>Whether you need to insure your business or insure your private property, our insurance coverage will serve your needs and your budget!</span>
					  </li>
					  <li class="s3sliderImage">
						  <img src="images/headerIntro_4.jpg" alt="<?PHP echo $headerAlt; ?>" >
						  <span>With a range of specialty insurance products, you can be sure we have you covered.</span>
					  </li>
					  <div class="clear s3sliderImage"></div>
				   </ul>
				</div>
-->			
    			<?PHP } ?>
    
    
	<a href="index.php"><img src="images/logo.jpg" border="0" class="logo" alt="<?PHP echo $headerAlt; ?>" /></a>
	<div id="contentContainer">