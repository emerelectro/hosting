<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emer Electro - Editar</title>
    <link rel="shortcut icon" href="img/logo .jpg">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-diagoona.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
<!--

TemplateMo 550 Diagoona

https://templatemo.com/tm-550-diagoona

-->
</head>
<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <img src="img/logo .jpg" width="215">
                        <div class="media-body">
                            <h1 class="animate__animated animate__backInRight"> SERVICIO DE TECNOLOGIA ESPECIALIZADO</h1>
                        </div>        
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" 
                            data-toggle="collapse" data-target="#navbar-nav" 
                            aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="index.html">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="about.html">Acerca de</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="services.html">Servicios</a>
                                </li>                            
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="contactanos.php">Contactanos <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="registro.html" class="btn btn-primary1">Ingresar</a>
                                </li>
                            </ul>                            
                        </div>                        
                    </nav>
                </div>
            </div>
            
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact">
                    <h2 class="mb-4 tm-content-title">Edite sus datos</h2>
                        

			<?php
           include_once('conectar.php');

           $conexion=mysqli_connect('localhost','root','','datos');
           
          $codigo=$_GET['id'];
            
            ?>

			   <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <?php
            $sql="SELECT*FROM personave WHERE codigo='$codigo'";
            $result=mysqli_query($conexion,$sql);
            while($mostar=mysqli_fetch_array($result)){
              
                ?>
				<div class="form-group mb-4">
				  	<input  type="hidden" class =" form-control "  value="<?php echo $mostar['codigo']?>" name="codigo" >  
            	</div>
				<div class="form-group mb-4">
                     <input type="text" name="cedula" class="form-control"  value="<?php echo $mostar['cedula']?>" placeholder="Cedula" required="" pattern="[0-9]+" maxlength="10" minlength="10" />
                </div>
				<div class="form-group mb-4">
                    <input type="text" name="nombre" class="form-control" value="<?php echo $mostar['nombre']?>" placeholder="Nombres" required="" pattern="[a-z A-Z]+"/>
                </div>
                <div class="form-group mb-4">
                    <input type="text" name="apellido" class="form-control" value="<?php echo $mostar['apellido']?>" placeholder="Apellidos" required="" pattern="[a-z A-Z]+"/>
                </div>
                <div class="form-group mb-4">
                     <input type="text" name="direccion" class="form-control" value="<?php echo $mostar['direccion']?>" placeholder="Direccion" required="" />
                </div>
                <div class="form-group mb-4">
                     <input type="text" name="telefono" class="form-control"  value="<?php echo $mostar['telefono']?>" placeholder="Celular" required="" pattern="[0-9]+" maxlength="10" minlength="10" />
                </div>
                <div class="form-group mb-4">
                    <input type="text" name="edad" class="form-control" value="<?php echo $mostar['edad']?>" placeholder="Edad" required="" pattern="[0-9]+" maxlength="3" minlength="1" />
                </div>
				<div class="text-right">    
                    <button type="submit" class="btn btn-big btn-primary">Guardar</button>
                </div>
            <?php
            }
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//recibo los datos del formulario
$codigo=$_POST['codigo'];
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];




	$conectar=conn();
	$sql="UPDATE personave SET codigo='$codigo',cedula='$cedula',nombre='$nombre',apellido='$apellido',direccion='$direccion',telefono='$telefono',edad='$edad'
	  WHERE codigo='$codigo'";
	$query=mysqli_query($conectar,$sql);
	
		 //Codigo de validacion de cedula
		 $verificar_cedula = mysqli_query($conectar, "SELECT * FROM personave WHERE cedula=$cedula");
		 if(mysqli_num_rows($verificar_cedula) >0 ){
		  
			echo '<script language="javascript">';
			echo 'alert("Los datos ingresados ya se encuentran con esa cedula. Intente nuevamente");';
			echo 'window.location="crudev.php";';
			echo '</script>';

		  
		}

		  else{
		  //Codigo para mensaje de alerta
		 $result = mysqli_query($conectar,$sql)or trigger_error("Query failed! SQL- Error:".mysqli_error($conectar),E_USER_ERROR);
		 
		 echo '<script language="javascript">';
		 echo 'alert("Datos actualizados correctamente");';
		 echo 'window.location="index.php";';
		 echo '</script>';

	   
		  } 
	   mysqli_close($conectar);
	   
	  }
?>
                       
                  </section>
                </main>
            </div>
        </div>        

        <div class="tm-row">
            <div class="tm-col-left text-center">            
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>            
            </div>        
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Copyright 2022 EmerElectro SI. 
                    
                    | Diseñado: <a rel="nofollow" target="_parent" href="https://www.instagram.com/emer__electro/" class="tm-text-link">Emerson Vásconez</a></p>
                </footer>
            </div>  
        </div>

        <div class="tm-bg"> <!-- Diagonal background design -->
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>





