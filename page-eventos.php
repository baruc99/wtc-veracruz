<?php get_header(); ?>

<?php
    $anioActual = date("Y");
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

                <?php echo $anioActual ?>

                <img class="btnFlechas pl-3" src="<?php echo get_template_directory_uri();?>/images/adelante.png" alt="botón adelante">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-6 agenda-evento p-3">            
                <div class="card-eventos align-Center-column">
                    Enero
                    <a href="<?php echo( home_url() ) ?>/mes?mes=1"><span class="hover-text">Ver eventos</span></a>
                </div>
            </div>
            <div class="col-md-4 col-6 agenda-evento p-3">
                <div class="card-eventos align-Center-column">
                    Febrero
                    <a href="<?php echo( home_url() ) ?>/mes?mes=2"><span class="hover-text">Ver eventos</span></a>
                </div>
            </div>
            <div class="col-md-4 col-6 agenda-evento p-3">
                <div class="card-eventos align-Center-column">
                    Marzo
                    <a href="<?php echo( home_url() ) ?>/mes?mes=3"><span class="hover-text">Ver eventos</span></a>
                </div>
            </div>
            <div class="col-md-4 col-6 agenda-evento p-3">
                <div class="card-eventos align-Center-column">
                    Abril
                    <a href="<?php echo( home_url() ) ?>/mes?mes=4"><span class="hover-text">Ver eventos</span></a>
                </div>
            </div>
            <div class="col-md-4 col-6 agenda-evento p-3">
                <div class="card-eventos align-Center-column">
                    Mayo
                    <a href="<?php echo( home_url() ) ?>/mes?mes=5"><span class="hover-text">Ver eventos</span></a>
                </div>
            </div>
            <div class="col-md-4 col-6 agenda-evento p-3">
                <div class="card-eventos align-Center-column">
                    Junio
                    <a href="<?php echo( home_url() ) ?>/mes?mes=6"><span class="hover-text">Ver eventos</span></a>
                </div>
            </div>
            <div class="col-md-4 col-6 agenda-evento p-3">
                <div class="card-eventos align-Center-column">
                    Julio
                    <a href="<?php echo( home_url() ) ?>/mes?mes=7"><span class="hover-text">Ver eventos</span></a>
                </div>
            </div>
            <div class="col-md-4 col-6 agenda-evento p-3">
                <div class="card-eventos align-Center-column">
                    Agosto
                    <a href="<?php echo( home_url() ) ?>/mes?mes=8"><span class="hover-text">Ver eventos</span></a>
                </div>
            </div>
            <div class="col-md-4 col-6 agenda-evento p-3">
                <div class="card-eventos align-Center-column">
                    Septiembre
                    <a href="<?php echo( home_url() ) ?>/mes?mes=9"><span class="hover-text">Ver eventos</span></a>
                </div>
            </div>
            <div class="col-md-4 col-6 agenda-evento p-3">
                <div class="card-eventos align-Center-column">
                    Octubre
                    <a href="<?php echo( home_url() ) ?>/mes?mes=10"><span class="hover-text">Ver eventos</span></a>
                </div>
            </div>
            <div class="col-md-4 col-6 agenda-evento p-3">
                <div class="card-eventos align-Center-column">
                    Noviembre
                    <a href="<?php echo( home_url() ) ?>/mes?mes=11"><span class="hover-text">Ver eventos</span></a>
                </div>
            </div>
            <div class="col-md-4 col-6 agenda-evento p-3">
                <div class="card-eventos align-Center-column">
                    Diciembre
                    <a href="<?php echo( home_url() ) ?>/mes?mes=12"><span class="hover-text">Ver eventos</span></a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>