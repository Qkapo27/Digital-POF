<?php 
    include "../../App/Config/Config.php"; //Configuracion
    include "../../App/Php/controlador.php"; //Controlador

    session_start();
    if (isset($_SESSION['usuario_sesion'])) {  
        
    //
    $sql_total_pof = 'SELECT COUNT(*) as total FROM pof';
    $stmt_total_pof  = $pdo->prepare($sql_total_pof );
    $stmt_total_pof ->execute();
    $total_pof_db = $stmt_total_pof ->fetchColumn();

    $art_x_pag = 20; // Número de artículos por página
    $paginas = ceil($total_pof_db / $art_x_pag); // Calcular el número de páginas
    $paginaActual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="../../Public/Css/bootstrap.css"> -->
    <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
    <?php
            if (!$_GET) {
                header('Location:POF.php?pagina=1');
            }
            
            // Obtener el término de búsqueda, si se proporciona en la URL
            $termino_busqueda = isset($_GET['busqueda']) ? $_GET['busqueda'] : '';
            
            if ($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0) {
                header('Location:POF.php?pagina=1');
            }
            
            $iniciar = ($_GET['pagina'] - 1) * $art_x_pag;
            
            // Modifica la consulta para obtener solo los libros de literatura paginados
            $sql_articulos = 'SELECT * FROM pof';
            if (!empty($termino_busqueda)) {
                // Si se proporciona un término de búsqueda, ajusta la consulta
                $sql_articulos .= ' WHERE campo_busqueda LIKE :termino_busqueda';
            }
            
            $sql_articulos .= ' LIMIT :iniciar, :narticulos';
            
            $sentencia_articulos = $pdo->prepare($sql_articulos);
            
            if (!empty($termino_busqueda)) {
                $termino_busqueda = '%' . $termino_busqueda . '%';
                $sentencia_articulos->bindParam(':termino_busqueda', $termino_busqueda, PDO::PARAM_STR);
            }
            
            $sentencia_articulos->bindParam(':iniciar', $iniciar, PDO::PARAM_INT);
            $sentencia_articulos->bindParam(':narticulos', $art_x_pag, PDO::PARAM_INT);
            
            $sentencia_articulos->execute();
            
            $resultado_articulos = $sentencia_articulos->fetchAll();

    ?>

    <header>
        <img src="../../Public/Assets/Header.png" alt="" class="w-100 h-50 pt-4">
    </header>
    
    <div class="container">
        <nav class="navbar bg-body-secondary fixed-top ">
            <div class="container-fluid">
                <a class="navbar-brand" href="Index.php">EPET N°1</a>
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
                                <a class="nav-link active" aria-current="page" href="Index.php">Inicio</a>
                            </li>
                            <!-- Solo Admin -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#">POF</a>
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
                                <a class="btn btn-danger" href="<?php echo $URL?>/App/Php/User/Close.php"> cerrar sesion </a>
                            </div>
                        </ul>
                    </div>
                </div>
                </div>
            </nav>
        </div>

        <div class="ps-2 px-2">
        <div class="d-flex flex-column-reverse px-5 pt-2 pb-2">
            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#agregar" href="#">
                <i class="fas fa-plus mr-2 lead fa-fw"></i>
                agregar
            </button>
        </div>
                <!-- Modal Agregar  -->
                <div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="ModalAgregar" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="agregar">Agregar</h1>
                                    </div>
                                    <div class="modal-body">
                                        <?php include('../../App/Php/Modal/ModalAgregar.php');?>
                                    </div>                    
                                </div>
                            </div>
                        </div>
                        <input type="text" id="buscar" class="form-control mb-2" onkeyup="buscar()" placeholder="Buscar en tabla" title="Empieza a escribir para buscar">
            <table class="table table-dark table-striped table-hover"  id="tabla" data-sort="table">
                <thead>
                    <tr>
                        <!-- <th>Foto</th> -->
                        <th class="col">Dni</th>
                        <th class="col">Nombre</th>
                        <th class="col">Apellido</th>
                        <th class="col">Car. Codigo</th>
                        <th class="col">Agrupamiento</th>
                        <th class="col">S. Prevista</th>
                        <th class="col">Asignatura</th>
                        <th class="col">Hs</th>
                        <th class="col">Curso</th>
                        <th class="col">Division</th>
                        <th class="col">Ciclo</th>
                        <th class="col">Turno</th>
                        <th class="col">F. Ingreso</th>
                        <th class="col">Observaciones</th>
                        <th class="col">Editar</th>
                        <th class="col">Eliminar</th>
                    </tr>
                </thead>
                <Tbody>
                    <?php 
                            foreach ($resultado_articulos as $dato): ?>                        
                            <tr>
                                <td><?php echo $dato['DNI'];?></td>
                                <td><?php echo $dato['Nombre'];?></td>
                                <td><?php echo $dato['Apellido'];?></td>
                                <td><?php echo $dato['CAR'];?></td>
                                <td><?php echo $dato['Agrupamiento'];?></td>
                                <td><?php echo $dato['S'];?></td>
                                <td><?php echo $dato['Asignatura'];?></td>
                                <td><?php echo $dato['Hs'];?></td>
                                <td><?php echo $dato['Curso'];?></td>
                                <td><?php echo $dato['Division'];?></td>
                                <td><?php echo $dato['Ciclo'];?></td>
                                <td><?php echo $dato['Turno'];?></td>
                                <td><?php echo $dato['F-Ingreso'];?></td>
                                <td><?php echo $dato['OBS'];?></td>
                                <td> <!-- Editar  -->
                                    <a class="EyE" data-bs-toggle="modal" data-bs-target="#Editar<?= $dato["Id"]?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- Modal Editar  -->
                                        <div class="modal fade" id="Editar<?= $dato["Id"]?>" tabindex="-1" aria-labelledby="ModalAgregar" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 " id="editar">Editar</h1>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php include('../../App/Php/Modal/ModalEditar.php');?>
                                                    </div>                    
                                                </div>
                                            </div>
                                        </div>
                                </td>
                                <td> <!-- Eliminar  -->
                                    <a class="EyE" href="<?php echo $URL;?>/App/Php/eliminar.php?Id=<?php echo $dato['Id'];?>">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php 
                            endforeach
                        ?>
                </Tbody>
                <!-- Agrega la fila para el paginado -->
                <tfoot>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <?php
                            $numPaginasMostradas = 10; // Cambia esto al número de páginas que deseas mostrar.
                            $mitadPaginas = floor($numPaginasMostradas / 2);

                            // Calcular los límites para mostrar solo un número específico de páginas.
                            $inicio = max(1, $paginaActual - $mitadPaginas);
                            $fin = min($paginas, $paginaActual + $mitadPaginas);

                            // Mostrar la página anterior si no es la primera página.
                            if ($paginaActual > 1) {
                                ?>
                                <li class="page-item">
                                    <a class="page-link" href="?pagina=<?php echo ($paginaActual - 1); ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                            <?php
                            }

                            for ($i = $inicio; $i <= $fin; $i++) {
                                ?>
                                <li class="page-item <?php echo ($i == $paginaActual) ? 'active' : ''; ?>">
                                    <a class="page-link" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                                </li>
                            <?php
                            }

                            // Mostrar la página siguiente si no es la última página.
                            if ($paginaActual < $paginas) {
                                ?>
                                <li class="page-item">
                                    <a class="page-link" href="?pagina=<?php echo ($paginaActual + 1); ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </nav>
                </tfoot>
            </table>
        </div>
    
        <!-- Js -->
        <!-- Bootstrap 5.3 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
            <!-- Jquery -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="../../Public/Js/Jquery.js"></script>
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
        <!-- Buscar -->
            <script src="<?php echo $URL?>/Public/Js/POF.js"></script>
            
</body>
</html>
<?php 
    }else{
        header("location:".$URL."index.php");
    }
?>