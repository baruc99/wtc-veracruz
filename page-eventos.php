<?php 
    get_header(); 
?>
<section class="wrapper-eventos">
    <div class="img-banner-eventos"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 altuta-texto-eventos texto-eventos">
                <h3 class="title-seccion-eventos">CARTELERA</h3>
                <p>World Trade Center Veracruz está lleno de eventos, abiertos al público o para un segmento especíﬁco.<br></p>
                <p><span>¡NUESTRA CARTELERA TIENE ALGO PARA TI!</span></p>
            </div>
            <div class="col-md-12 yearEvent">
                <img class="btnFlechas pr-3" src="<?php echo get_template_directory_uri();?>/images/atras.png" alt="botón atrás">
                <span id="currentYear"></span>
                <img class="btnFlechas pl-3" src="<?php echo get_template_directory_uri();?>/images/adelante.png" alt="botón adelante">
            </div>
        </div>
        <div class="row">
        <?php
            $current_month = date('n');
            $current_year = isset($_GET['year']) ? $_GET['year'] : date('Y');
            $month_labels = array(
                1 => 'Enero',
                2 => 'Febrero',
                3 => 'Marzo',
                4 => 'Abril',
                5 => 'Mayo',
                6 => 'Junio',
                7 => 'Julio',
                8 => 'Agosto',
                9 => 'Septiembre',
                10 => 'Octubre',
                11 => 'Noviembre',
                12 => 'Diciembre'
            );

            for ($month = 1; $month <= 12; $month++) {
                $current_url = home_url($_SERVER['REQUEST_URI']);
                $month_url = add_query_arg(array('mes' => $month, 'year' => $current_year), home_url('/mes/'));
                $class = ($current_month == $month) ? 'current-month' : '';
                ?>
                <div class="col-md-4 col-6 agenda-evento p-3">
                    <div class="card-eventos align-Center-column <?php echo $class; ?>">
                        <?php echo $month_labels[$month]; ?>
                        <a href="<?php echo esc_url($month_url); ?>"><span class="hover-text">Ver eventos</span></a>
                    </div>
                </div>
                <?php
            }
        ?>
        </div>
    </div>
</section>




<?php get_footer(); ?>