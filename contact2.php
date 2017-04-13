<link rel="stylesheet" type="text/css" href="css/style-contact.css" media="screen" />
<style>
	form{
		opacity: .1;
		pointer-events: none;
	}
</style>
<div id="content-cont">
	<div id="cont1">
		<h1>Contact</h1>
		<h2>I can read 한글 (Hangul),  ひらがな (Hiragana), and カタカナ (Katakana), but English works too.</h2>
		<div id="connect">
			<a href="https://www.instagram.com/johnaltair_/"><div id="instagram">
				<img src="css/images/contact/instagram.svg">
				<h4>Follow me on Instagram</h4>
			</div></a>
			<a href="https://linkedin.com/in/john-altair-gensola/"><div id="linkedin">
				<img src="css/images/contact/linkedin.svg">
				<h4>Connect on LinkedIn</h4>
			</div></a>
		</div>
		<form name="contact" method="post" action="send_form_email.php">
				<div class="input-field">
					<input type="text" name="uname" class="input-text" required placeholder="Your Name" />
				</div>
				<div class="input-field">
					<input type="email" name="email" class="input-text" required placeholder="Your Email"/>
				</div>
				<div class="input-field">
					<textarea rows="4" name="message" class="input-message" cols="50" required placeholder="Your Message"></textarea>
				</div>
				<div class="input-field">
					<input type="submit" name="submit" class="input-button" value="Send Message"/>
				</div>
		</form>		
		<div id="message">
			<h2>Thank you for contacting me. I'll be in touch with you very soon!</h2>
		</div>
	</div>
</div>
<div id="footer">
	<div id="footer-cont">
		<p>&COPY 2017 John Altair Gensola</p>
	</div>
</div>