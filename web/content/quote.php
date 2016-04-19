<?php 	$pagePhoto="banner_bonds.jpg";
		$pageTitle="Get a Quote";
		$pagePicture="banner_bonds.jpg";
		$pageMetaKeyword="Get a Rate Quote, Florida insurance quotes, Pompano Beach insurance quotes, Yacht insurance rate quotes, Florida insurance rates";
		$pageMetaDescription="Get a rate quote from  Agency.";
	
 ?>
 <?php include("header.php");?>
 <?PHP include ("sidebar.php");?>

			<? 
				
				$qType=$_GET["type"]; 
				
				if ($qType=="") 
				{
					$qType=$_POST["type"];
    
				}
			?>
            <div id="bodytext" class="column">
            <h2>
            		<?	
						if ($qType=="personal")	echo "Personal Insurance Quote"; 
						if ($qType=="commercial")	echo "Commercial Insurance Quote";
						if ($qType=="financial")	echo "Financial Insurance Quote";
						if ($qType=="")	echo "General Insurance Quote";
					?>
			</h2>

								<?	if ($qType=="") { ?>
                      <p><h3>Try one of our specific quote forms or the general quote form below:</h3></p>
                      
                      <p><h3><a href="quote.php?type=personal">Personal Insurance Quote</a>&emsp; | &emsp;<a href="quote.php?type=commercial">Commercial Insurance Quote</a></h3>
                      <font style="text-indent:130px;"><h3><a href="insurance-quote.php">Life/Health Services Quote</a></h3></font></p>

<form name="contact" method="post" action="form_generalAction.php" class="generalForm">
            <input type="hidden" name="toEmail" value="<?PHP echo $formEmail;?>" /> 
            <input type="hidden" name="requestType" value="request for contact" />
            <input type="hidden" name="mailSubject" value="Website Quote Request" />
           
												
												<table cellpadding=0 cellspacing=5 style="color:#444" width="375" class="quoteform">
													<tr>
														<td align=right>Name:&nbsp;</td>
														<td><input name="Name" type="text" id="Name" value="" size="25" /></td>
													</tr>
													<tr>
														<td align=right>Email:&nbsp;</td>
														<td><input name="Email" type="text" id="Email" value="" size="25" /></td>
													</tr>
                                                    <tr>
														<td align=right>Address:&nbsp;</td>
														<td><input name="Address" type="text" id="Address" value="" size="25" /></td>
													</tr>
            <tr>
              <td align=right>City:</td>
              <td><input name="City" type="text" id="City" value="" size="25" /></td></tr>
            
            
                                                    <tr>
														<td align=right>State:&nbsp;</td>
														<td><select name="State" id="State">
				&nbsp;
                
				<option selected="selected">Choose State</option>
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
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
				&nbsp;
		    </select></td>
													</tr>
		
                                                    <tr>
														<td align=right>Zip:&nbsp;</td>
														<td><input name="Zip" type="text" id="Zip" value="" size="25" /></td>
													</tr>
													<tr>	
														<td align=right>Phone:&nbsp;</td>
													  <td><input name="Phone" type="text" id="Phone" value="" size="25" /></td>
													</tr>
													<tr>	
														<td align=right>Mobile:&nbsp;</td>
														<td><input name="Mobile" type="text" id="Mobile" value="" size="25" /></td>
													</tr>
												</table>
                                                
												<table width="375px" cellpadding=0 cellspacing=0 style="color:#444">
										      <tr><td  height=15></td></tr>
													<tr>
														<td colspan=2>Insurance Requested:</td>
													</tr>
													<tr>
														<td><input name="Personal" type="checkbox" class="cb" id="Business" value="Personal Insurance" />Personal Insurance</td>
														<td align="left"><input name="Commercial" type="checkbox" class="cb" id="Bonds" value="Commercial Insurance" />Commercial Insurance</td>
													</tr>
										    <tr>
														<td colspan="2" align="left"><input name="Life/Health" type="checkbox" class="cb" id="Life" value="Life/Health Services" />Life/Health Services</td>
                                                    </tr>
												
                                                 
													<tr><td height=10></td></tr>
													<tr>
														<td colspan=2 align="center">Comments:</td>
													</tr>
													<tr>
														<td colspan=2 align="center"><textarea name="Comments" cols="50" rows="5" id="Comments" class="quoteComment"></textarea></td>
													</tr>
													<tr><td height=20></td></tr>
												</table>
							                    <INPUT TYPE="submit" VALUE="Submit Info" class="button">
							                   
                      </form>
                      
								<? } ?>
									
									
								<?	
								if ($qType=="personal") include("personal-quote.php");
								if ($qType=="commercial") include("commercial-quote.php");
								if ($qType=="financial") include("financial-quote.php");
								?>


</div>
<?php include("footer.php"); ?>