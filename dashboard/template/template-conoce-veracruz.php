<?php
    $hoteles = get_post_meta($post->ID, 'hoteles', true);
    $quehacer = get_post_meta($post->ID, 'quehacer', true);
?>


<div class="form-group">
    <label for="hoteles">Hoteles cercanos A WTC</label>
    <input type="text" class="form-control" id="hoteles" name="hoteles" value="<?php echo $hoteles; ?> ">

</div>
<div class="form-group">
    <label for="quehacer">¿Qué hacer en Veracruz?</label>
    <input type="text" class="form-control" id="quehacer" name="quehacer" value="<?php echo $quehacer; ?> ">
    
</div>
 
