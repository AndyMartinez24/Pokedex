<header class="jumbotron my-4">
    <h1 class="display-4">Crear Nuevo Tipo</h1>
    <a href="index.php?Controller=Tipo_Controller&Action=Create" class="btn btn-primary btn-lg">Crear</a>
</header>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_COOKIE["Tipo"])) {
            $cont = count($_COOKIE["Tipo"]);
            krsort($_COOKIE["Tipo"]);
            foreach ($_COOKIE["Tipo"] as $key => $tipo) {
                $data = unserialize($_COOKIE["Tipo"][$key]);
                echo '
                    <tr>
                        <th scope="row">' . $cont . '</th>
                        <td>' . $key . '</td>
                        <td>' . $data->Nombre . '</td>
                        <td>
                            <a href="index.php?Controller=Tipo_Controller&Action=Update&id=' . $key . '" class="btn btn-sm btn-outline-warning">Editar</a>|
                            <a href="index.php?Controller=Tipo_Controller&Action=Delete&id=' . $key . '" class="btn btn-sm btn-outline-danger">Borrar</a>
                        </td>
                    </tr>';
                $cont=$cont - 1;
            }
        }
        ?>
    </tbody>
</table>