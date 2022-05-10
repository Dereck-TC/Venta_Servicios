<div class="hlt_header">
	<div class="hlt_logo">
		<a href="index.html"> <img src="../assets/img/logo1.png" alt=""> </a>
	</div>
	<div class="hlt_uprheader">
		<div class="hlt_uprleft">
			<ul>
				<li>
					<p><span><i class="fa fa-calendar" aria-hidden="true"></i></span>
						<?php
						date_default_timezone_set('America/Lima');
						$DateAndTime = date('m-D-Y h:i a', time());
						echo "$DateAndTime.\n";
						?>
					</p>
				</li>
				<li>
					<p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> Lima</p>
				</li>
			</ul>
		</div>
		<div class="hlt_uprright">
			<ul>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="hlt_lwrheader">
		<div class="hlt_uprleft">
			<ul>
				<li>
					<p><span><i class="fa fa-ambulance" aria-hidden="true"></i></span> Asistencias terapeuticas las 24 horas Servicios: +(51) 999 999 999</p>
				</li>
			</ul>
		</div>
		<div class="hlt_manu" id="hs_header">
			<button type="button" class="hs_nav_toggle navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu<i class="fa fa-bars"></i></button>
			<nav>
				<ul class="hs_menu collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<li><a class="active" href="index.php">Home</a>
					</li>
					<li><a>Servicios</a>
						<ul>
							<li><a href="tecnologia.php">Tecnologica</a></li>
							<li><a href="educacional.php">Educacional</a></li>
							<li><a href="terapeutica.php">Terapeutica</a></li>
						</ul>
					</li>
					<li><a href="">Nosotros</a></li>

				</ul>
			</nav>
		</div>
	</div>
</div>