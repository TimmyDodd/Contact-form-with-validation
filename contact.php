<div id="contact-area">
	<form method="post" action="contactengine.php" name="contact-form" id="contact-form" onsubmit="return validateForm()">
		<label for="Name">Name:</label>
		<input type="text" name="Name" id="Name"/>
		<label for="City">Phone:</label>
		<input type="text" name="Tel" id="Tel"/>
		<label for="Email">Email:</label>
		<input type="text" name="Email" id="Email"/>
		<label for="Message">Message:</label><br>
		<textarea name="Message" rows="20" cols="20" id="Message"></textarea>
		<input type="submit" name="submit" value="Submit" class="btn submit-button"/>
		<div style="clear: both;"></div>
	</form>
</div>
<?php <!-- Alternate HTML that uses Bootstrap classes and placeholder text instead of labels -->
<!-- 
<div id="contact-area">
	<form name="contact-form" id="contact-form" method="post" action="contactengine.php">
		<input type="text" name="Name" id="Name" placeholder="Your Name *" class="form-control">
		<input type="text" name="Tel" id="Tel" class="form-control" placeholder="Your Phone Number *">
		<input type="text" name="Email" id="Email" class="form-control" placeholder="Your Email *">
		<textarea name="Message" rows="10" cols="20" id="Message" class="form-control" placeholder="Your Message *" ></textarea>
		<button type="submit" name="submit" value="Submit" class="btn btn-lg">Send</button>
		<div style="clear: both;"></div>
	</form>
</div>
 --> 
 ?>
