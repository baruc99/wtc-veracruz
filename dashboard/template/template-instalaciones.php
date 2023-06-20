<?php
    $tajin = get_post_meta($post->ID, 'tajin', true);
    $locales = get_post_meta($post->ID, 'locales', true);
    $ulua = get_post_meta($post->ID, 'ulua', true);
    $comun = get_post_meta($post->ID, 'comun', true);
?>
<div class="title-section mb-3">
    <h3>Texto hover</h3>    
</div>

<div class="form-group">
    <label for="tajin">SALONES TAJÍN</label>
    <input type="text" class="form-control" id="tajin" name="tajin" value="<?php echo $tajin; ?>">

</div>
<div class="form-group">
    <label for="comun">ÁREAS COMUNES</label>
    <input type="text" class="form-control" id="comun" name="comun" value="<?php echo $comun; ?>">
    
</div>
<div class="form-group">
    <label for="ulua">SALONES ULÚA Y OLMECA</label>
    <input type="text" class="form-control" id="ulua" name="ulua" value="<?php echo $ulua; ?>">
    
</div>
<div class="form-group">
    <label for="locales">LOCALES COMERCIALES</label>
    <input type="text" class="form-control" id="locales" name="locales" value="<?php echo $locales; ?>">
    
</div>
 
