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
        <div class="box-instalaciones" style="z-index: 0;position: relative;">
            <img class="full-size" src="<?php echo get_template_directory_uri();?>/images/instalaciones/salonTajin.png" alt="SALONES TAJÍN">
            <div class="flecha-izquierda centrar-fecha-izquierda"></div>
        </div>
        <div class="box-instalaciones centrar-texto" style=" background: #EC945E">
            <p>SALONES TAJÍN</p>
        </div>
        <div class="box-instalaciones" style="z-index: 0;position: relative;">
            <img class="full-size" src="<?php echo get_template_directory_uri();?>/images/instalaciones/areaComun.png" alt="ÁREAS COMUNES">
            <div class="flecha-izquierda centrar-fecha-izquierda"></div>
        </div>
        <div class="box-instalaciones centrar-texto" style=" background: #EC945E">
            <p> ÁREAS COMUNES</p>
        </div>
        <div class="box-instalaciones centrar-texto" style=" background: #FFF">
            <p><span>SALONES ULÚA Y OLMECA</span></p>
        </div>
        <div class="box-instalaciones">
            <div class="full-size img-salones" style="z-index: 0;position: relative;">
                <div class="shadow text-shadow">
                    <p>Más de 3 mil metros cuadrados de espacio comercial. Salones más íntimos.</p> 
                </div>
               <!--  <img class="full-size" src="<?php echo get_template_directory_uri();?>/images/instalaciones/salones.png" alt="SALONES ULÚA Y OLMECA"> -->
               <div class="flecha-derecha-blanca centrar-fecha-derecha"></div>
            </div>
        </div>
        <div class="box-instalaciones centrar-texto" style=" background: #EC945E">
            <p>LOCALES COMERCIALES</p>
        </div>
        <div class="box-instalaciones centrar-texto" style="z-index: 0;position: relative;">
            <img class="full-size" src="<?php echo get_template_directory_uri();?>/images/instalaciones/localesComerciales.png" alt="LOCALES COMERCIALES">
            <div class="flecha-derecha centrar-fecha-derecha"></div>
        </div>
    </div>
</div>


<?php get_template_part('eslogan-2'); ?>
<?php get_template_part('orange-line'); ?>
<?php get_footer(); ?>