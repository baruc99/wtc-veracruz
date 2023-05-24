<?php get_header(); ?>

<div class="wrapper-instalaciones textura">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-seccion">INSTALACIONES</h3>
            </div>
        </div>
    </div>
    <div class="instalaciones">
        <div class="box-instalaciones">
            <img class="full-size" src="<?php echo get_template_directory_uri();?>/images/instalaciones/salonTajin.png" alt="SALONES TAJÍN">
        </div>
        <div class="box-instalaciones" style=" background: #EC945E"></div>
        <div class="box-instalaciones">
            <img src="<?php echo get_template_directory_uri();?>/images/instalaciones/areaComun.png" alt="ÁREAS COMUNES">
        </div>
        <div class="box-instalaciones" style=" background: #EC945E"></div>
        <div class="box-instalaciones" style=" background: #EC945E"></div>
        <div class="box-instalaciones">
            <div class="full-size img-salones">
                <div class="shadow">
                    <p>Más de 3 mil metros cuadrados de espacio comercial. Salones más íntimos.</p> 
                </div>
               <!--  <img class="full-size" src="<?php echo get_template_directory_uri();?>/images/instalaciones/salones.png" alt="SALONES ULÚA Y OLMECA"> -->
                
            </div>
        </div>
        <div class="box-instalaciones" style=" background: #EC945E"></div>
        <div class="box-instalaciones">
        <img class="full-size" src="<?php echo get_template_directory_uri();?>/images/instalaciones/localesComerciales.png" alt="LOCALES COMERCIALES">
        </div>
    </div>
</div>


<?php get_template_part('eslogan-2'); ?>
<?php get_template_part('orange-line'); ?>
<?php get_footer(); ?>