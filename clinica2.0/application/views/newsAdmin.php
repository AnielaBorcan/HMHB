		<section class="slider" class="about text-center" id="home">
			<div class="container">			
				<div class="row">
							   <br><br><br><br><br><br><br><br><br><br>								   
				
							<h4 style="text-align:left;">
								<br/>
								<br/>
								<br/>

								<b>
									<font color= #42b3e5 size="5">
										Introduceti stirea:
									</font>
								</b>
								<br/>
								<form action="UploadNews/upload" method="post" enctype="multipart/form-data" class = "form">
									<div class="col-md-4 col-sm-4">
										<input  class="box" size="35" type="text" placeholder="    Titlu stire" name = "title">
										<textarea  cols = "30" rows = "10" class="box" name = "news"></textarea>
									</div>
									<div class="col-md-4 col-sm-4">										
										    Select image to upload:
										    <input type="file" name="fileToUpload" >
									</div>
									<input type="submit" value="Upload Data" name="submit">
								</form>							
							</h4>							
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
				</div>

				<?php
					if (sizeof($news))
					{
						echo '<div class="row">';				
							for($i = 0; $i < sizeof($news); $i++)
							{
								$title = $titles[$i];
								$message = $news[$i];
								$id = $ids[$i];

								$message = explode(" ", $message);
								$file = $fileNames[$i];
							 	
								echo '
									<div class="col-md-4 col-sm-6">
										<a href = "showNews?id=' . $id . '">
											<div class="single-about-detail clearfix">
												<div class="about-img">
													<img class="img-responsive" src="' . base_url() . 'img/news/' . $file . '" alt="">
												</div>
												<div class="about-details">
													<div class="pentagon-text">
													<center>
														<h1>'. $title[0] . '</h1>
													</center>
													</div>
													<center>
													<h3>' . $title . '</h3>													
													</center>
													<font size="4" color="white ">
														<center>' ;
															mess($message);
														'</center>
													</font>';																				
												echo '</div>
											</div>
										</a>	
									</div>						
								';
							}
						echo '</div>';
					}
				?>					
			</div>
		</section><!-- end of slider section -->
		<?php
	function mess(&$message)
	{
			$min = min(sizeof($message), 30);
			for ($i=0; $i < $min; $i++)
			{
				echo  $message[$i] . ' ';
			} 					 
			
		echo "... ";
		echo PHP_EOL;
	}
?>
