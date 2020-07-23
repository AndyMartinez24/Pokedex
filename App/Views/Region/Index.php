<header class="jumbotron my-4">
    <h1 class="display-4">Crear Nueva Region</h1>
    <a href="index.php?Controller=Region_Controller&Action=Create" class="btn btn-primary btn-lg">Crear</a>
</header>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Color</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_COOKIE["Region"])) {
            $cont = count($_COOKIE["Region"]);
            krsort($_COOKIE["Region"]);
            foreach ($_COOKIE["Region"] as $key => $tipo) {
                $data = unserialize($_COOKIE["Region"][$key]);
                echo '
                    <tr>
                        <th scope="row">' . $cont . '</th>
                        <td>' . $key . '</td>
                        <td>' . $data->Nombre . '</td>
                        <td bgcolor=" ' . $data->Color . ' "></td>
                        <td>
                            <a href="index.php?Controller=Region_Controller&Action=Update&id=' . $key . '" class="btn btn-sm btn-outline-warning">Editar</a>|
                            <a href="index.php?Controller=Region_Controller&Action=Delete&id=' . $key . '" class="btn btn-sm btn-outline-danger">Borrar</a>
                        </td>
                    </tr>';
                $cont = $cont - 1;
            }
        }
        ?>
    </tbody>
</table>