	<?php
		$currentMenu = (isset($_SESSION["currentMenu"])) ? $_SESSION["currentMenu"] : null;
	?>

	<header class="top-header">		
		<div class="container">
			<div class="row">
				<div class="col-xs-5 header-logo">
					<br>
					<a href="index"><img src="<?=base_url()?>img/logo.png" alt="" class="img-responsive logo"></a>
				</div>

				<div class="col-md-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <?php
					      
						      echo '
						      <ul class="nav navbar-nav navbar-right">
						        <li><a class="menu' . (($currentMenu == "index") ? ' active"' :'"')  . ' href="index">Home</a></li>
						        <li><a class="menu' . (($currentMenu == "about") ? ' active"' :'"')  . ' href="about">despre noi</a></li>
						        <li><a class="menu' . (($currentMenu == "services") ? ' active"' :'"')  . ' href="services">servicii</a></li>
						        <li><a class="menu' . (($currentMenu == "team") ? ' active"' :'"')  . ' href="team">echipa</a></li>
						        <li><a class="menu' . (($currentMenu == "contact") ? ' active"' :'"')  . ' href="contact">contact</a></li>
						      </ul>
						      ';
					      ?>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->
