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
