<hr class="featurette-divider">
<form class="needs-validation" novalidate="" action="index.php?Controller=Pokemon_Controller&Action=Create" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="firstName">Nombre</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="<?php 
                if (isset($_POST['Nombre'])) {
                    echo $_POST['Nombre'];
                }        
                ?>" required="" name="Nombre">
        </div>
        <div class="col-md-6 mb-3">
            <label for="country">Region</label>
            <select class="custom-select d-block w-100" id="country" required="" name="Region_id">
                <option value="">Elige...</option>
                <?php
                foreach ($_COOKIE["Region"] as $key => $value) {
                    $data = unserialize($_COOKIE["Region"][$key]);
                    echo '<option value="' . $key . '" >' . $data->Nombre . '</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div class="mb-3">
        <label for="address">Ataques</label>
        <p>"Para registrar varios ataques debes serpararlas con coma(,)"</p>
        <p>"El maximo es 4,si pasas el limite solo se guardaran los 4 primeros ataques"</p>
        <textarea class="form-control" name="Ataques" rows="2"><?php
                      if (isset($_POST['Ataques'])) {
                        echo $_POST['Ataques'];
                    } 
        ?></textarea>
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="country">Tipo primario</label>
            <select class="custom-select d-block w-100" id="country" required="" name="Tipo_1">
                <option value="">Elige...</option>
                <?php
                foreach ($_COOKIE["Tipo"] as $key => $value) {
                    $data = unserialize($_COOKIE["Tipo"][$key]);
                    echo '<option value="' . $key . '" >' . $data->Nombre . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="state">Tipo secundario</label>
            <select class="custom-select d-block w-100" id="state" required="" name="Tipo_2">
                <option value="">Elige...</option>
                <?php
                foreach ($_COOKIE["Tipo"] as $key => $value) {
                    $data = unserialize($_COOKIE["Tipo"][$key]);
                    echo '<option value="' . $key . '" >' . $data->Nombre . '</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label>Foto relacionada</label>
        <input name="foto" size="30" type="file" class="form-control">
    </div>
    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Registrar</button>
</form>
<hr class="featurette-divider">