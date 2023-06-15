<?php
    $tipoEvento = get_post_meta($post->ID, 'tipoEvento', true);
    $place     = get_post_meta($post->ID, 'place', true);
    $address   = get_post_meta($post->ID, 'address', true);
?>

<!-- <h3>Descripción del evento</h3> -->

 <div class="row">
    <div class="col-md-12">
        <h3>tipo de evento</h3>
        <select id="tipoEvento" name="tipoEvento" value="<?php echo $tipoEvento; ?>">
            <option value="<?php echo $tipoEvento; ?>"><?php echo $tipoEvento; ?></option>
            <option value="Público">Público </option>
            <option value="Privado">Privado</option>
        </select>
    </div>
    <div class="col-md-12">
        <h3>Sala </h3>
        <textarea id="place" name="place" rows="1" cols="70" > <?php echo $place; ?> </textarea>

        <!-- <h3>Direccion del lugar </h3>
        <textarea id="address" name="address" rows="5" cols="100" > <?php// echo $address; ?> </textarea> -->
    </div>
 </div>

 