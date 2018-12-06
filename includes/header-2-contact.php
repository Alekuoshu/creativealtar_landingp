<?php
// File for header 2 on contact page

require 'includes/mail.php';
?>
<div id="header-2">
	<div class="row">
		<div class="col-sm-6 no-padding">
			<div class="contact-banner">
				<img src="assets/images/img_contact.jpg" alt="Cover contact">
				<div class="blur-contact"></div>
			</div>
		</div>
		<div class="col-sm-6 no-padding">
			<div class="contact-form">
				<h3 class="contact-title">Contáctanos</h3>
				<a href="mailto:hola@creativealtar.com">hola@creativealtar.com</a>
				<?php if (!empty($msg)) {
					echo "<h4 class='msg'>$msg</h4>";
					echo "<h6 class='msg'>$error_message</h6>";
				} ?>
				<form name="contactform" method="post">
					<div class="form-group">
						<label for="name">Nombre completo*</label>
						<div class="row">
							<div class="col-sm-6 left">
								<input type="text" class="form-control" id="name" name="name" placeholder="John" required="required" aria-required="true">
							</div>
							<div class="col-sm-6 right">
								<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Doe" required="required" aria-required="true">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="address">Dirección de correo*</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="tucorreo@correo.com" required="required" aria-required="true">
					</div>
					<div class="form-group">
						<label for="subject">Asunto*</label>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Calidad de videos" required="required" aria-required="true">
					</div>
					<div class="form-group">
						<label for="message">Mensaje*</label>
						<textarea class="form-control" id="message" name="message" rows="4" placeholder="Escribe tu mensaje" required="required" aria-required="true"></textarea>
					</div>
					<button type="submit" class="btn-style-1">Enviar</button>
				</form>
			</div>
		</div>
	</div>
</div>
