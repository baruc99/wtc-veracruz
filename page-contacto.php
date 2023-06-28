<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3 class="title-seccion">CONTÁCTENOS</h3>
        </div>
    </div>
</div>
<div id="contacto" class="contet mx-auto pt-5 pb-5">
    <div  class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-7">
                <div class="wp-block-button section-button">
                
                    <!-- <a class="wp-block-button__link">Si tienes alguna duda, sugerencia, o deseas recibir información sobre nuestros congresos y convenciones, envíanos un correo electrónico a la siguiente dirección: grenteral@veracruz.gob.mx</a> -->
                    <!-- <p class="">Si tienes alguna duda, sugerencia, o deseas recibir información sobre nuestros congresos y convenciones, envíanos un correo electrónico a la siguiente dirección: 
                        <a href="mailto:grenteral@veracruz.gob.mx">grenteral@veracruz.gob.mx</a>
                    </p> -->
                </div>
                <form id="form-contacto">
                    <input type="hidden" name="config[template_name]" value="template_form_dinamic">
                    <input type="hidden" name="config[subject]" value="Ha recibido un mensaje nuevo de ...">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="Asunto">Asunto</label>
                        <input type="text" class="form-control" name="asunto" required>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="form-control" name="mensaje" required></textarea>
                    </div>
                    <button type="submit" class="mt-4 btn-green">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>