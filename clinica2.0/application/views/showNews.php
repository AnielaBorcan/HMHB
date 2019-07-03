
	<section class="service text-center">
		<div class="container">
			<div class="row">
				<?php 
					$href = "login.php";
					$user = (isset($_SESSION["login"])) ? $_SESSION["login"] : null;
					
					if (isset($news[0]))
					{
						$title = $titles[0];						
						$message = $news[0];;				
						$file = $fileNames[0];
					 		
						echo '
									<div class="about-img">
										<img class="img-responsive" src="'  . base_url() . 'img/news/' . $file . '" alt="">
									</div>
									<h3>' . $title . '</h3> <h4 style="color: black">' .  $message . '</h4>									

							';
					}
				?>		
			</div>
		</div>
	</section>

