<?php
    $dateStart = get_post_meta($post->ID, 'dateStart', true);
    $dateEnd   = get_post_meta($post->ID, 'dateEnd', true);
    $hourStart = get_post_meta($post->ID, 'hourStart', true);
    $hourEnd   = get_post_meta($post->ID, 'hourEnd', true);
    
?>

<h3>Dias del evento</h3>
<div class="row p-3" >
    <div class="col-md-6 mb-2">
        <label for="meeting-time">Inicio:</label>
        <input type="date" id="dateStart" name="dateStart" value="<?php echo $dateStart; ?>" >

    </div>
    <div class="col-md-6">
        <label for="meeting-time">Fin:</label>
        <input type="date" id="dateEnd" name="dateEnd" value="<?php echo $dateEnd; ?>" >
    </div>
</div>


<!-- <h3>Horario de atención</h3>
<div class="row p-3">
    <div class="col-md-6">
        <label for="meeting-time">Hora de abrir ( formato de 24 horas ):</label>
        <input type="number" id="hourStart" name="hourStart" min="0" max="24" value="<?php echo $hourStart; ?>"  >

    </div>
    <div class="col-md-6">
        
        <label for="meeting-time">Hora de cerrar ( formato de 24 horas ):</label>

        <input type="number" id="hourEnd" name="hourEnd" min="0" max="24" value="<?php echo $hourEnd; ?>" >

    </div> 
</div> -->