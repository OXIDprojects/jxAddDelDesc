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
                        'de' => 'Text-Finder für die Artikel, Kategories und CMS-Seiten.',
                        'en' => 'Text finder for Articles, Categories and Content Pages.'
                        ),
    'thumbnail'    => 'jxadddeldesc.png',
    'version'      => '0.1',
    'author'       => 'Joachim Barthel',
    'url'          => 'https://github.com/job963/jxAddDelDesc',
    'email'        => 'jobarthel@gmail.com',
    'extend'       => array(
                        ),
    'files'        => array(
        'jxextdelinfo_install'   => 'jxmods/jxadddeldesc/application/controllers/admin/jxadddeldesc_install.php',
        /*'jxfind' => 'jxmods/jxfind/application/controllers/admin/jxfind.php'*/
                        ),
    'templates'    => array(
        /*'jxfind.tpl' => 'jxmods/jxfind/application/views/admin/tpl/jxfind.tpl'*/
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
        'onDeactivate' => 'jxadddeldesc_install::onDeactivate'
                        ),
    'settings'     => array(
                        )
    );

?>
