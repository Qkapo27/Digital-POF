<?php 
    include "../../../App/Php/controlador.php"; //Controlador
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
            <a class="navbar-brand" href="<?php echo $URL?>/Index.php">
                <img src="<?php echo $URL?>/Public/Assets/Img/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                E.P.E.T N°1
            </a>
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
                                <a class="nav-link active" aria-current="page" href="<?php echo $URL?>/Index.php">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Información de la Institución
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#Institucion">Institución</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#Directivos">Directivos</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#Titulo">Titulos profesional</a></li>
                                </ul>
                                <!-- Login -->
                                <div class="nav-link dropdown">
                                    <a class="d-flex align-items-center text-success text-decoration-none dropdown-toggle" data-bs-toggle="modal" data-bs-target="#Login" href="#">
                                        <h3>
                                            <strong><i class="fas fa-user"></i></i>Ingresar</strong>
                                        </h3>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </div>
                </nav>
            </div>    
                <!-- Modal Login  -->
                    <div class="modal fade" id="Login" tabindex="-1" aria-labelledby="ModalLogin" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="agregar">Ingresar</h1>
                                </div>
                                <div class="modal-body">
                                    <?php include('../../../App/Php/Modal/ModalLogin.php');?>
                                </div>                    
                            </div>
                        </div>
                    </div>
                <!-- Fin Login -->
    </div>

        <div class="container">            
            <h1 class="text-center pt-1 pb-2" id="Institucion">
                Institución
            </h1>
            <!-- 1 -->
            <div class="card container pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-12 bg-white overflow-hidden" >
                        <div class="p-5">
                            <img src="<?php echo $URL?>/Public/Assets/Img/1.jpg" class="img-fluid rounded-start">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 bg-white">
                        <div class="card-body">
                            <h2 class="card-title">Educación Técnica Integral </h2>
                            <p class="card-text">La EPET Nº 1 de La Rioja se enorgullece de su enfoque en la educación técnica integral. Esto significa que no solo se limita a impartir conocimientos teóricos, sino que también se centra en la aplicación práctica de esos conocimientos. Los estudiantes tienen la oportunidad de trabajar en laboratorios equipados con tecnología de vanguardia, lo que les permite poner en práctica lo que aprenden en el aula. Esta combinación de teoría y práctica es fundamental para la formación de técnicos altamente calificados que están preparados para enfrentar los desafíos del mundo laboral en sus respectivos campos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="card container pt-5 pb-5">
                <div class="row">                    
                    <div class="col-lg-6 col-md-12 bg-white">
                        <div class="card-body">
                            <h2 class="card-title">Excelencia Educativa </h2>
                            <p class="card-text">La excelencia educativa es un pilar fundamental en la EPET Nº 1. El cuerpo docente de la escuela está compuesto por profesionales altamente capacitados y dedicados que están comprometidos con la formación de los estudiantes. Además, la institución invierte en instalaciones modernas y equipos actualizados para garantizar que los estudiantes tengan acceso a recursos de calidad. Esto no solo incluye laboratorios técnicos avanzados, sino también bibliotecas bien surtidas y espacios de aprendizaje colaborativo. La combinación de docentes expertos y recursos de vanguardia asegura que los estudiantes reciban una educación de alta calidad.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 bg-white overflow-hidden" >
                        <div class="p-5">
                            <img src="<?php echo $URL?>/Public/Assets/Img/2.jpg" class="img-fluid rounded-end">
                        </div>
                    </div>
                </div>
            </div>
            <!-- 3 -->
            <div class="card container pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-12 bg-white overflow-hidden" >
                        <div class="p-5">
                            <img src="<?php echo $URL?>/Public/Assets/Img/3.jpg" class="img-fluid rounded-start">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 bg-white">
                        <div class="card-body">
                            <h2 class="card-title">Valores y Ciudadanía</h2>
                            <p class="card-text">La EPET Nº 1 va más allá de la educación técnica al inculcar valores importantes en sus estudiantes. Fomenta la ética profesional, el respeto por los demás y el trabajo en equipo. Los estudiantes son alentados a ser ciudadanos responsables y conscientes de su papel en la sociedad. La escuela promueve la responsabilidad social y anima a los estudiantes a utilizar sus habilidades técnicas para contribuir al bienestar de la comunidad y abordar los desafíos locales.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4 -->
            <div class="card container pt-5 pb-5">
                <div class="row">                    
                    <div class="col-lg-6 col-md-12 bg-white">
                        <div class="card-body">
                            <h2 class="card-title">Contribución al Desarrollo Local </h2>
                            <p class="card-text">La EPET Nº 1 ha tenido un impacto significativo en el desarrollo local de La Rioja. Al formar técnicos altamente capacitados, la escuela ha contribuido al crecimiento de la provincia y ha fortalecido la industria local. Los graduados de la EPET Nº 1 han encontrado empleo en una variedad de sectores, desde la industria manufacturera hasta la tecnología, lo que ha impulsado la economía local y la comunidad en general. Además, muchos exalumnos de la escuela han regresado a la comunidad para compartir su experiencia y contribuir a proyectos locales.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 bg-white overflow-hidden" >
                        <div class="p-5">
                            <img src="<?php echo $URL?>/Public/Assets/Img/4.jpg" class="img-fluid rounded-end">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Directivos -->
            <div class="container mt-5">
                <h1 class="text-center pt-5" id="Directivos">
                    Directivos
                </h1>
                <br>
                <br>
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <!-- 1 -->
                            <div class="col">
                                <div class="card">
                                    <img src="" class="card-img-top c-img mx-auto d-block mt-5">
                                    <h5 class="text-center">
                                        Vicky Herrera Gómez
                                    </h5>
                                    <h5 class="text-center">
                                        Directora
                                    </h5>
                                    <p class="text-center">
                                        <i class="fa-brands fa-instagram fa-2xl"><a href=""></a></i>
                                        <i class="fa-brands fa-square-facebook fa-2xl"><a href=""></a></i>
                                        <i class="fa-brands fa-linkedin fa-2xl"><a href=""></a></i>
                                    </p>
                                </div>
                            </div>
                        <!-- 2 -->
                            <div class="col">
                                <div class="card">
                                    <img src="" class="card-img-top c-img mx-auto d-block mt-5">
                                    <h5 class="text-center">
                                        Portales María Elena
                                    </h5>
                                    <h5 class="text-center">
                                        ViceDirectora
                                    </h5>
                                    <p class="text-center">
                                        <i class="fa-brands fa-instagram fa-2xl"><a href=""></a></i>
                                        <i class="fa-brands fa-square-facebook fa-2xl"><a href=""></a></i>
                                        <i class="fa-brands fa-linkedin fa-2xl"><a href=""></a></i>
                                    </p>
                                </div>
                            </div>
                        <!-- 3 -->
                            <div class="col">
                                <div class="card">
                                    <img src="" class="card-img-top c-img mx-auto d-block mt-5">
                                    <h5 class="text-center">
                                        Maria
                                    </h5>
                                    <h5 class="text-center">
                                        Asesora pedagógica
                                    </h5>
                                    <p class="text-center">
                                        <i class="fa-brands fa-instagram fa-2xl"><a href=""></a></i>
                                        <i class="fa-brands fa-square-facebook fa-2xl"><a href=""></a></i>
                                        <i class="fa-brands fa-linkedin fa-2xl"><a href=""></a></i>
                                    </p>
                                </div>
                            </div>
                        <!--  -->
                        <!-- 4 -->
                            <div class="col">
                                <div class="card">
                                    <img src="" class="card-img-top c-img mx-auto d-block mt-5">
                                    <h5 class="text-center">
                                        Mario
                                    </h5>
                                    <h5 class="text-center">
                                        Secretario
                                    </h5>
                                    <p class="text-center">
                                        <i class="fa-brands fa-instagram fa-2xl"><a href=""></a></i>
                                        <i class="fa-brands fa-square-facebook fa-2xl"><a href=""></a></i>
                                        <i class="fa-brands fa-linkedin fa-2xl"><a href=""></a></i>
                                    </p>
                                </div>
                            </div>
                        <!--  -->
                        </div>
                    </div>
                    <hr> 
                </div>
            <!-- Titulo -->
            <hr class="pt-5">
            <h1 class="text-center" id="Titulo">Titulo Profesional</h1>
            <!-- Técnico en Industrias de Procesos -->
                <div class="card container pt-5 pb-5">
                    <div class="row">
                    <h2 class="card-title text-center">Técnico en Industrias de Procesos </h2>
                        <div class="col-lg-6 col-md-12 bg-white overflow-hidden" >
                            <div class="p-5">
                                <img src="<?php echo $URL?>/Public/Assets/Img/Ind.Proceso/1.jpg" class="img-fluid rounded-start">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 bg-white">
                            <div class="card-body">
                                <p class="card-text"><strong>Perfil Profesional</strong></p>
                                <p class="card-text">El Técnico en Industrias de procesos está capacitado para manifestar conocimientos, habilidades, destrezas, valores y actitudes en situaciones reales de trabajo, conforme a criterios de profesionalidad propios de su área y de responsabilidad social al:</p>
                                <ul>
                                    <li>"Diseñar modificaciones de procesos productos y métodos de análisis".</li>
                                    <li>"Operar, controlar y optimizar plantas de operaciones y procesos fisicoquímicos y biológicos”.</li>
                                    <li>“Realizar e interpretar análisis y ensayos físicos, químicos, fisicoquímicos y microbiológicos de materias primas, insumos, materiales en proceso, productos, emisiones y medio ambiente”.</li>
                                    <li>“Comercializar, seleccionar y abastecer insumos, productos e instrumental específicos”.</li>
                                    <li>“Generar y/o participar en emprendimientos vinculados con áreas de su profesionalidad”.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 bg-white">
                            <div class="card-body">
                                <p class="card-text">
                                    Cada uno de estos puntos en los ámbitos de producción: plantas, laboratorios, fraccionamiento y expedición, control y tratamiento de emisiones, investigación y desarrollo, gestión y comercialización en sectores como la industria petroquímica, alimenticia, industrias de base química y microbiológica, química fina, química pesada y textil; actuando en relación de dependencia o en forma.
                                </p>
                                <p class="card-text">
                                Cada uno de estos puntos en los ámbitos de producción: plantas, laboratorios, fraccionamiento y expedición, control y tratamiento de emisiones, investigación y desarrollo, gestión y comercialización en sectores como la industria petroquímica, alimenticia, industrias de base química y microbiológica, química fina, química pesada y textil; actuando en relación de dependencia o en forma independiente, interdisciplinariamente con expertos en otras áreas, eventualmente involucrados en su actividad (equipamiento e instalaciones electromecánicas, construcciones civiles, mecánica, electricidad, electrónica, producción agropecuaria, informática, etc.).
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 bg-white overflow-hidden" >
                            <div class="p-5">
                                <img src="<?php echo $URL?>/Public/Assets/Img/Ind.Proceso/2.jpg" class="img-fluid rounded-end">
                            </div>
                        </div>
                        
                    </div>
                </div>
            <!-- Técnico en Informática Profesional y Personal -->
                <div class="card container pt-5 pb-5">
                    <div class="row">
                    <h2 class="card-title text-center">Técnico en Informática Profesional y Personal </h2>
                    <!--  -->
                    <div class="col-lg-6 col-md-12 bg-white">
                            <div class="card-body">
                                <p class="card-text"><strong>Perfil Profesional</strong></p>
                                <p class="card-text">
                                El técnico se desempeña en diversos sectores ocupacionales, entre los que pueden mencionarse:
                                </p>
                                <ul>
                                    <li>Empresas u organizaciones de todo tipo, finalidad y dimensión que sean usuarias de computación, brindando servicios de apoyo a sus propios usuarios informáticos.</li>
                                    <li>Empresas u organizaciones de todo tipo, finalidad y dimensión que sean usuarias de computación, brindando servicios de apoyo a sus propios usuarios informáticos.</li>
                                    <li>Servicios de apoyo a usuarios de empresas que provén servicios informáticos.</li>
                                    <li>Empresas de comercialización de productos o servicios basados en Tecnología de la Información y las Comunicaciones, brindando servicios de capacitación, asesoramiento o apoyo a usuarios o posibles usuarios informáticos.</li>
                                    <li>Personalmente o en microemprendimientos, brindando servicios de apoyo y venta a usuarios informáticos. Pertenezcan éstos a una empresa u otro tipo de organización, o sean individuales de tipo hogareño o que actúan como profesionales independientes.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 bg-white overflow-hidden" >
                            <div class="p-5">
                                <img src="<?php echo $URL?>/Public/Assets/Img/Informatica/2.jpg" class="img-fluid rounded-end">
                            </div>
                        </div>    
                    <!--  -->
                        <div class="col-lg-6 col-md-12 bg-white overflow-hidden" >
                            <div class="p-5">
                                <img src="<?php echo $URL?>/Public/Assets/Img/Informatica/1.jpg" class="img-fluid rounded-start">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 bg-white">
                            <div class="card-body">
                                <ul>
                                    <li>
                                        Brindar servicios de asistencia técnica y asesoramiento al usuario y, como parte de ello, pueden instalar, reemplazar y configurar o reconfigurar elementos de hardware o de software, incluyendo la intercomunicación entre equipos.
                                    </li>
                                    <li>
                                        Diseñar programas y ejecutar procesos para proteger datos, recuperar datos dañados o no accesibles, convertirlos a formatos diferentes para utilizarlos en otros ambientes, o complementar funcionalidades de sistemas.
                                    </li>
                                    <li>
                                        Montar equipos de computación o apoyar a una función de comercialización de equipos, programas o servicios informáticos realizando presentaciones o capacitando y asesorando al usuario o futuro usuario en las características operativas de los bienes o servicios vendidos.
                                    </li>
                                    <li>
                                        Trabajar en oficinas de cualquier especialidad
                                    </li>
                                    <li>
                                        Programar y desarrollar sistemas informáticos sencillos.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a type="button" class="btn btn-warning flex" target="_Blank" href="https://sites.google.com/view/epet1-larioja/ensezanza?authuser=0">Para más Informacion</a>
                </div>                
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
                            
                        var url = '../../../App/Php/User/Login.php';
                        $.post(url , {usuario:usuario , password_user:password_user}, function(datos){
                            $('#respuesta').html(datos);
                        })
                    });		
            </script>
</body>
</html>