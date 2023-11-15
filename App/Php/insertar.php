<?php
    include('controlador.php');

    $key = array($_POST['DNI'],$_POST['Nombre'], $_POST['Apellido'], $_POST['CAR'], $_POST['Agrupamiento'], $_POST['S'], $_POST['Asignatura'],$_POST['Hs'],$_POST['Curso'], $_POST['Division'], $_POST['Ciclo'], $_POST['Turno'], $_POST['F-Ingreso'], $_POST['OBS'],);


    $ins = new crud();
    $ins->conectar();
    $ins->insertarDatos($key);

    header('Location:../../Layout/Admin/POF.php');
?>