<?php
    $general_settings = get_option("themeoption_configuration_general");
    $newPhone =  inputTelephoneFormat($general_settings['phone']);
  ?>

<div class="wrapper-orange-line">
    <div class="container">
        <div class="row">
            <div class="col alignInfoLine">
                <?php if(isset($general_settings['phone']) && !empty($general_settings['phone'])){ ?>
                    <a href="href=tel:<?php echo $newPhone ?>">
                        Tel.<?php echo $general_settings['phone']?>
                    </a>
                <?php }?>
                <?php if(isset($general_settings['e-mail']) && !empty($general_settings['e-mail'])){ ?>    
                    <p><?php echo $general_settings['e-mail']?></p>
                <?php }?>
            </div>
        </div>
    </div>
</div>