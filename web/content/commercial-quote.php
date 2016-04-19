<form name="contact" method="post" action="form_generalAction.php" class="generalForm">
            <input type="hidden" name="toEmail" value="<?PHP echo $formEmail;?>" /> 
            <input type="hidden" name="requestType" value="request for contact" />
            <input type="hidden" name="mailSubject" value="Commercial Insurance Quote Request" />
           
												
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
														<td colspan=2>Commercial Insurance Requested:</td>
													</tr>
													<tr>
														<td><input name="Property" type="checkbox" class="cb" value="Commercial Property" />Commercial Property</td>
													</tr>
													<tr>
														<td><input name="Genliability" type="checkbox" class="cb" value="General Liability" />General Liability</td>
													</tr>
										    <tr>
														<td><input name="Condominium" type="checkbox" class="cb" value="Condominium Association Policies" />Condominium Association Policies</td>
													</tr>
													<tr>
                                                        <td><input name="DirectorOfficer" type="checkbox" class="cb" value="Director &amp; Officers"  />Director &amp; Officers</td>
                                                    </tr>
                                                    <tr>
														<td><input name="BusinessOwners" type="checkbox" class="cb" value="Business Owners Policy" />Business Owners Policy</td>
													</tr>
													<tr>
                                                        <td><input name="SmBusiness" type="checkbox" class="cb" value="Small Business Package"  />Small Business Package</td>
													</tr>
                                                    <tr>
														<td><input name="WorkersComp" type="checkbox" class="cb" value="Workers Compensation" />Workers Compensation</td>
													</tr>
													<tr>
                                                        <td><input name="Bonds" type="checkbox" class="cb" value="Surety, Fidelity &amp; Crime Bonds"  />Surety, Fidelity &amp; Crime Bonds</td>
                                                    </tr>
                                                    <tr>
														<td><input name="Auto" type="checkbox" class="cb" value="Commercial Auto" />Commercial Auto</td>
													</tr>
													<tr>
                                                        <td><input name="Umbrella" type="checkbox" class="cb" value="Umbrella"  />Umbrella</td>
                                                    </tr>
													<tr>
                                                        <td><input name="InlandMarine" type="checkbox" class="cb" value="Inland Marine (Contractors Equipment)"  />Inland Marine (Contractors Equipment)</td>
                                                    </tr>
													<tr>
                                                        <td><input name="ProLiability" type="checkbox" class="cb" value="Professional Liability"  />Professional Liability</td>
                                                    </tr>
													<tr>
                                                        <td><input name="EmployLiability" type="checkbox" class="cb" value="Employment Practice Liability"  />Employment Practice Liability</td>
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
