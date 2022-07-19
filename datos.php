<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emer Electro - Registrar</title>
    <link rel="shortcut icon" href="img/logo .jpg">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-diagoona.css" rel="stylesheet" />
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
                            <h1 class="tm-sitename text-uppercase">Servicio de Tecnología Especializado</h1>
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
                                    <a class="nav-link tm-nav-link" href="contactanos.php">Contactanos </a>
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
                        <h2 class="mb-4 tm-content-title">DATOS INGRESADOS EN LA BASE</h2>
                        
<?php 
$conexion=mysqli_connect('localhost','root','','datos');
?>
<!DOCTYPE html>
<html>
<body>
    <br>
    <table border=1>
        <tr>
            <td>ID</td>
            <td>USUARIO</td>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>CORREO</td>
            <td>GENERO</td>
        </tr>
<?php
$sql="SELECT * from clientes";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
?>
      <tr>
          <td><?php echo $mostrar['idCliente']?></td>
          <td><?php echo $mostrar['usuario']?></td>
          <td><?php echo $mostrar['nombre']?></td>
          <td><?php echo $mostrar['apellido']?></td>
          <td><?php echo $mostrar['email']?></td>
          <td><?php echo $mostrar['genero']?></td>
      </tr>
      <?php
        }
      ?>
    </table>
</body>
</html>
                        <br> <br>
                        <a href="registro.html" class="btn btn-primary1">Volver atras </a>

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
    
















