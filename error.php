[header]
<div class="container">
	<div class="alert alert-danger" role="alert">
		<p>There was an error submitting the form. Please try again or email us directly at the address provided below.
		</p>
	</div>
	<section id="contact" class="row">
		<div class="col-xs-12">
			<hr>
			<h1>Contact Us</h1>
			<hr>
			<div class="col-sm-5 col-md-push-2 contact-info">
				<p>Phone: <a href="tel:+155555555555">(555) 555-5555</a><br>
					Email: <a href="mailto:who@domain.com">who@domain.com</a><br>
				</p>
			</div>
			<div class="col-sm-7">
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
			</div>
		</div>
	</section>
</div>
[footer]
