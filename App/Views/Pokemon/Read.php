<?php
if ($Pokemon->Region != null) {
    $region = unserialize($_COOKIE["Region"][$Pokemon->Region]);
}
?>
<style>
    h2 {
        color: blue;
    }
</style>
<div class="container marketing" style="background:<?php echo $region->Color ?>; color:teal">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading"><?php echo $Pokemon->Nombre ?></h2>
            <a href="index.php?Controller=Pokemon_Controller&Action=Update&id=<?php echo $_GET['id'] ?>" class="btn btn-warning btn-lg">Cambiar</a>
            <a href="index.php?Controller=Pokemon_Controller&Action=Delete&id=<?php echo $_GET['id']; ?>" class="btn btn-danger btn-lg">Eliminar</a>
            <a href="index.php" class="btn btn-success btn-lg">Regresar a inicio</a>
        </div>
        <div class="col-md-5">
            <?php
            $dir = 'img/';
            if (file_exists($dir . $Pokemon->id)) {
                echo '<img src="' . $dir . $Pokemon->id . '" width="100%" height="100%">';
            }
            ?>
        </div>
    </div>

    <hr class="featurette-divider">


    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->


    <!-- Three columns of text below the carousel -->
    <div class="row" style="">
        <div class="col-lg-4">
            <h2>Ataques</h2>
            <ul class="list-group">
                <?php
                $array = explode(",", $Pokemon->Ataques);

                foreach ($array as $key => $Ataque) {
                    if ($key < 4) {
                        echo '<li>' . $Ataque . '</li>';
                    }
                }

                ?>
            </ul>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <h2>Region</h2>
            <?php
                if ($Pokemon->Region != null) {
                    echo $region->Nombre;
                }
            ?>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <h2>Tipos</h2>
            <?php
            foreach ($Pokemon->Tipos as $key => $value) {
                if ($value != null) {
                    $tipo = unserialize($_COOKIE["Tipo"][$value]);
                    echo '<li>' . $tipo->Nombre . '</li>';
                }
            }

            ?>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <hr class="featurette-divider">

</div><!-- /.container -->