	<!-- service section starts here -->

	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>Serviciile noastre</h2>
				<br> <br> <br> <br>

				<?php 

					$href = "login.php";
					$user = (isset($_SESSION["login"])) ? $_SESSION["login"] : null;
					
					for($i = 0; $i < sizeof($domainNames); $i++)
					{
						$className = "";						
						$fileName = $domainFileNames[$i];
						$arr = explode(".", $fileName);
						if ($arr && sizeof($arr))
						{
							$className = $arr[0];
						}
						if ($user)
						{
							$href = "clinics?domainId=" . $domainIds[$i];
						}

						echo '
							<div class="col-md-3 col-sm-6">
								<div class="single-service">
									<a href = "' . $href . '">
										<div class="single-service-img">
											<div class="service-img">
												<img class="' . $className . ' img-responsive" src="' . base_url() . 'img/' . $fileName . '" alt="">
											</div>
										</div>
										<h3>' . $domainNames[$i] . '</h3>
									</a>	
								</div>
							</div>						
						';
					}
				?>

			</div>
		</div>
	</section>