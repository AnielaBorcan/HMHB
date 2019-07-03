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
								Introduceti specializarile:
							</font>
						</b>
						<br/>
						<form action="UploadSpec/upload" method="post" enctype="multipart/form-data" class = "form">
							<input class="box" size="35" type = "text" placeholder="  Specializare" name = "specN">
							<hr>	
							
							<input class="box" size="35" type = "text" placeholder="  Domeniu" id="idDomeniu" name = "idDomeniu">
							<input type = "hidden" name = "idD" id = "idD"/>							
							<div id="suggesstion-box"></div>
							<hr>
				
						   <input type="submit" value="Upload Data" name="submit">
						   
						</form>							
					</h4>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
			function selectDomain(val, den) {
			$("#idDomeniu").val(den);
			$("#idD").val(val);
			$("#suggesstion-box").hide();
			}
		</script>
