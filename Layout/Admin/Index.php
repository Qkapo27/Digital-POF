<?php 
    // include "../../App/Config/Config.php"; //Configuracion
    include "../../App/Php/controlador.php"; //Controlador
    session_start();
    if (isset($_SESSION['usuario_sesion'])) {    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio E.P.E.T N°1</title>
    <link rel="shortcut icon" href="<?php echo $URL?>/Public/Assets/Img/Logo.png"/>
    <!-- Bootstrap -->
        <link rel="stylesheet" href="<?php echo $URL?>/Public/Css/bootstrap.css">
    <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
    <header>
        <img src="../../Public/Assets/Header.png" alt="" class="w-100 h-50 pt-4">
    </header>
    <div class="container">
        <nav class="navbar bg-body-secondary fixed-top ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">EPET N°1</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>
                            <!-- Solo Admin -->
                                <li class="nav-item">
                                    <a class="nav-link" href="POF.php">POF</a>
                                </li>
                            <!-- Fin Admin -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Información de la Institución
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="Institucion/Institucion.php#Institucion">Institución</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="Institucion/Institucion.php#Directivos">Directivos</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="Institucion/Institucion.php#Titulo">Titulos profesional</a></li>
                                </ul>
                            </li>
                            <div class="nav-link ">
                                <a class="btn btn-danger" href="<?php echo $URL?>./App/Php/User/Close.php"> cerrar sesion </a>
                            </div>
                        </ul>
                    </div>
                </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <h2 class="text-center" id="st">Sitio web creado por</h2>
            <h1 class="text-center" id="p23"><strong>Promo 23</strong></h1>
            <img src="../../Public/Assets/Img/23.jpg" class="d-block w-100" alt="...">
        </div>

    <!-- Js -->
        <!-- Bootstrap -->
            <script src="<?php echo $URL?>/Public/Js/bootstrap.bundle.js"></script>
        <!-- Jquery -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="<?php echo $URL?>/Public/Js/Jquery.js"></script>
        <!-- Login -->
            <script>
                $('#btnIngresar').click(function(){
                        var usuario=$('#User').val();
                        var password_user=$('#Password').val();
                            
                        var url = '../../App/Php/User/Login.php';
                        $.post(url , {usuario:usuario , password_user:password_user}, function(datos){
                            $('#respuesta').html(datos);
                        })
                    });		
            </script>
</body>
</html>
<?php 
    }else{
        header("location:".$URL."index.php");
    }
?>