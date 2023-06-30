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

                    if (isset($dateStart) && !empty($dateStart) && isset($dateEnd) && !empty($dateEnd)) {
                        // el dia de inicio es el mismo que el dia del final

                        if($yeardelEventoStart == $anioActual && $yeardelEventoEnd == $anioActual){
                            if($diaStart == $diaEnd){
                                mostrarEvento($diaStart, $tipoEvento, $place);
                            }
                            else if( $diaStart != $diaEnd && $mesStart == $mesEnd){
                                mostrarEvento($primerDiaMes, $tipoEvento, $place);
                            }
                        }


                    } else if (isset($dateStart) && !empty($dateStart) && (!isset($dateEnd) || empty($dateEnd))) {
                        // solo esta lleno la fecha de inicio
                        if($yeardelEventoStart == $anioActual && $yeardelEventoEnd == $anioActual){
                            mostrarEvento($diaStart, $tipoEvento, $place);
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