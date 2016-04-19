<?php include("data.php"); ?>
<?php 	//Set Page Specific Vars Here 
        $pageTitle="Request A Quote";
        $pageMetaKeyword="Personal Quote, Commercial Quote, Life Quote, Health Insurance, Request Quote";
        $pageMetaDescription="";
        $pagePhoto="banner_bonds.jpg";
        $pagePhotoAlt="Independent Insurance Agent for $state";
		//$actionArea="<ul><li><a href='#'>john</a></li><li><a href='#'>bob dobbs</a></li></ul>";
?>
<?php include("header.php"); ?>
<?PHP include ("sidebar.php");?>

<div id="bodytext" class="column">

<h1>Request a Quote</h1> 
 
<p>Please fill out all fields on this form as completely as possible. A customer
representative will contact you once your submission has been processed.</p> 

<form name="contact" method="post" action="form_generalAction.php" class="generalForm">
<input type="hidden" name="toEmail" value="<?PHP echo $formEmail;?>" /> 
            <input type="hidden" name="requestType" value="request for contact" />
            <input type="hidden" name="mailSubject" value="Website Quote Request" />

   <fieldset id="general"><legend>General Information</legend>
   <ul>
   <li>Name * <input type="text" name="Full_Name" value=""  maxlength="100"></li>
   <li>Address 1 * <input type="text" name="address1" value=""  maxlength="100"></li>
   <li>Address 2 <input type="text" name="address2" value=""  maxlength="100"></li>
   <li>City * <input type="text" name="city" value=""  maxlength="100"></li>
   <li>State * <select name="Vehicle_State4">
				&nbsp;
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">Dist of Columbia</option>
				<option value="FL" selected="selected">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
				&nbsp;
			  </select></li>
   <li>Zip * <input type="text" name="zipcode" value=""  maxlength="100"></li>
   <li>Daytime Phone <input type="text" name="daytime_phone" value=""  maxlength="100"></li>
   <li>Evening Phone <input type="text" name="evening_phone" value=""  maxlength="100"></li>
   <li>Cell Phone <input type="text" name="cellphone" value=""  maxlength="100"></li>
   <li>Email * <input type="text" name="email" value=""  maxlength="40"></li>
   </ul>
   * Indicates required information
		  
	</fieldset>
	
	<h1>Insurance Specifics</h1>
	<input type="hidden" name="-----Quote Requested For----" value="spacer" /> 
	<p>Select whichever of the following types of insurance you are interested in:</p>
	<fieldset id="commercial"><legend>Commercial Insurance</legend>
	<ul>
		<li><input type="checkbox" name="Commercial_Type" value="Commercial Property" />Commercial Property</li>
		<li><input type="checkbox" name="Commercial_Type" value="General Liability" />General Liability</li>
        <li><input type="checkbox" name="Commercial_Type" value="Small Bus. Package" />Small Bus. Package</li>

		<li><input type="checkbox" name="Commercial_Type" value="Workers Compensation" />Workers Compensation</li>
		<li><input type="checkbox" name="Commercial_Type" value="Bonds" />Bonds</li>
		<li><input type="checkbox" name="Commercial_Type" value="Inland Marine" />Inland Marine</li>
        <li><input type="checkbox" name="Commercial_Type" value="Commercial Auto" />Commercial Auto</li>
        <li><input type="checkbox" name="Commercial_Type" value="Commercial Umbrella" />Commercial Umbrella</li>
	</ul>
	</fieldset>
	<fieldset id="personal"><legend>Personal Insurance</legend>
	<ul>
		<li><input type="checkbox" name="Personal_Type" value="Auto" />Auto</li>
        <li><input type="checkbox" name="Personal_Type" value="Motorcycle" />Motorcycle</li>
        <li><input type="checkbox" name="Personal_Type" value="Non-Standard Auto" />Non-Standard Auto</li>
		<li><input type="checkbox" name="Personal_Type" value="Watercraft" />Watercraft</li>
		<li><input type="checkbox" name="Personal_Type" value="RV" />Recreational Vehicle</li>
		<li><input type="checkbox" name="Personal_Type" value="Homeowners" />Homeowners</li>
        <li><input type="checkbox" name="Personal_Type" value="Renters" />Renters</li>
        <li><input type="checkbox" name="Personal_Type" value="Mobile Home" />Mobile Home</li>
        <li><input type="checkbox" name="Personal_Type" value="Personal Umbrella" />Personal Umbrella</li>
		<li><input type="checkbox" name="Personal_Type" value="Tenant Dwelling" />Tenant Dwelling</li>
		<li><input type="checkbox" name="Personal_Type" value="Rental Dwelling" />Rental Dwelling</li>
		<li><input type="checkbox" name="Personal_Type" value="Flood" />Flood</li>
		<li><input type="checkbox" name="Personal_Type" value="Life" />Life</li>
		<li><input type="checkbox" name="Personal_Type" value="Health" />Health</li>
	</ul>
	</fieldset>
	<p><input type="submit" value="submit" alt="submit" class="submitButton"/></p>	
	</form>

</div>

<?php include("footer.php"); ?>
