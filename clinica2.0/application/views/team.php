 	<!-- team section -->
	<section class="team" id="team">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
				<br>
					<h2>Echipa noastra</h2>
					<br><br>
				</div>
				<?php 
					for($i = 0; $i < 18; $i++)// sizeof($doctorNames)
					{
						
						$fileName = $doctorFileNames[$i];
						if (!$fileName)
							$fileName = "doctor.png";
						$name = $doctorNames[$i];
						$spec = $doctorSpecs[$i];
						if ($i % 2 == 1)
							echo '
								<div class="col-md-2 single-member col-sm-4" style = "margin-bottom:1px;">
									<div class="person">
										<img class="img-responsive" src="' . base_url() . 'img/doctors/'. $fileName .'" alt="">
									</div>
									<div class="person-detail">
										<div class="arrow-bottom"></div>
										<h3> ' . $name . '</h3>
										<p> ' . $spec . '</p>
									</div>
								</div>
							';

						else
							echo '
								<div class="col-md-2 single-member col-sm-4" style = "margin-bottom:1px;">
									<div class="person-detail">
										<div class="arrow-top"></div>
										<h3> ' . $name . '</h3>
										<p> ' . $spec . '</p>
									</div>
									<div class="person">
										<img class="img-responsive" src="' . base_url() . 'img/doctors/'. $fileName .'" alt="">
									</div>									
								</div>
							';		
						
					}
				?>
<!-- 
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Iordache Gabriel</h3>
						<p> Medic Primar Cardiolog </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="<?=base_url()?>img/member2.jpg" alt="member-2">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="<?=base_url()?>img/member3.jpg" alt="member-3">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Iordache Gabriel</h3>
						<p>Medic Primar Cardiolog  </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Iordache Gabriel</h3>
						<p>Medic Primar Cardiolog  </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="<?=base_url()?>img/member4.jpg" alt="member-4">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="<?=base_url()?>img/member5.jpg" alt="member-5">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Iordache Gabriel</h3>
						<p>Medic Primar Cardiolog  </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Iordache Gabriel</h3>
						<p>Medic Primar Cardiolog  </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="<?=base_url()?>img/member6.jpg" alt="member-5">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="<?=base_url()?>img/member5.jpg" alt="member-5">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Michael, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Hasina, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="<?=base_url()?>img/member6.jpg" alt="member-5">
					</div>
				</div>
-->
			</div>
		</div>
	</section><!-- end of team section -->	