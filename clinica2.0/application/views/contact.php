	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>		
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>Contactați-ne</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<!--<h3>contact information</h3>-->
						<h3>Informații de contact</h3>
						<div class="info-detail">
						<!--	<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul> -->
							<ul><li><i class="fa fa-map-marker"></i><span>Adresă:</span> bd. Unirii Nord, jud. Buzau</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Telefon:</span> (+40)0785440008</li></ul>
						<!--	<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul> -->
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> borcan.aniela@gmail.com</li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<!--<h3>
							If you want to change something at our website leave us a message
						</h3>-->
						<h3>
							Dacă doriți să schimbați ceva pe site-ul nostru, lăsați-ne un mesaj
						</h3>
						
						<form class="form" action = "email/send" method = "POST">
							<input class="name" type="text" placeholder="Nume:" name = "name">
							<input class="email" type="email" placeholder="Email:" name = "email">
							<input class="phone" type="text" placeholder="Telefon (nu e obligatoriu): " name = "phone">
							<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Mesaj: "></textarea>
							<input class="submit-btn" type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->