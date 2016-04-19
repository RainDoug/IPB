<form name="contact" method="post" action="form_generalAction.php" class="generalForm">
            <input type="hidden" name="toEmail" value="<?PHP echo $formEmail;?>" /> 
            <input type="hidden" name="requestType" value="request for contact" />
            <input type="hidden" name="mailSubject" value="Personal Insurance Quote Request" />
           
												
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
                                                
												<table width="375" cellpadding=0 cellspacing=0 style="color:#444">
										      <tr><td  height=15></td></tr>
													<tr>
														<td colspan=2>Personal Insurance Requested:</td>
													</tr>
													<tr>
														<td><input name="Auto" type="checkbox" class="cb" value="Auto Insurance" />Auto Insurance</td>
													</tr>
													<tr>
														<td align="left"><input name="BuildersRisk" type="checkbox" class="cb" value="Builder's Risk &amp; Renovations Policis" />Builder's Risk &amp; Renovations Policis</td>
													</tr>
										    <tr>
														<td><input name="DwellingFire" type="checkbox" class="cb" value="Dwelling Fire Policies" />Dwelling Fire Policies</td>
													</tr>
													<tr>
                                                        <td><input name="Liability" type="checkbox" class="cb" value="Excess Personal Liability"  />Excess Personal Liability</td>
                                                    </tr>
                                                    <tr>
														<td><input name="Flood" type="checkbox" class="cb" value="Flood &amp; Excess Flood" />Flood &amp; Excess Flood</td>
													</tr>
													<tr>
                                                        <td><input name="Homeowners" type="checkbox" class="cb" value="Homeowners Insurance"  />Homeowners Insurance</td>
													</tr>
                                                    <tr>
														<td><input name="Motorcycle" type="checkbox" class="cb" value="Flood &amp; Excess Flood" />Motorcycle Insurance</td>
													</tr>
													<tr>
                                                        <td><input name="Articles" type="checkbox" class="cb" value="Personal Articles Floaters (Fine Arts & Jewelry)"  />Personal Articles Floaters (Fine Arts & Jewelry)</td>
                                                    </tr>
                                                    <tr>
														<td><input name="Umbrella" type="checkbox" class="cb" value="Personal Umbrella Policies" />Personal Umbrella Policies</td>
													</tr>
													<tr>
                                                        <td><input name="Watercraft" type="checkbox" class="cb" value="Watercraft Insurance"  />Watercraft Insurance</td>
                                                    </tr>
                                                    <tr>
                                                    	<td><input name="Windstorm" type="checkbox" class="cb" value="Windstorm Insurance" />Windstorm Insurance</td>
                                                    </tr>
                                                 
													<tr><td height=10></td></tr>
													<tr>
														<td colspan=2 align="center">Comments:</td>
													</tr>
													<tr>
														<td colspan=2 align="center"><textarea name="Comments" cols="250" rows="5" id="Comments" class="quoteComment"></textarea></td>
													</tr>
													<tr><td height=20></td></tr>
												</table>
							                    <INPUT TYPE="submit" VALUE="Submit Info" class="button">
							                   
                      </form>
