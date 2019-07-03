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
								Introduceti clinica:
							</font>
						</b>
						<br/>
						<form action="UploadClinics/upload" method="post" enctype="multipart/form-data" class = "form">

							<input class="box" size="35" type = "text" placeholder="  Nume clinica" name = "numeC">									
							<hr>	
							<input class="box" size="35" type = "text" placeholder="  Adresa clinica" name = "adresaC">		
							<hr>
							<input class="box" size="35" type = "text" placeholder="  Telefon clinica" name = "telefon">											
							<hr>
							<input class="box" size="35" type = "text" placeholder="  Email clinica" name = "email">
							<hr>
							<h3> Selecteaza logo-ul clinicii pentru a fi incarcata:</h3>								
						    
						    <input type="file" name="logo">
						    <hr>
						    <input class="box" size="35" type = "text" placeholder="  Latitudinea clinicii" name = "latC">
						    <hr>
						    <input class="box" size="35" type = "text" placeholder="  Longitudinea clinicii" name = "longC">
						    <hr>
						   
						    	<input class="box" size="35" type = "text" placeholder="  Domeniu" id="idDomeniu" name = "idDomeniu">
								<input type = "hidden" name = "idD" id = "idD"/>							
								<div id="suggesstion-box"></div>
						
							<hr>

							
								<input class="box" size="35" type = "text" placeholder="  Specializare" id="idSpecializare" name = "idSpecializare">
								<input type = "hidden" name = "idS" id = "idS"/>							
								<div id="suggesstion-box1"></div>
							
							<hr>

						   <input  size="50" type="submit" value="Upload Data" name="submit">

						</form>							
					</h4>				
				</div>					
			</div>
		</section>
	<script src="<?=base_url()?>js/jquery-2.1.1.js"></script>
		<script>			
			// AJAX call for autocomplete 
			$(document).ready(function(){
				$("#idDomeniu").keyup(function(){
					$.ajax({
						type: "POST",
						url: "<?php echo base_url() ?>index.php/ajaxCalls/getDomains",
					data:'keyword='+$(this).val(),
					beforeSend: function(){
						//$("#idClinica").css("background","#F00 url('../img/LoaderIcon.gif') no-repeat 165px");
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
			function selectDomain(val, den) {
			$("#idDomeniu").val(den);
			$("#idD").val(val);
			$("#suggesstion-box").hide();
			}

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