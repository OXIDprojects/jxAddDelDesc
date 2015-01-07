<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'jxAddDelDesc',
    'title'        => 'jxAddDelDesc - Add Description to Delivery Sets',
    'description'  => array(
                        'de' => 'Erweiterung der Versandarten um ein Beschreibungsfeld.',
                        'en' => 'Extension of Shipping Methods by a Description field.'
                        ),
    'thumbnail'    => 'jxadddeldesc.png',
    'version'      => '0.1',
    'author'       => 'Joachim Barthel',
    'url'          => 'https://github.com/job963/jxAddDelDesc',
    'email'        => 'jobarthel@gmail.com',
    'extend'       => array(
                        ),
    'files'        => array(
        'jxadddeldesc_install'   => 'jxmods/jxadddeldesc/application/controllers/admin/jxadddeldesc_install.php',
                        ),
    'templates'    => array(
                        ),
    'blocks'       => array(
                        array(
                            'template' => 'deliveryset_main.tpl', 
                            'block'    => 'admin_deliveryset_main_form',                     
                            'file'     => '/out/blocks/admin_deliveryset_main_form.tpl'
                          ),
                        array(
                            'template' => 'page/checkout/payment.tpl', 
                            'block'    => 'act_shipping',                     
                            'file'     => '/out/blocks/act_shipping.tpl'
                          )
                        ),
    'events'       => array(
        'onActivate'   => 'jxadddeldesc_install::onActivate', 
        'onDeactivate' => 'jxddddeldesc_install::onDeactivate'
                        ),
    'settings'     => array(
                        )
    );

?>
