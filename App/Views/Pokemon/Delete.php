<header class="jumbotron my-4">
    <h1 class="display-3">Estas seguro de continuar?</h1>
    <form action="index.php?Controller=Pokemon_Controller&Action=Delete&id=<?php echo $_GET['id'] ?>" method="POST">
        <input type="text" value='<?php echo $_GET['id'] ?>' name="id" hidden>
        <a href="index.php?Controller=Pokemon_Controller&Action=Index"  class="btn btn-success btn-lg">Regresar a inicio</a>|
        <button type="submit"  class="btn btn-danger btn-lg">Eliminar</button>
    </form>
</header>