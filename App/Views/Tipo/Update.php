<form class="text-center border border-light p-5" action="index.php?Controller=Tipo_Controller&Action=Update&id=<?php echo $_GET['id'] ?>" method="POST">

    <p class="h4 mb-4">Cambiar tipo <?php echo $Datos->Nombre ?></p>

    <input type="text" class="form-control mb-4" placeholder="Nuevo nombre" name="Nombre">

    <button class="btn btn-info btn-block" type="submit">Cambiar</button>
    <a class="btn btn-primary btn-block" href="index.php?Controller=Tipo_Controller&Action=Index">Volver</a>
</form>