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

<h1>Request a Quote</h1> 
 
<p>Please fill out all fields on this form as completely as possible. A customer
representative will contact you once your submission has been processed.
Submission of this form does not automatically change the policy. The coverage will 
not change until this request is received and confirmed by <?php echo $businessName; ?>.</p> 

	<form action="form_generalAction.php" method="post" id="certRequest" class="generalForm">
	<input type="hidden" name="toEmail" value="<?PHP echo $servicesEmail;?>" /> 
	<input type="hidden" name="requestType" value="request for a certificate" />
	<input type="hidden" name="mailSubject" value="Website Certificate Request" />

   <fieldset id="general"><legend>General Information</legend>
   <ul>
   <li>Name of Cert. Holder* <input type="text" name="Full_Name" value=""  maxlength="100"></li>
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
				<option value="FL">Florida</option>
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
				<option value="TX" selected="selected">Texas</option>
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
	<input type="hidden" name="-----Certificate Requested For----" value="spacer" /> 
	
	<fieldset id="commercial"><legend>Request Information</legend>
	<h3>Holder is listed as: (select all that apply):</h3>
	<ul>
		
		<li><input type="checkbox" name="Holder_Listed_As" value="Additional Insured" />Additional Insured</li>
		<li><input type="checkbox" name="Holder_Listed_As" value="Loss Payee" />Loss Payee</li>
		
	</ul>
	<h3>Where should we send the Certificate? *</h3>
	<ul>
		
		<li><input type="checkbox" name="Send_Cert_To" value="Email" />Email</li>
		<li><input type="checkbox" name="Send_Cert_To" value="Fax" />Fax</li>
		<li><input type="checkbox" name="Send_Cert_To" value="Fax" />Mail</li>
	</ul>
	<h3>How should we send the Certificate? *</h3>
	<ul>
		
		<li><input type="checkbox" name="Send_Cert_To" value="Directly to the Holder" />Directly to the Holder</li>
		<li><input type="checkbox" name="Send_Cert_To" value="Directly to You" />Directly to You</li>
	</ul>
	</fieldset>
	<h3>Comments:</h3>
	<p><textarea name="Comments" value="" class="pageFormTextBox"></textarea></p>
	<p><input type="submit" value="submit" alt="submit" class="submitButton"/></p>	
	</form>

</div>

<?php include("footer.php"); ?>



