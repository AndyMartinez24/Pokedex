<header class="jumbotron my-4">
    <h1 class="display-3">Bienvenido a mi Pokedex</h1>
    <a href="index.php?Controller=Pokemon_Controller&Action=Index" class="btn btn-primary btn-lg">Thumbnails</a>
    <a href="index.php?Controller=Pokemon_Controller&Action=Index&View=Table" class="btn btn-primary btn-lg">Table</a>
</header>

<?php if (isset($_GET['View']) && $_GET['View'] == "Table"): ?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Region</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($_COOKIE["Pokemon"])) {
            $cont = count($_COOKIE["Pokemon"]);
            krsort($_COOKIE["Pokemon"]);
            foreach ($_COOKIE["Pokemon"] as $key => $tipo) {
                $data = unserialize($_COOKIE["Pokemon"][$key]);

                $data = unserialize($_COOKIE["Pokemon"][$key]);
                echo '
                    <tr>
                        <th scope="row">' . $cont . '</th>
                        ';
                if ($data->Region != null) {
                    $region = unserialize($_COOKIE["Region"][$data->Region]);
                    echo '<td bgcolor=" ' . $region->Color . ' ">' . $region->Nombre;
                }

                echo '</td>
                        <td>' . $data->Nombre . '</td>
                        <td>
                            <a href="index.php?Controller=Pokemon_Controller&Action=Read&id=' . $key . '" class="btn btn-sm btn-outline-primary">Read</a>|
                            <a href="index.php?Controller=Pokemon_Controller&Action=Update&id=' . $key . '" class="btn btn-sm btn-outline-warning">Update</a>|
                            <a href="index.php?Controller=Pokemon_Controller&Action=Delete&id=' . $key . '" class="btn btn-sm btn-outline-danger">Delete</a>
                        </td>
                    </tr>';
                $cont = $cont - 1;
            }
        }
        ?>
    </tbody>
</table>

    <?php else: ?>
    <div class="row text-center">
    <?php if (isset($_COOKIE["Pokemon"])) : ?>
        <?php krsort($_COOKIE["Pokemon"]) ?>
        <?php foreach ($_COOKIE["Pokemon"] as $key => $tipo) : ?>
            <?php
                    $data = unserialize($_COOKIE["Pokemon"][$key]);
                    if ($data->Region != null) {
                        $region = unserialize($_COOKIE["Region"][$data->Region]);
                    }
                    ?>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100" style="background:<?php echo $region->Color ?>; color:teal">
                    <?php
                            $dir = 'img/';
                            if (file_exists($dir . $data->id)) {
                                echo '<img class="card-img-top" src="' . $dir . $data->id . '">';
                            }
                            ?>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $data->Nombre ?></h4>
                        <?php
                                if ($data->Region != null) {
                                    echo '<p class="card-text">' . $region->Nombre . '</p>';
                                }
                                ?>
                    </div>
                    <div class="card-footer">
                        <a href="index.php?Controller=Pokemon_Controller&Action=Read&id=<?php echo $key ?>" class="btn btn-primary">Ver mas</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    <?php endif ?>
</div>
<?php endif ?>