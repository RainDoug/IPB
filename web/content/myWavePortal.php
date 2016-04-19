<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
        //$generalTitle="";
        //$formEmail="";
        $pagePhoto="headerIntro_1.jpg";
        $pagePhotoAlt="Independent Insurance Agent for $state";
?>
<?php include("header.php"); ?>
<?PHP include ("sidebar.php");?>

<div id="bodytext" class="column">
	
	<form action="https://www.zywave.com/zywavepublic/PortalRedirector.aspx" method="post" name="login" class="generalForm">
	<ul class="hrConnect">
		<li><img src="https://www.zywave.com/images/mw_loginsm1.gif" alt="OSHA Compliance Tools" /></li>
		<li>Username:<input type="input" size="10" name="u"></li>
		<li>Password:<input id="password1" size="10" name="p" type="password"></li>
		<li><input type="submit" value="Log in" id="submit1" name="submit1" class="submitButton" ></li>
		<li><a href="https://www.zywave.com/zywavenet/RetrieveLoginCredential.aspx?id=9899" target=_"top>Retrieve your login information</a></li>
	</ul>
	<input type="hidden" name="urlRedirect" value="default.asp">
	</form>
	

<h1>MyWave Portal</h1>
<p>MyWave Portal is a personalized website where our clients can collaborate with our agency  online, access timely information and resources, or connect 
with over 350,000   peers across the United States and Canada. Three tools offered through MyWave  Portal include:</p>

          <h2>MyWaveRM</h2>
		  <p>Provides a vast library of customizable documents and newsletters to help   effectively communicate with employees about risk 
		  management and safety related   issues. It also gives quick and easy access to useful industry related websites,   and a 
		  personal hotline to e-request often asked for information.  For more information on MyWaveRM 
		  <a href="sellsheets/MyWave_RM.pdf" title="MyWaveRM Information Sheet">click here</a> or ask your agent.</p>


          <h2>MyWaveOSHA</h2>
		  <p>Helps simplify and manage OSHA reporting by providing an OSHA Log online, your   compliant 300 and 301 logs just a 
		  click away. Makes entering or updating   incidents a worry free process through the system&rsquo;s wizard based entering  
		  process and determination of recordability. You can track your incidents by   division, department, etc. 
		  and generate up to the minute OSHA reports drilling   down to help identify your particular problem areas. 
		  For more information on MyWaveOSHA <a href="sellsheets/MyWave_Osha.pdf" title="MyWaveOSHA Information Sheet">click here</a> 
		  or ask your agent.</p>
          <h2>MyWaveHR</h2>
		  <p>Provides a vast library of customizable documents, newsletters, and useful   website links to help effectively 
		  communicate with employees about human   resource and wellness related issues, as well as legislative guides which   
		  include forms, updates and answers to commonly asked questions on regulations   such as COBRA, HIPAA, FMLA, Section 
		  125 and Medicare Part D. For more information on MyWaveHR <a href="sellsheets/MyWave_HR.pdf" title="MyWaveHR Information Sheet">click here</a> 
		  or ask your agent.</p>
		<p>For more information on MyWave Portal <a href="sellsheets/MyWave_Portal.pdf" title="MyWave Portal Information">click here</a> or ask your agent.</p>
</div>


<?php include("footer.php"); ?>
