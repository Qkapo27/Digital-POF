<form action="<?php echo $URL;?>/App/Php/insertar.php" method="post" enctype="multipart/form-data">
    <table class = "table table-bordered">
        <input type="hidden" name="Id" value="Id">
        <tr>
            <td><label>DNI</label></td>
            <td><input type="number" name="DNI" id="" required ></td>
        </tr>
        <tr>
            <td><label>Nombre</label></td>
            <td><input type="text" name="Nombre" id="" required ></td>
        </tr>
        <tr>
            <td><label>Apellido</label></td>
            <td><input type="text" name="Apellido" required></td>
        </tr>
        <tr>
            <td><label>Codigo de cargo</label></td>
            <td><input type="text" name="CAR" id="" required></td>
        </tr>
        <tr>
            <td><label>Agrupamiento</label></td>
            <td><input type="text" name="Agrupamiento" id="" required></td>
        </tr>
        <tr>
            <td><label>Situacion Prevista</label></td>
            <td><input type="text" name="S" required></td>
        </tr>
        <tr>
            <td><label>Asignatura</label></td>
            <td><input type="text" name="Asignatura" id="" ></td>
        </tr>
        <tr>
            <td><label>Horas</label></td>
            <td><input type="number" name="Hs" id="" ></td>
        </tr>
        <tr>
            <td><label>Curso</label></td>
            <td><input type="number" name="Curso"></td>
        </tr>
        <tr>
            <td><label>Division</label></td>
            <td><input type="number" name="Division" id=""></td>
        </tr>
        <tr>
            <td><label>Ciclo</label></td>
            <td><input type="text" name="Ciclo" id=""></td>
        </tr>
        <tr>
            <td><label>Turno</label></td>
            <td><input type="text" name="Turno"></td>
        </tr>
        <tr>
            <td><label>Fecha de ingreso</label></td>
            <td><input type="date" name="F-Ingreso" id=""></td>
        </tr>
        <tr>
            <td><label>Observacion</label></td>
            <td><input type="text" name="OBS"></td>
        </tr>



        <!-- Button -->
            <td>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </td>
            <td>
                <input type="submit" value="Guardar" name="Guardar" class="btn btn-primary">
            </td>
        </tr>
    </table>                            
</form> 