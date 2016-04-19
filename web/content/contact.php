<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
        //$generalTitle="";
        //$formEmail="";
        $pagePhoto="banner_contacts.jpg";
        $pagePhotoAlt="Independent Insurance Agent for $state";
		//$actionArea="<ul><li><a href='#'>john</a></li><li><a href='#'>bob dobbs</a></li></ul>";
?>

<?php include("header.php"); ?>
<?PHP include ("sidebar.php");?>

<div id="bodytext" class="column">

	<h1>Contact Us</h1>

	<?if (count($location)>1) { ?>
	<p>We have locations in 
	<?
	$locCount=1;
	foreach ($location as $key) {
		echo '<a href="#' . $key["city"]. '">' . $key["city"] . '</a>';
		if ($locCount == (count($location)-1) ) {echo ', and ';} elseif ($locCount!==count($location)) {echo ', ';}
		++$locCount;
	} ?>.</p>
	<? } ?>
	
<?if ($location) { foreach ($location as $key) { ?>
	<? echo '<a id="'. $key["city"]. '"></a>'; ?>
	<div class="contactLocation">
		<h2><?PHP echo $key['city'];?> Location</h2>
		<table class="contactTable">
			<?PHP if ($key['phone']) { ?>
			<tr>
				<td><b>phone</b></td>
				<td></td>
				<td><?PHP echo $key['phone']?></td>
			</tr>
			<?PHP } ?>
			
			<?PHP if ($key['phone2']) { ?>
			<tr>
				<td><b>or call</b></td>
				<td></td>
				<td><?PHP echo $key['phone2']?></td>
			</tr>
			<?PHP } ?>
					
			<?PHP if ($key['fax']) { ?>
			<tr>
				<td><b>fax</b></td>
				<td></td>
				<td><?PHP echo $key['fax']?></td>
			</tr>
			<?PHP } ?>
			
			<?PHP if ($key['email']) { ?>
			<tr>
				<td><b>email</b></td>
				<td></td>
				<td>
				<?php foreach ($key['email'] as $emailName => $emailAddress) {?>
				<a href="mailto:<?PHP echo $emailAddress;?>"><?PHP if($emailName=="name") {echo $emailAddress;} else {echo $emailName . " : " . $emailAddress;} ?></a><br />
				<? } ?>
				</td>
			</tr>		   
		   <?PHP } ?>
			
			<?PHP if ($key['address']) { ?>
			<tr>
				<td><b>address</b></td>
				<td></td>
				<td><?PHP echo $key['address'];?><br/>
					<?PHP echo $key['city'];?>, <?PHP echo $key['state'];?> <?PHP echo $key['zip'];?>
				</td>
			</tr>
			
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<?PHP } ?>
			
			<?PHP if ($key['mailAddr']) { ?>
			<tr>
				<td><b>mailing address</b></td>
				<td></td>
				<td><?PHP echo $key['mailAddr'];?><br />
				<?PHP echo $key['mailCity'];?>, <?PHP echo $key['mailState'];?> <?PHP echo $key['mailZip']?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<?PHP } ?>
			
			<?PHP if ($key['directions']) { ?>
			<tr>
				<td valign=top><b>Directions</b></td>
				<td></td>
				<td><?PHP echo $key['directions'];?>
				</td>
			</tr>
			<?PHP } ?>
		</table>
		<div class="googleMap">
			<?PHP echo $key['googlePlace'];?>
		</div>
        <a href="contact.php">Back to Top</a>
	</div><!--contactLocation-->
	<?php }} ?>
</div>


<?php include("footer.php"); ?>
