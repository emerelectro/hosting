<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emer Electro - Contactanos</title>
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
                        <h2 class="mb-4 tm-content-title">¿Quieres ser distribuidor?</h2>
                        <p class="mb-85">Llena el siguiente formulario:</p>
                        

                        <!--codigo para agregar los datos a la base de datos desde el mismo archivo de php -->
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        
                            <div class="form-group mb-4">
                                <input type="text" name="cedula" class="form-control" placeholder="Cedula" required="" pattern="[0-9]+" maxlength="10" minlength="10" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombres" required="" pattern="[a-z A-Z]+"/>
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="apellido" class="form-control" placeholder="Apellidos" required="" pattern="[a-z A-Z]+"/>
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="direccion" class="form-control" placeholder="Direccion" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="telefono" class="form-control" placeholder="Celular" required="" pattern="[0-9]+" maxlength="10" minlength="10" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="edad" class="form-control" placeholder="Edad" required="" pattern="[0-9]+" maxlength="3" minlength="1" />
                            </div>
                            <!--<div class="form-group mb-5">
                                <textarea rows="6" name="message" class="form-control" placeholder="Mensaje...(Opcional)"></textarea>
                            </div> -->
                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Enviar</button>
                            </div>
                        </form>

                        <?php
                        //codigo para agregar los datos de mysql desde el mismo archivo de php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            include_once ('conectar.php');
                            //recibo los datos del formulario
                            $cedula=$_POST['cedula'];
                            $nombre=$_POST['nombre'];
                            $apellido=$_POST['apellido'];
                            $direccion=$_POST['direccion'];
                            $telefono=$_POST['telefono'];
                            $edad=$_POST['edad'];

                            $conectar=conn();
                            $sql="INSERT INTO personave(cedula,nombre,apellido,direccion,telefono,edad)
                            VALUES ('$cedula','$nombre','$apellido','$direccion','$telefono','$edad')";

                           //Codigo de validacion de cedula
                           $verificar_cedula = mysqli_query($conectar, "SELECT * FROM personave WHERE cedula=$cedula");
                           if(mysqli_num_rows($verificar_cedula) >0 ){
                            
                            echo '<script language="javascript">alert("Ya exiten datos enviados con esta cedula. Intentalo con otra nuevamente");</script>';
                            
                          }

                            else{
                            //Codigo para mensaje de alerta
                           $result = mysqli_query($conectar,$sql)or trigger_error("Query failed! SQL- Error:".mysqli_error($conectar),E_USER_ERROR);
                           
                           echo '<script language="javascript">alert("Formulario enviado correctamente. Nos pondremos en contacto contigo.");</script>';
                         
                            } 
                         mysqli_close($conectar);
                         
                        }
                          
                        
                          
                       ?>
                        <br><br><br><br><br><br>
                        <h2 class="mb-4 tm-content-title">Contactanos</h2>
                        <p class=>Matriz-La Maná</p>
                        <p class=>Av. San Pablo y Salcedo.</p>
                        <p class=>Teléf: 0981794287</p>
                        <p class="mb-85">Correo: emer_2007@hotmail.com</p>
                       
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