
<?php
   $branding = get_option("themeoption_branding");
   $configuration_theme = get_option("themeoption_general_setting");  
?>
<footer>
    <div class="contacto-footer">
      <div class="container">
        <div class="row" style="padding: 0.9rem 0%;">
          <div class="col-3">
            <p>Tel. 229 923 0300</p>
          </div>
          <div class="col-6">
            <p>ofmercado@wtc.veracruz.gob.mx</p>
          </div>
          <div class="col-3">
            <ul class="inline-list">
              <li> <ion-icon name="logo-twitter"></ion-icon></li>
              <li> <ion-icon name="logo-facebook"></ion-icon></li>
              <li> <ion-icon name="logo-youtube"></ion-icon></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="logos-footer">
      <div class="container">
        <div class="row centerlogos">
          <div class="col-3">
            <img class="margin-left-125rem" src="<?php bloginfo('template_url'); ?>/images/logos/logo-veracruz.png" alt="logo de Veracruz">
            <img class="" src="<?php bloginfo('template_url'); ?>/images/logos/logo-segob.png" alt="logo de SEGOB">
          </div>
          <div class="col-3" style="border-left: 1px solid #B11548;">
            <img class="margin-left-125rem" src="<?php bloginfo('template_url'); ?>/images/logos/logo-unidad-trasparencia.png" alt="logo de Unidad de Transparencia">
            <img class="" src="<?php bloginfo('template_url'); ?>/images/logos/logo-orgullo-veracruz.png" alt="logo Veracruz, me llena de orgullo">
          </div>
          <div class="col-6"></div>
        </div>
      </div>
    </div>

    <div class="addrees-footer">
      <div class="container">
        <div class="row">
          <div class="col">
            <p>Boulevard Adolfo Ruiz Cortines No. 3497 Col. Ylang Ylang. Boca del Río, Veracruz. México. C.P. 94298</p>
          </div>
        </div>
      </div>
    </div>

    <div class="derechos-reservados">
      <div class="container">
        <div class="row">
          <div class="col">
          <p>Sitio desarrollado por la Dirección General de Innovación Tecnológica</p>
            <p>2023-2024  WTC Veracruz. Todos los derechos reservados.</p>
          </div>
        </div>
      </div>
    </div>

</footer>

</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '#code', 'auto');
  ga('send', 'pageview');
  
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<?php wp_footer(); ?>
</body>

</html>
