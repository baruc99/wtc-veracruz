<?php
    $dateStart = get_post_meta($post->ID, 'dateStart', true);
    $dateEnd   = get_post_meta($post->ID, 'dateEnd', true);
    $hourStart = get_post_meta($post->ID, 'hourStart', true);
    $hourEnd   = get_post_meta($post->ID, 'hourEnd', true);
    
?>


<div class="row p-3 form-group">
    <div class="col-md-4">
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

<!-- <div class="row p-3 form-group">
    <div class="col-md-4">
        <label>Hora del evento</label>
    </div>
    <div class="col-md-4 mb-2">
        <label >Inicio:</label>
        <input type="time" id="hourStart" name="hourStart" step="3600" value="<?php echo $$hourStart; ?>" >

    </div>
</div> -->

<div class="row p-3 form-group">
    <div class="col-md-4">
        <label>Hora del evento</label>
    </div>
    <div class="col-md-4">
        <label for="meeting-time">Empieza: </label>
        <input type="time" id="hourStart" name="hourStart" min="0" max="24" value="<?php echo $hourStart; ?>"  >

    </div>
    <!-- <div class="col-md-6">
        
        <label for="meeting-time">Hora de cerrar ( formato de 24 horas ):</label>

        <input type="time" id="hourEnd" name="hourEnd" min="0" max="24" value="<?php echo $hourEnd; ?>" >

    </div>  -->
</div>