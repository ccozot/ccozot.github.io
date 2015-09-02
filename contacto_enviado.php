<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>STP Argentina - Soluciones Tecnológicas Personalizadas</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<!--[if lte IE 9]>
   	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<?php
			 			   $nombre=$_POST["nombre"];
						   $mail=$_POST["mail"];
						   $mensaje=$_POST["mensaje"];
						   $archivo=$_POST["archivo"];

						   $header = 'From: Landing Page' . " \r\n";
						   $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
						   $header .= "Mime-Version: 1.0 \r\n";
						   $header .= "Content-Type: text/plain";
						   $mensaje_m .= "Nombre: " .$nombre. " \r\n";
						   $mensaje_m .= "Mail: " .$mail. " \r\n";
						   $mensaje_m .= "Mensaje: " .$mensaje. " \r\n";
						   $mensaje_m .= "Archivo: " .$archivo. " \r\n";
						   $mensaje_m .= "Enviado el " . date('d/m/Y', time());
						   $para = 'lek.correo@gmail.com';
						   $asunto = 'Contacto STP '.date('d/m/Y', time());

						   mail($para, $asunto, utf8_decode($mensaje_m),"Alta Agencia ");
						   ?>
<body>
	
	<main>
		
		<!--HEADER-->
		<header>
			<img id="logo" src="images/logo_01.png">

			
			<div class="datos">
				<span><strong>STP Argentina - Soluciones Tecnológicas Personalizadas</strong></span>
				<span class="ubicacion">Avenida Corrientes 1675 - CABA</span><br>
				<span class="email">info@stp-argentina.com.ar</span><br>
				<span class="telefono">(11) 2064-2709</span>
				
			</div>
			<img style="width:600px; position:absolute; top:8%; left:27%" src="images/winebdridge-01-01.png">
			<nav>
				<ul>
					<li ><a href="index.html">HOME</a></li>
					<li ><a href="eleginos.html">ELEGINOS</a></li>
					<li ><a href="servicios.html">SERVICIOS</a></li>
					<li><a href="clientes.html">CLIENTES</a></li>
					<!--<li><a href="#">TRABAJE EN STP</a></li>-->
					<li style="background-color: #29C5F8;"><a href="contacto.html">CONTACTO</a></li>
				</ul>
			</nav>

			<div class="cleaner"></div>
		</header>

		<!--BANNER-->
		<section class="banner">
			<img src="images/banner.jpg" alt="banner">
		</section>

		<!--DESTACADOS-->
		<section class="destacados">
			
			<article class="servicio">
			<h1 style="margin-bottom:25px;">¡Gracias!</h1>
			<p style="text-align:center; font-size:11pt;"><b>Mensaje enviado correctamente.</b></p>
			</article>

			<div class="cleaner"></div>

		</section>


		<!--FOOTER-->
		<footer>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="eleginos.html">ELEGINOS</a></li>
				<li><a href="servicios.html">SERVICIOS</a></li>
				<li><a href="clientes.html">CLIENTES</a></li>
				<!--<li><a href="#">TRABAJE EN STP</a></li>-->
				<li><a href="contacto.html">CONTACTO<span id="blink">_</span></a></li>
			</ul>

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.999090794386!2d-58.3904065!3d-34.604184499999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac169a9e8c3%3A0x8731e8ab00c43fbe!2sAv.+Corrientes+1675%2C+C1042AAC+CABA!5e0!3m2!1ses!2sar!4v1437247328473"></iframe>

			<img src="images/logo.jpg" height="200" width="200" class="logo-footer" alt="logo footer">
			<div class="cleaner"></div>
		</footer>

	</main>

</body>

<script language="JavaScript">
function blink_uno() {
document.getElementById('blink').style.visibility='visible';
setTimeout('blink_dos()',500);
}
function blink_dos() {
document.getElementById('blink').style.visibility='hidden';
setTimeout('blink_uno()',500);
}
blink_uno();
</script>
</html>