<form action="<?php echo $URL;?>/App/Php/actualizar.php" method="POST" enctype="multipart/form-data">
<table class = "table table-bordered">
        <input type="hidden" name="Id" value="<?= $dato['Id']?>">
        <tr>
            <td><label>DNI</label></td>
            <td><input type="number" name="DNI" id="" required placeholder="<?= $dato['DNI']?>"></td>
        </tr>
        <tr>
            <td><label>Nombre</label></td>
            <td><input type="text" name="Nombre" id="" required placeholder="<?= $dato['Nombre']?>"></td>
        </tr>
        <tr>
            <td><label>Apellido</label></td>
            <td><input type="text" name="Apellido" required placeholder="<?= $dato['Apellido']?>"></td>
        </tr>
        <tr>
            <td><label>Codigo de cargo</label></td>
            <td><input type="text" name="CAR" id="" required placeholder="<?= $dato['CAR']?>"></td>
        </tr>
        <tr>
            <td><label>Agrupamiento</label></td>
            <td><input type="text" name="Agrupamiento" id="" required placeholder="<?= $dato['Agrupamiento']?>"></td>
        </tr>
        <tr>
            <td><label>Situacion Prevista</label></td>
            <td><input type="text" name="S" required placeholder="<?= $dato['S']?>"></td>
        </tr>
        <tr>
            <td><label>Asignatura</label></td>
            <td><input type="text" name="Asignatura" id="" placeholder="<?= $dato['Asignatura']?>"></td>
        </tr>
        <tr>
            <td><label>Horas</label></td>
            <td><input type="number" name="Hs" id="" placeholder="<?= $dato['Hs']?>"></td>
        </tr>
        <tr>
            <td><label>Curso</label></td>
            <td><input type="number" name="Curso" placeholder="<?= $dato['Curso']?>"></td>
        </tr>
        <tr>
            <td><label>Division</label></td>
            <td><input type="number" name="Division" id="" placeholder="<?= $dato['Division']?>"></td>
        </tr>
        <tr>
            <td><label>Ciclo</label></td>
            <td><input type="text" name="Ciclo" id="" placeholder="<?= $dato['Ciclo']?>"></td>
        </tr>
        <tr>
            <td><label>Turno</label></td>
            <td><input type="text" name="Turno" placeholder="<?= $dato['Turno']?>"></td>
        </tr>
        <tr>
            <td><label>Fecha de ingreso</label></td>
            <td><input type="date" name="F-Ingreso" id="" placeholder="<?= $dato['F-Ingreso']?>"></td>
        </tr>
        <tr>
            <td><label>Observacion</label></td>
            <td><input type="text" name="OBS" placeholder="<?= $dato['OBS']?>"></td>
        </tr>
        <tr>
            <td>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </td>
            <td>
                <input type="submit" value="Guardar" name="Guardar" class="btn btn-primary">
            </td>
        </tr>
    </table>                            
</form> 