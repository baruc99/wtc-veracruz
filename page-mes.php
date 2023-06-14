<?php get_header(); ?>

<?php
    $mes = $_GET['mes'];
    $mesNombre = obtenerNombreMes($mes);
?>

<div class="wrapper-mes textura">
    <div class="container">
        <div class="row">
            <div class="col altuta-texto-eventos texto-mes">
                <h3 class="title-seccion-mes"><?php echo($mesNombre) ?> 2023</h3>
                <p>Eventos sujetos a cambio sin previo aviso.</p>
            </div>
        </div>
    
        <div class="row mb-5">
            <div class="col-md-2 align-Center">
                <div class="imgMes">
                    <img src="<?php echo get_template_directory_uri();?>/images/mes/calendario.png" alt="centro de trabajo">
                </div>
            </div>
            <div class="col-md-4 align-Center">
                <div class="card-dias-mes align-Center">21-24</div>
            </div>
            <div class="col-md-6 align-start">
                <div class="text-mes">
                    <h3>EXPO TLAQUEPARTE</h3>
                    <p>Público - Salones Tajín 1 y 2</p>
                </div>
            </div>
        </div>
        <div class="row mb-5">
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
        </div>
    </div>
        <div class="altura-eventos-fin"></div>
</div>

<?php get_template_part('orange-line'); ?>
<?php get_footer(); ?>