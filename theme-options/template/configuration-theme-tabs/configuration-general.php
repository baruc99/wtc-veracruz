<?php
	$configuration_theme = get_option("themeoption_configuration_general");
?>
<div class="title-section">
	<h3><i class="fas fa-user-cog"></i>  Configuración General</h3>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="code-google-analytics" class="control-label">ID de seguimiento Google Analytics</label>
            <span class="description-title">
                Pega aquí el ID de seguimiento de tu cuenta de Google Analytics
                ejemplo: "UA-XXXXXXXX-1"
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="code-google-analytics" name="code-google-analytics" value="<?php echo $configuration_theme["code-google-analytics"]; ?>">
        </div>
    </div>
</div>

<div class="title-section">
    <h3>Correo Electrónico</h3>
</div>
<div class="form-group">
    <div class="row mb-3">
        <div class="col-lg-4 label-option">
            <span class="description-title">
                Escribe el e-mail en donde llegarán
                los mensajes de tu página del sitio.
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="e-mail" name="e-mail" value="<?php echo $configuration_theme["e-mail"]; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-4 label-option">
            <span class="description-title">
                Escribe el e-mail que manda
                información sobre el formulario
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="e-mail-formulario" name="e-mail-formulario" value="<?php echo $configuration_theme["e-mail-formulario"]; ?>">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-4 label-option">
            <span class="description-title">
                Escribe el e-mail que manda
                información sobre nuestros Congresos y Convenciones
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="e-mail-congresos" name="e-mail-congresos" value="<?php echo $configuration_theme["e-mail-congresos"]; ?>">
        </div>
    </div>
</div>

<div class="title-section">
    <h3>Telefono</h3>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="phone" class="control-label">Telefono</label>
            <span class="description-title">
                Escribe el telefono en donde se reciben
                las llamadas de contacto.
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="phone" name="phone" value="<?php echo $configuration_theme["phone"]; ?>">
        </div>
    </div>
</div>
