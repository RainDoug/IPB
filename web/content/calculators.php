<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
        //$generalTitle="";
        //$formEmail="";
        $pagePhoto="headerIntro_1.jpg";
        $pagePhotoAlt="Independent Insurance Agent for $state";
		//$actionArea="<ul><li><a href='#'>john</a></li><li><a href='#'>bob dobbs</a></li></ul>";
?>

<?php include("header.php"); ?>
<?PHP include ("sidebar.php");?>

<div id="bodytext" class="column">

	<? 
        $cType= (isset($_GET["type"])) ?  $_GET["type"] : null ;
    ?>
	<h1>Financial Calculators</h1>
    <p>The calculators featured on this site are designed to assist you in identifying issues that need to be taken into consideration when determining investment options suitable for you.  </p>
    <p>However, the calculators should not be seen as a substitute for professional advice from a financial planner who takes into account your personal financial circumstances and needs. </p>
    <p>We strongly recommend that you discuss your requirements with a qualified financial adviser, who can take into account your personal financial position and can help you choose a strategy that suits your own personal circumstances.</p>
	
    <ul>
    	<li><a href="calculators.php?type=AUTOLOAN">Auto Loan Calculator</a></li>
        <li><a href="calculators.php?type=AUTOLEASEBUY">Auto Lease vs. Buy Calculator</a></li>
        <li><a href="calculators.php?type=HOMELOAN">Home Loan Calculator</a></li>
        <li><a href="calculators.php?type=NEEDSCALC">Life Insurance Needs Calculator</a></li>
        <li><a href="calculators.php?type=MORTGAGE">Mortgage Calculator</a></li>
    </ul>
	
    <?PHP if ($cType != "") {?>
	<IFRAME marginWidth="0" marginHeight="0" frameBorder="0" width="100%" scrolling="auto" height="700" 
    src="http://cluster.informinshosting.com/calcs/index.aspx?nm=<?PHP echo $cType?>"></IFRAME>
    <?PHP } ?>


</div>


<?php include("footer.php"); ?>
