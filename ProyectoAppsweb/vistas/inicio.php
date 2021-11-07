<?php 
	session_start();
	if(isset($_SESSION['usuario'])){
		
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	<?php require_once "menu.php"; ?>
    <link rel="stylesheet" type="text/css" href=".../css/menu.css">
    <link rel="stylesheet" type="text/css" href=".../librerias/bootstrap/css/bootstrap.css">
</head>
<body>
  <!--================Banner Area =================-->
  <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h3>Bienvenido a nuestra web:</h3>
                    <h2>¿Quienes somos?</h2>
                    <p>Nos dedicamos a la promoción y formación de las nuevas tecnologías basadas en la electrónica en general y en los microcontroladores en particular.
                    <br> Para ello diseñamos, fabricamos y comercializamos equipos y entrenadores de carácter didáctico especialmente orientados a los estudiantes y centros de enseñanza de Primaria, Secundaria, Formación Profesional y Universidad.
                    </p>
                    <a href="ventas.php" class="btn theme_btn button_hover">Compra con nosotros</a>
                </div>
            </div>
        </div>

    </section>
    <!--================Banner Area =================-->

</body>
</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>