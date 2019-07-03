
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				
				<h2>Clinicile noastre</h2>
				<br><br><br>
				
				<?php 
					$href = "login.php";
					$user = (isset($_SESSION["login"])) ? $_SESSION["login"] : null;

					for($i = 0; $i < sizeof($clinicNames); $i++)
					{
						$className = "";						
						$fileName = $clinicFileNames[$i];
						$arr = explode(".", $fileName);
						if ($arr && sizeof($arr))
						{
							$className = $arr[0];
						}
						if ($user)
						{
							$href = "clinicsPage?idClinica=" . $clinicIds[$i];
						}

						echo '
							<div class="col-md-3 col-sm-6">
								<div class="single-service">
									<a href = "' . $href . '">
										<div class="single-service-img">
											<div class="service-img">
												<img class="' . $className . ' img-responsive" src="' . base_url() . 'img/clinics/' . $fileName . '" alt="">
											</div>
										</div>
										<h3>' . $clinicNames[$i] . '</h3>
									</a>	
								</div>
							</div>						
						';
					}
				?>		
			</div>
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</section>