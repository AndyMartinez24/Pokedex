<form class="text-center border border-light p-5" action="index.php?Controller=Region_Controller&Action=Update&id=<?php echo $_GET['id'] ?>" method="POST">

    <p class="h4 mb-4">Cambiar Region <?php echo $Datos->Nombre ?></p>

    <input type="text" class="form-control mb-4" placeholder="Nuevo nombre" name="Nombre">

    <label>Color de la region</label>
    <select class="form-control" name="Color">
        <?php
        foreach ($_SESSION["Colors"] as $key => $value) {
            echo '
            <option value=' . $value . '>' . $key . '</option>        
       ';
        }
        ?>
    </select>

    <br>

    <button class="btn btn-info btn-block" type="submit">Cambiar</button>
    <a class="btn btn-primary btn-block" href="index.php?Controller=Tipo_Controller&Action=Index">Volver</a>
</form>