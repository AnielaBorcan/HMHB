		<section class="slider" class="about text-center" id="home">
			<div class="container">
				<div class="row">
				   <br><br><br><br><br>
				   <h4 style="text-align:left;">
						<br/>
						<br/>
						<br/>

						<b>  
							<font color= #42b3e5 size="5">
								Introduceti medicii:
							</font>
						</b>
						<br/>
						<form action="UploadDoctors/upload" method="post" enctype="multipart/form-data" class = "form">
							<input class="box" size="35" type = "text" placeholder="  Nume medic" name = "numeM">
							<hr>	
							<input class="box" size="35" type = "text" placeholder="  Telefon medic" name = "telefon">															
							<hr>

							<input class="box" size="35" type = "text" placeholder="  Clinica" id="idClinica" name = "idClinica">
							<input type = "hidden" name = "idC" id = "idC"/>							
							<div id="suggesstion-box"></div>
							<hr>

							<input class="box" size="35" type = "text" placeholder="  Specializare" id="idSpecializare" name = "idSpecializare">
							<input type = "hidden" name = "idS" id = "idS"/>							
							<div id="suggesstion-box1"></div>

							<hr>										
							<h3> Selecteaza poza de profil a medicului pentru a fi incarcata:</h3>								
						    
						    <input type="file" name="pProfil">
						    <hr>
						    
						   <input type="submit" value="Upload Data" name="submit">
						   
						</form>							
					</h4>
					<br><br><br><br><br><br><br><br><br><br>	<br><br><br>				
				</div>					
			</div>
		</section>								

<script src="<?=base_url()?>js/jquery-2.1.1.js"></script>
		<script>
		$(document).ready(function(){
				$("#idClinica").keyup(function(){
					$.ajax({
						type: "POST",
						url: "<?php echo base_url() ?>index.php/ajaxCalls/getClinics",
					data:'keyword='+$(this).val(),
					beforeSend: function(){
						// $("#idClinica").css("background","#F00 url(LoaderIcon.gif) no-repeat 165px");
					},
					success: function(data){
						$("#suggesstion-box").show();
						$("#suggesstion-box").html(data);
						$("#suggesstion-box").css("background","#f7e4af");
					}
					});
				});
			});
			//To select country name
			function selectClinics(val, den) {
			$("#idClinica").val(den);
			$("#idC").val(val);
			$("#suggesstion-box").hide();
			}			
			// AJAX call for autocomplete 
			/*$(document).ready(function(){
				$("#idClinica").keyup(function(){
					$.ajax({
						type: "POST",
						url: "<?php echo base_url() ?>index.php/ajaxCalls/getClinics",
					data:'keyword='+$(this).val(),
					beforeSend: function(){
						// $("#idClinica").css("background","#F00 url(LoaderIcon.gif) no-repeat 165px");
					},
					success: function(data){
						$("#suggesstion-box").show();
						$("#suggesstion-box").html(data);
						$("#suggesstion-box").css("background","#f7e4af");
					}
					});
				});
			});
			//To select country name
			function selectClinics(val, den) {
			$("#idClinica").val(den);
			$("#idC").val(val);
			$("#suggesstion-box").hide();
			}*/

			$(document).ready(function(){
				$("#idSpecializare").keyup(function(){
					$.ajax({
						type: "POST",
						url: "<?php echo base_url() ?>index.php/ajaxCalls/getSpecializari",
					data:'keyword='+$(this).val(),
					beforeSend: function(){
						//$("#idClinica").css("background","#F00 url(LoaderIcon.gif) no-repeat 165px");
					},
					success: function(data){
						$("#suggesstion-box1").show();
						$("#suggesstion-box1").html(data);
						$("#suggesstion-box1").css("background","#f7e4af");
					}
					});
				});
			});
			//To select country name
			

			function selectSpecializari(val, den) {
			$("#idSpecializare").val(den);
			$("#idS").val(val);
			$("#suggesstion-box1").hide();
			}
		</script>