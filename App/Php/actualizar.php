<?php
    include('controlador.php');
    // include('../Config/config.php');
    

    $id = $_POST['Id'];
    echo $id;
    $datos = array($_POST['DNI'],$_POST['Nombre'], $_POST['Apellido'], $_POST['CAR'], $_POST['Agrupamiento'], $_POST['S'], $_POST['Asignatura'],$_POST['Hs'],$_POST['Curso'], $_POST['Division'], $_POST['Ciclo'], $_POST['Turno'], $_POST['F-Ingreso'], $_POST['OBS'],);

    
    $ins = new crud();
    $ins->conectar();
    $ins->actualizarDatos($id, $datos);

    header('Location:../../Layout/Admin/POF.php');
?>
