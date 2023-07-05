<?php
    $tipoEvento = get_post_meta($post->ID, 'tipoEvento', true);
    $place     = get_post_meta($post->ID, 'place', true);
    $address   = get_post_meta($post->ID, 'address', true);
?>

<!-- <h3>Descripción del evento</h3> -->

 <div class="row p-3">
    <div class="col-md-4">
        <label>tipo de evento</label>
    </div>
    <div class="col-md-8">
        <select id="tipoEvento" name="tipoEvento" value="<?php echo $tipoEvento; ?>">
            <option value="<?php echo $tipoEvento; ?>"><?php echo $tipoEvento; ?></option>
            <option value="Público">Público </option>
            <option value="Privado">Privado</option>
        </select>
    </div>
</div>      
<div class="row p-3">  
    <div class="col-md-4">
        <label>Sala</label>
    </div>
    <div class="col-md-8">
        <!-- <textarea id="place" name="place" rows="1" cols="70" class="form-control" > <?php// echo $place; ?> </textarea> -->
        <input type="text" class="form-control" id="place" name="place" value="<?php echo $place; ?>">

        <!-- <h3>Direccion del lugar </h3>
        <textarea id="address" name="address" rows="5" cols="100" > <?php// echo $address; ?> </textarea> -->
    </div>
 </div>

 <div class="row p-3 form-group">
    <!-- <div class="col-md-4">
        <label>Días del evento</label>
    </div>
    <div class="col-md-4 mb-2">
        <label for="meeting-time">Inicio:</label>
        <input type="date" id="dateStart" name="dateStart" value="<?php echo $dateStart; ?>" >

    </div>
    <div class="col-md-4">
        <label for="meeting-time">Fin:</label>
        <input type="date" id="dateEnd" name="dateEnd" value="<?php echo $dateEnd; ?>" >
    </div>
</div>
  -->