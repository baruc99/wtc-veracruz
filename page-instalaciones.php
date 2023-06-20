<?php get_header(); ?>

<?php
    $tajin = get_post_meta($post->ID, 'tajin', true);
    $locales = get_post_meta($post->ID, 'locales', true);
    $ulua = get_post_meta($post->ID, 'ulua', true);
    $comun = get_post_meta($post->ID, 'comun', true);
?>

<div class="wrapper-instalaciones textura">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title-seccion">INSTALACIONES</h3>
            </div>
        </div>
    </div>
    <div class="instalaciones">
        <div class="hover-instalaciones">
            <div class="box-instalaciones">
                <div class="full-size img-tajin" style="z-index: 0;position: relative;">
                    <div class="overlay hover-style-text">
                        <?php if( isset($tajin) && !empty($tajin) ){ ?>
                            <p> <?php echo $tajin ?> </p>
                        <?php } ?>
                    </div>
                    <div class="flecha-izquierda centrar-fecha-izquierda"></div>
                </div>
            </div>
            <div class="box-instalaciones centrar-texto">
                <p>SALONES TAJÍN</p>
            </div>
        </div>
        <div class="hover-instalaciones">
            <div class="box-instalaciones">
                <div class="full-size img-area" style="z-index: 0;position: relative;">
                    <div class="overlay hover-style-text">
                        <?php if( isset($comun) && !empty($comun) ){ ?>
                            <p> <?php echo $comun ?> </p>
                        <?php } ?>
                    </div>
                    <div class="flecha-izquierda centrar-fecha-izquierda"></div>
                    
                </div>
            </div>
            <div class="box-instalaciones centrar-texto">
                <p> ÁREAS COMUNES</p>
            </div>
        </div>
        <div class="hover-instalaciones">
            <div class="box-instalaciones centrar-texto">
            <p>SALONES ULÚA Y OLMECA</p>
        </div>
        <div class="box-instalaciones">
            <div class="full-size img-salones" style="z-index: 0;position: relative;">
               <div class="overlay hover-style-text">
                    <?php if( isset($ulua) && !empty($ulua) ){ ?>
                        <p> <?php echo $ulua ?> </p>
                    <?php } ?>    
               </div>
               <div class="flecha-derecha centrar-fecha-derecha"></div>
            </div>
        </div>
        </div>
        <div class="hover-instalaciones">
            <div class="box-instalaciones centrar-texto">
                <p>LOCALES COMERCIALES</p>
            </div>
            <div class="box-instalaciones">
                <div class="full-size img-locales" style="z-index: 0;position: relative;">
                    <div class="overlay hover-style-text">
                        <?php if( isset($locales) && !empty($locales) ){ ?>
                            <p> <?php echo $locales ?> </p>
                        <?php } ?>
                    </div>
                    <div class="flecha-derecha centrar-fecha-derecha"></div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_template_part('eslogan-2'); ?>
<?php get_template_part('orange-line'); ?>
<?php get_footer(); ?>