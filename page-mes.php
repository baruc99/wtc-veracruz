<?php
    $mes = $_GET['mes'];
    $anioActual = $_GET['a'];
    $mesNombre = obtenerNombreMes($mes);
?>

<?php get_header(); ?>

<div class="wrapper-mes textura">
    <div class="container">
        <div class="row">
            <div class="col altuta-texto-eventos texto-mes">
                <h3 class="title-seccion-mes"><?php echo($mesNombre) ?> <?php echo( $anioActual ) ?></h3>
                <p>Eventos sujetos a cambio sin previo aviso.</p>
            </div>
        </div>

        <?php
            $args = array(
                'post_type' => 'eventos-wtcv',
                'order' => 'ASC',
                'orderby' => 'meta_value',
                'meta_key' => 'dateStart',
                'posts_per_page' => -1
            );
            $cont = 0;
            $loop = new WP_Query($args);

            if ($loop->have_posts()) {
                while ($loop->have_posts()) {
                    $loop->the_post();
            
                    $dateStart = get_post_meta($post->ID, 'dateStart', true);
                    $dateEnd = get_post_meta($post->ID, 'dateEnd', true);
                    $hourStart = get_post_meta($post->ID, 'hourStart', true);
                    $hourEnd = get_post_meta($post->ID, 'hourEnd', true);
                    $tipoEvento = get_post_meta($post->ID, 'tipoEvento', true);
                    $place = get_post_meta($post->ID, 'place', true);
            
                    $mesEventoPublicado = obtenerMes($dateStart);
                    $diaStart = obtenerDia($dateStart);
                    $diaEnd = obtenerDia($dateEnd);
                    $mesStart = obtenerMes($dateStart);
                    $mesEnd = obtenerMes($dateEnd);
                    $periodo = calcularPeriodo($dateStart, $dateEnd);
                    $primerDiaMes = obtenerDiaYUltimoDia($diaStart, $mes);
                    $yeardelEventoStart = obtenerYear( $dateStart );
                    $yeardelEventoEnd = obtenerYear( $dateEnd );

                    //          dia o dias - tipo de evnto - lugar
                    // mostrarEvento($diaStart, $tipoEvento, $place);


                    // // valida que tengan datos
                    // if (!empty($dateStart) && !empty($dateEnd)){

                    //     // año de fecha inicio y final es el mismo y que sea igual al año actual
                    //     if ($yeardelEventoEnd == $yeardelEventoStart && $yeardelEventoStart == $anioActual) {

                    //         // Hay un cambio de mes entre las fechas
                    //         if (cruzaCambioMes($diaInicio, $diaFin)) {
                                
                               
                    //         } 
                    //          // No hay cambio de mes, muestra un mensaje o realiza otras acciones
                    //         else {

                    //             // Las fechas representan un periodo válido
                    //             if (esPeriodo($dateStart, $dateEnd)) {
                                    
                                   
                    //             } 
                    //             // Las fechas no representan un periodo válido, muestra un mensaje o realiza otras acciones
                    //             else {

                    //                 // Las fechas son iguales
                    //                 if (strcmp($dateStart, $dateEnd) === 0) {
                                     
                    //                 }
                    //             }
                        
                               
                    //         }
                            

                            
                    //     }
                    //     // años diferentes
                    //     else if( $yeardelEventoEnd != $yeardelEventoStart){

                    //     }

                    // }
                    // //solo tenga fecha de inicio
                    // else if(!empty($dateStart) && empty($dateEnd)){

                    // }

                    if (!empty($dateStart) && !empty($dateEnd)) {
                        if ($yeardelEventoEnd == $yeardelEventoStart && $yeardelEventoStart == $anioActual) {

                            if (cruzaCambioMes($dateStart, $dateEnd)) {
                                // Acciones cuando hay un cambio de mes entre las fechas
                            } 
                            else {
                                if (esPeriodo($dateStart, $dateEnd)) {
                                    // Acciones cuando las fechas representan un periodo válido
                                    if ($mesStart == $mes && $mesEnd == $mes) {
                                        mostrarEvento($periodo, $tipoEvento, $place);
                                    }
                                } else {
                                    if ($dateStart ==  $dateEnd) {
                                        // Acciones cuando las fechas son iguales
                                        mostrarEvento($diaStart, $tipoEvento, $place);
                                    }
                                }
                            }
                        } else if ($yeardelEventoEnd != $yeardelEventoStart) {
                            // Acciones cuando los años son diferentes
                        }
                    } else if (!empty($dateStart) && empty($dateEnd)) {
                        // Acciones cuando solo hay fecha de inicio
                        if( $yeardelEventoStart == $anioActual ){
                            // mes corresponde al mes la fecha
                            if( $mesStart == $mes ){
                                mostrarEvento($diaStart, $tipoEvento, $place);
                            }

                        }
                    }
                    

    

                }
            }
            ?>
    </div>
        <div class="altura-eventos-fin"></div>
</div>

<?php get_template_part('orange-line'); ?>
<?php get_footer(); ?>