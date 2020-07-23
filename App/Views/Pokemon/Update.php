<br>
<?php
$Tipo_1 = (isset($_COOKIE["Tipo"][$Pokemon->Tipos[0]])) ? unserialize($_COOKIE["Tipo"][$Pokemon->Tipos[0]]) : "";
$Tipo_2 = (isset($_COOKIE["Tipo"][$Pokemon->Tipos[1]])) ? unserialize($_COOKIE["Tipo"][$Pokemon->Tipos[1]]) : "";
$Region = (isset($_COOKIE["Region"][$Pokemon->Region])) ? unserialize($_COOKIE["Region"][$Pokemon->Region]) : "";
?>
<form action="index.php?Controller=Pokemon_Controller&Action=Update&id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
    <input name="id" value="<?php echo $Pokemon->id ?>" hidden>
    <div class="form-group">
        <label>Nombre</label>
        <input name="Nombre" type="text" class="form-control" value="<?php echo $Pokemon->Nombre ?>">
    </div>
    <div class="form-group">
        <label>Region</label>
        <select class="form-control" name="Region_id">
            <?php if ($Pokemon->Region != null) : ?>
                <option value="<?php echo $Pokemon->Region ?>" selected>
                    <?php echo $Region->Nombre  ?>
                </option>
            <?php endif ?>
            <?php
            foreach ($_COOKIE["Region"] as $key => $value) {
                $data = unserialize($_COOKIE["Region"][$key]);
                echo '<option value="' . $key . '" >' . $data->Nombre . '</option>';
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label>Tipo primario</label>
        <select class="form-control" name="Tipo_1">
            <option value="<?php echo  $Pokemon->Tipos[0] ?>" selected>
                <?php
                if ($Tipo_1 != "") {
                    echo $Tipo_1->Nombre;
                }
                ?>
            </option>
            <?php
            foreach ($_COOKIE["Tipo"] as $key => $value) {
                $data = unserialize($_COOKIE["Tipo"][$key]);
                echo '<option value="' . $key . '" >' . $data->Nombre . '</option>';
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label>Tipo secundario</label>
        <select class="form-control" name="Tipo_2">
            <option value="<?php echo  $Pokemon->Tipos[1] ?>" selected>
                <?php
                if ($Tipo_2 != "") {
                    echo $Tipo_2->Nombre;
                }
                ?>
            </option>
            <?php
            foreach ($_COOKIE["Tipo"] as $key => $value) {
                $data = unserialize($_COOKIE["Tipo"][$key]);
                echo '<option value="' . $key . '" >' . $data->Nombre . '</option>';
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label>Ataques</label>
        <p>"Para registrar varios ataques debes serpararlas con coma(,)"</p>
        <p>"El maximo es 4,si pasas el limite solo se guardaran los 4 primeros"</p>
        <textarea class="form-control" name="Ataques" rows="2"><?php echo $Pokemon->Ataques ?></textarea>
    </div>
    <div class="form-group">
        <label>Foto relacionada</label>
        <input name="foto" size="30" type="file" class="form-control">
    </div>
    <div class="form-group form-check">
        <input name="Status" type="checkbox" class="form-check-input" checked hidden>
    </div>
    <button type="submit" class="btn btn-outline-primary">Guardar cambios</button>|
    <a href="index.php" class="btn btn-outline-success">Regresar a inicio</a>
</form>
<br>