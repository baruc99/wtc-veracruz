<footer>
  <?php
    $branding = get_option("themeoption_branding");
    $configuration_theme = get_option("themeoption_configuration_general");
  ?>

  
    <div class="logos-footer">
      <div class="container">
        <div class="row">
          <div class="col alignLogosFooter">
            <img src="<?php echo get_template_directory_uri();?>/images/logos/logos-gev.png" alt="logos de veracruz">
            <img src="<?php echo get_template_directory_uri();?>/images/logos/wtc-logo-vino.png" alt="logos del world trade center veracruz">
          </div>
        </div>
      </div>
    </div>

    <div class="addrees-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8 col">
            <p>Boulevard Adolfo Ruiz Cortines No. 3497 Col. Ylang Ylang. Boca del Río, Veracruz. México. C.P. 94298</p>
          </div>
          <div class="col-md-2  alignLogos">
            <?php if(isset($branding['twitter-url']) && !empty($branding['twitter-url'])){ ?>
              <a href="<?php echo $branding['twitter-url']; ?>" target="_blank">
                <img class="logo-header" src="<?php echo get_template_directory_uri();?>/images/social-red/twitter-naranja.png" alt="logo twiter">
              </a>
            <?php } ?>
            <?php if(isset($branding['facebook-url']) && !empty($branding['facebook-url'])){ ?>
              <a href="<?php echo $branding['facebook-url']; ?>" target="_blank">
                <img class="logo-header" src="<?php echo get_template_directory_uri();?>/images/social-red/facebook-naranja.png" alt="logo facebook">
              </a>
            <?php }?>
            <?php if(isset($branding['instagram-url']) && !empty($branding['instagram-url'])){ ?>
              <a href="<?php echo $branding['instagram-url']; ?>" target="_blank">
                <img class="logo-header" src="<?php echo get_template_directory_uri();?>/images/social-red/instagram-naranja.png" alt="logo instagram">                  
              </a>
            <?php }?> 
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

<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $configuration_theme["code-google-analytics"]; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $configuration_theme["code-google-analytics"]; ?>');
</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<?php wp_footer(); ?>
</body>

</html>
