<?php get_header(); ?>

<?php
    $mes = $_GET['mes'];
    $mesNombre = obtenerNombreMes($mes);
    $anioActual = date("Y");
?>

<div class="wrapper-mes textura">
    <div class="container">
        <div class="row">
            <div class="col altuta-texto-eventos texto-mes">
                <h3 class="title-seccion-mes"><?php echo($mesNombre) ?> <?php echo( $anioActual ) ?></h3>
                <p>Eventos sujetos a cambio sin previo aviso.</p>
            </div>
        </div>

        <!--  -->
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
                            $yeardelEvento = obtenerYear( $dateStart );

                            // Obtener el año de dateStart y agregarlo al array
                            $yearStart = date('Y', strtotime($dateStart));
                            $years[] = $yearStart;

                            // Obtener el año de dateEnd y agregarlo al array si es diferente de dateStart
                            $yearEnd = date('Y', strtotime($dateEnd));
                            if ($yearEnd !== $yearStart) {
                                $years[] = $yearEnd;
                            }
                            
                            $uniqueYears = array_unique($years);

                            foreach ($uniqueYears as $year) {
                               if( ($anioActual == $yeardelEvento) && $year == $anioActual ){
                                   if (!empty($dateStart) && empty($dateEnd)) {
                                       if ($mesEventoPublicado == $mes) {
                                           mostrarEvento($diaStart, $tipoEvento, $place);
                                       }
                                   } else {
                                       if ($mesEventoPublicado == $mes && $mesStart == $mesEnd) {
                                           if ($diaEnd == $diaStart) {
                                               mostrarEvento($diaStart, $tipoEvento, $place);
                                           } else {
                                               mostrarEvento($periodo, $tipoEvento, $place);
                                           }
                                       } else if (cruzaCambioMes($dateStart, $dateEnd)) {
                                           if ($mesStart == $mes) {
                                               mostrarEvento($primerDiaMes, $tipoEvento, $place);
                                           } else if ($mesEnd == $mes) {
                                               mostrarEvento("01 - " . $diaEnd, $tipoEvento, $place);
                                           }
                                       }
                                   }
                               }
                               
                            }

                        }
                    }
            ?>

            <h1><?php// print_r($uniqueYears); ?></h1>

        <!--  -->
    

        <!-- <div class="row mb-5">
            <div class="col-md-2 align-Center">
                <div class="imgMes">
                    <img src="<?php echo get_template_directory_uri();?>/images/mes/calendario.png" alt="centro de trabajo">
                </div>
            </div>
            <div class="col-md-4 align-Center">
                <div class="card-dias-mes align-Center">22</div>
            </div>
            <div class="col-md-6 align-start">
                <div class="text-mes">
                    <h3>CONCIERTO MANUEL JOSÉ</h3>
                    <p>Público - Salones ULÚA 3 Y 4</p>
                </div>
            </div>
        </div> -->
    </div>
        <div class="altura-eventos-fin"></div>
</div>

<?php get_template_part('orange-line'); ?>
<?php get_footer(); ?>