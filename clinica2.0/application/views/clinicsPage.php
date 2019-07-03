	<!-- service section starts here -->

	<section class="service text-center clinics" id="clinics">
		<div class="container">
			<div class="row">
				<!--<h2>our services</h2> -->
				<br><br><br>
				<?php 
					$href = "login.php";
					$user = (isset($_SESSION["login"])) ? $_SESSION["login"] : null;
				
				echo '<br> <br> <br> <table width="1170px">
				 <font style = "color: black"> 
					<tr>
						<td>
						<p>
							<font size="5">
								<b>
									Clinica medicala:
								</b>
							</font>
						</p>						 
							<h2 style="text-align: left;">' .  (isset($clinicNames[0]) ? $clinicNames[0] : "") . '</h2>
						</td>
						<td class="left">
							<img class="img-responsive" src="'  . base_url() . 'img/clinics/' . (isset($clinicFileNames[0]) ? $clinicFileNames[0] :"") . '" alt="">
						</td>
					</tr>
					<tr>
						<td>
							<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<p>
							<font size="5"> 
								<b> Adresa: </b>' .  (isset($clinicAdress[0]) ? $clinicAdress[0] : "") . '
							</font>
							</p> 
						</td>
					<tr>
						<td>
						<font size="5">
							<p> <b> Nr. telefon:  </b>' . (isset($clinicTel[0]) ? $clinicTel[0] : "") . '</p>
						</font>
						</td>
					</tr>'
					
					 . ((isset($clinicMail[0]) and $clinicMail[0] != null) ? '<tr>
							<td>
							<font size="5">
								<p> <b>Email: </b> ' . $clinicMail[0] . '</p>
							</font>
							</td>
						</tr>' : '
						<tr>
							<td>
							<font size="5">
								<p> <b> Email: </b>  ---  </p>
							</font>
							</td>
						</tr>') .' 
					</font>
					<tr>
						<td>
							<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<br><br>
						</td>
					</tr>			 
				</table>

					';	
				if (isset($medicPoza[0]))	
				{
					echo '<table>
							<tr>';

					for($i = 0; $i < sizeof($clinicIds); $i++)
					{
						if (isset($clinicIds[$i]))
						{
							$img = '\'' . base_url() . 'img/doctors/' . $medicPoza[$i] . '\'';			
							echo	'<td>
									<div class="docCard" style = "background-image: url(' . $img . '); background-position: center; " >
									  <div class="overlay">
									    <div class = "items"></div>
									    <div class = "items headDocCard">
									      <p>' .  $medicN[$i] . '</p>
									    </div>
										<br>
										<div class = "items headDocCard">								   
									    	<hr align="left">
										    <div>
										    	<p> <font color="white">' . $specializare[$i] . '</font></p>
										    	<p> <font color="white">' . $medicTel[$i] . '</font></p>
										    </div>
									     </div>
									</div> 
									</div>
								</td>';
							if($i % 3 == 2)
								echo '</tr>
										<tr>';				
						}
					}
					echo '</tr>
						</table>';	
				}
			?>

		        <!--style="background-image: url("human.png")"

<td>' . ($medicPoza[$i] != NULL ? 
											'<div class="about-img">
												<img class="img-responsive" style=" width: 200px; height: 200px; background-image: url("'  . base_url() . 'img/' . $medicPoza[$i] . '")"  alt="">
											</div>' : '<font size="5"> picture no available </font>') . '
											
								</td>
		        	The div element for the map -->
		        <div id="clinicMap" style = " height: 500px;  width: 100%;"></div>

			</div>
		</div>

		
		


	</section>

