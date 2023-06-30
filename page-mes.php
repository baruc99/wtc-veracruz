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

                    // if (isset($dateStart) && !empty($dateStart) && isset($dateEnd) && !empty($dateEnd)) {
                    //     // el dia de inicio es el mismo que el dia del final

                    //     if($yeardelEventoStart == $anioActual && $yeardelEventoEnd == $anioActual){

                    //         // mismo dia el dia de inicio y fin 
                    //         if($diaStart == $diaEnd && $mesStart == $mes && $mesEnd ==$mes){
                    //             mostrarEvento($diaStart, $tipoEvento, $place);
                    //         }
                    //         // dias diferentes y mismo mes (periodo)
                    //         else if( $diaStart != $diaEnd && $mesStart == $mes && $mesEnd == $mes  ){
                    //             mostrarEvento($periodo, $tipoEvento, $place);
                    //         }
                    //         // dias y mes diferentes
                    //         else if( cruzaCambioMes($dateStart, $dateEnd) ){
                    //             if (!empty($dateStart) && empty($dateEnd)) {
                    //                 if ($mesEventoPublicado == $mes) {
                    //                     mostrarEvento($diaStart, $tipoEvento, $place);
                    //                 }
                    //             } else {
                    //                 if ($mesEventoPublicado == $mes && $mesStart == $mesEnd) {
                    //                     if ($diaEnd == $diaStart) {
                    //                         mostrarEvento($diaStart, $tipoEvento, $place);
                    //                     } else {
                    //                         mostrarEvento($periodo, $tipoEvento, $place);
                    //                     }
                    //                 } else if (cruzaCambioMes($dateStart, $dateEnd)) {
                    //                     if ($mesStart == $mes) {
                    //                         if( $mesStart != "12" ){
                    //                         mostrarEvento($primerDiaMes, $tipoEvento, $place);
                    //                         }
                    //                     } else if ($mesEnd == $mes) {
                    //                         mostrarEvento("01 - " . $diaEnd, $tipoEvento, $place);
                    //                     }
                    //                 }
                    //             }

            
                    //         }
                    //     }
                    //     else if( $yeardelEventoStart == $anioActual && $yeardelEventoEnd >= $anioActual ){
                    //         if ($mesEnd == $mes) {
                    //             mostrarEvento("01 - " . $diaEnd, $tipoEvento, $place);
                    //         }
                    //     }    


                    // } else if (isset($dateStart) && !empty($dateStart) && (!isset($dateEnd) || empty($dateEnd))) {
                    //     // solo esta lleno la fecha de inicio
                    //     if($yeardelEventoStart == $anioActual){
                            
                    //         if($mes == $mesStart){
                    //             mostrarEvento($diaStart, $tipoEvento, $place);
                    //         }

                    //     }
                    // }
                    if ($yeardelEventoStart == $anioActual || $yeardelEventoEnd == $anioActual) {
                        // Verificar si el evento ocurre en el mes actual
                        if ($mesStart == $mes || $mesEnd == $mes) {
                            // Mismo año y mismo mes
                            if ($yeardelEventoStart == $anioActual && $yeardelEventoEnd == $anioActual && $mesStart == $mes && $mesEnd == $mes) {
                                // Mismo día de inicio y fin
                                if ($diaStart == $diaEnd) {
                                    mostrarEvento($diaStart, $tipoEvento, $place);
                                }
                                // Días diferentes y mismo mes (período)
                                else if ($diaStart != $diaEnd) {
                                    mostrarEvento($periodo, $tipoEvento, $place);
                                }
                            }
                            // Cruza cambio de mes y año
                            else if (cruzaCambioMes($dateStart, $dateEnd) && ($yeardelEventoStart == $anioActual || $yeardelEventoEnd == $anioActual)) {
                                // Inicio del período al final del mes y año anterior
                                if ($yeardelEventoStart < $anioActual && $mesStart == $mes) {
                                    mostrarEvento($primerDiaMes, $tipoEvento, $place);
                                }
                                // Fin del período al principio del mes y año siguiente
                                else if ($yeardelEventoEnd > $anioActual && $mesEnd == $mes) {
                                    mostrarEvento("01 - " . $diaEnd, $tipoEvento, $place);
                                }
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