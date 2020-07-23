<form class="text-center border border-light p-5" action="index.php?Controller=Region_Controller&Action=Create" method="POST">

    <p class="h4 mb-4">Crear una nueva region</p>

    <input type="text" class="form-control mb-4" placeholder="Nombre" name="Nombre">
    <label>Color de la region</label>
    <select class="form-control" name="Color">
        <?php
        foreach ($Colores as $key => $value) {
            echo '
            <option value=' . $value . '>' . $key . '</option>        
       ';
        }
        ?>
    </select>
    <br>
    <button class="btn btn-info btn-block" type="submit">Registar</button>
    <a class="btn btn-primary btn-block" href="index.php?Controller=Region_Controller&Action=Index">Volver</a>
</form>