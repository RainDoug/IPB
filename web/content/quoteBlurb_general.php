<div class="ContactInfo">
	
    <a href="<?PHP echo $fbAddress; ?>" target="_blank"><img src="images/FB_Blurb.png" border="0" alt="<?PHP echo $altTag3?>" class="pagePic" /></a><br />
	<!--<img src="images/se_habla_espanol.png" border="0" alt="<?PHP echo $altTag5?>" class="pagePic" /> <br />-->
    <!--<img src="images/associations.jpg" border="0" alt="<?PHP echo $altTag4?>" class="pagePic" />-->
    
    <div class="getQuoteContainer">
            <h2>Contact Us </h2>
            <form name="contact" method="post" action="form_generalAction.php" class="generalForm">
            <input type="hidden" name="toEmail" value="<?PHP echo $formEmail;?>" /> 
            <input type="hidden" name="requestType" value="request for contact" />
            <input type="hidden" name="mailSubject" value="Website Contact Request" />
        
            <p><input type="text"  name="Name" onFocus="clearText(this)" onBlur="clearText(this)" value="Your Name" width="100px"></p>
            <p><input type="text"  name="Phone" onFocus="clearText(this)" onBlur="clearText(this)" value="Your Phone Number" width="100px"></p>
            <p><input type="text"  name="Email" onFocus="clearText(this)" onBlur="clearText(this)" value="Your Email" width="100px"></p>
            <p><textarea name="Comments" value="Comments" onFocus="clearText(this)" onBlur="clearText(this)" width="100px">Comments</textarea></p>
            <p><input type="image" value="submit" alt="submit" src="images/go.png"></p>
            </form>
    </div>
    
	<img src="images/affiliatedLink.png" border="0" alt="<?PHP echo $altTag3?>" class="pagePic" />
    
</div>