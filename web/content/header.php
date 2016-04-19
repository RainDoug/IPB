<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="<?PHP include('meta-description.php'); ?>" />
<meta name="keywords" content="<?PHP include('meta.php'); ?>" />

<?PHP include('title.php'); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30700521-47']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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

/*function hideMenu( node ){	
	$("#contentNav ul li a").css("color", "#666");
}*/



$(document).ready(function () { 	
	//$("#contentNav li:nth-child(even)").css("background","#b2aa7e");	
	$(".generalForm fieldset ul li:even").css("background","#DDD");
	
	/*$("#contentNav li").hover(	
				function () {
					if (!menuIsOpen){
						$('ul', this).slideDown(500);
						menuIsOpen = 1;
					}
				},
				function () {
					$('ul', this).slideUp(1000);
					menuIsOpen = 0;
				}
	);*/
	
	$('#s3slider').s3Slider({ 
		  timeOut: 5000 
	});
	
	

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
	
	<!--Logo is moved to bottom to prvent it from being lost in IE7-->
	
	
	<div id="lesserNav">
    	
		<div id="snContainer">
        	Connect With Us:
			<ul class="snHeader">
<li><a href=" <?php echo $mainEmail; ?>"><img src="images/mail.png" border="0" width="27" ></a></li>
<li><a href="<?php echo $fbAddress; ?>" target="_blank"><img src="images/fb.png" border="0" width="27" /></a></li>
<li><a href="<?php echo $gpAddress; ?>" target="_blank"><img src="images/gp.png" border="0" /></a></li>
</ul> 
		</div>
        
		<div id="linkBar">
			<a href="index.php">Home</a> 
			<a href="about.php">About Us</a> 
			<?PHP echo (count($location)>1) ? "<a href='contact.php'>Locations</a>" : "<a href='contact.php'>Contact Us</a> " ;?>
			<b><?PHP echo $mainPhone; ?></b>
		</div>   
        <div style="clear:both;"></div>
        <div style="float: right;height: auto;position: relative;right: 110px;top: -25px;width: auto;">
        
        	<a href="quote.php"><img src="images/get-a-quote.png" /></a>
        </div> 
	</div>

	
    
    <div class="contentNav">
    	<ul>
        	<li class="color1"><a href="index.php">Home</a></li>            
        	<li class="color2"><a href="services.php"
                    onmouseover="menuopen('menu2')"
                    onmouseout="menuclosefade()">Insurance Services</a>				
                   <div id="menu2" class="color1"
                        onmouseover="menucancelfadetimer()"
                        onmouseout="menuclosefade()">        	
                        <a href="vehicle-insurance.php">Vehicle Insurance</a>
                        <a href="business-insurance.php">Business Insurance</a>
                        <a href="life-insurance.php">Life/Health Insurance</a>
                        <!--<a href="calculators.php">Financial Calculators</a>-->
                        <!--<a href="glossary.php">Insurance Glossary</a>-->
                        <!--<a href="">MPCI Dates </a>-->
                        <a href="personal-insurance.php">Property Insurance</a>
                        <!--<a href="">Revenue Loss Trigger Worksheet</a>-->
                    </div>	
			</li>
            <li class="color1"><a href="insurance-quote.php" 
            		onmouseover="menuopen('menu3')"
                    onmouseout="menuclosefade()">Request A Quote</a>
                    <!--<div id="menu3" class="color2"
                        onmouseover="menucancelfadetimer()"
                        onmouseout="menuclosefade()">        	
                        <a href="insurance-quote.php">Personal Quote</a>
                        <a href="insurance-quote.php">Commercial Quote</a>
                        <a href="insurance-quote.php">Life/Health Quote</a>
                        
                        <!--<li><a href="http://green26.appliedonline.net/inscope/login.jsp" target="_blank">InScope Login</a></li>	-->
                        <!--<li><a href="hr-connection.php">HR Connection Login</a></li>-->					
                        <!--<li><a href="myWavePortal.php">MyWave Portal</a></li>		
                        <a href="certificate-request.php">Certificate Request</a>									
                    </div>-->
			</li>
        	<li  class="color2"><a href="employment.php"
            		onmouseover="menuopen('menu4')"
                    onmouseout="menuclosefade()">Client Services</a>
                    <div id="menu4" class="color1"
                        onmouseover="menucancelfadetimer()"
                        onmouseout="menuclosefade()">        	
                        <a href="about.php">About Us</a>
                        <a href="claims.php">Claims</a>
                        <a href="carriers.php">Carriers</a>
                        <a href="coverage.php">Coverage</a>
                        <!--<li><a href="http://green26.appliedonline.net/inscope/login.jsp" target="_blank">InScope Login</a></li>	-->
                        <!--<li><a href="hr-connection.php">HR Connection Login</a></li>-->					
                        <!--<li><a href="myWavePortal.php">MyWave Portal</a></li>		
                        <a href="certificate-request.php">Certificate Request</a>-->									
                    </div>
			</li>
        	<li class="color1"><a href="contact.php"
            		onmouseover="menuopen('menu4')"
                    onmouseout="menuclosefade()">Contact Us</a>
                <!--<div id="menu4" class="color1"
                    onmouseover="menucancelfadetimer()"
                    onmouseout="menuclosefade()">        	
					<a href="contact.php#Chappell">Chappell</a>		
                    <a href="contact.php#Norfolk">Norfolk</a>	
                    <a href="contact.php#Scottsbluff">Scottsbluff</a>	
                    <a href="contact.php#Aberdeen">Aberdeen</a>	
                    <a href="contact.php#Sterling">Sterling</a>	
                </div>-->			
			</li>
            
		</ul>
	</div>
	
	<div id="blingBar">
    		<?PHP if (isset($pagePhoto)){ ?>  
            	<img src="images/<?PHP echo $pagePhoto?>" alt="<?PHP echo $pagePhotoAlt; ?>" />
			<? } else { ?>
			   <div id="s3slider">
				   <ul id="s3sliderContent">
					  <li class="s3sliderImage">
						  <img src="images/headerIntro_1.jpg" alt="<?PHP echo $headerAlt; ?>" >
						  <span><?=$businessName?> proud community supporters.</span>
					  </li>
					  <li class="s3sliderImage">
						  <img src="images/headerIntro_2.jpg" alt="<?PHP echo $headerAlt; ?>" >
						  <span>No matter how large your liability, we can help cover your business.</span>
					  </li>
					  <li class="s3sliderImage">
						  <img src="images/headerIntro_3.jpg" alt="<?PHP echo $headerAlt; ?>" >
						  <span></span>
					  </li>
					  <li class="s3sliderImage">
						  <img src="images/headerIntro_4.jpg" alt="<?PHP echo $headerAlt; ?>" >
						  <span>We work with you to develop protection and management plans that make sense.</span>
					  </li>
                      <li class="s3sliderImage">
						  <img src="images/headerIntro_5.jpg" alt="<?PHP echo $headerAlt; ?>" >
						  <span>We know vehicle insurance inside and out.</span>
					  </li>
					  <div class="clear s3sliderImage"></div>
				   </ul>
				</div>
				
    			<?PHP } ?>
    </div>
	<a href="index.php"><img src="images/logo.png" border="0" class="logo" alt="<?PHP echo $headerAlt; ?>" /></a>
	<div id="contentContainer" class="color2">