<?php

  function add_custom_meta_boxes(){
    add_meta_box( 'soapInfo', 'Soap information', 'soapInfoCallback', 'soaps', 'normal', 'default',null );
  }
  add_action('add_meta_boxes', 'add_custom_meta_boxes');

  function soapInfoCallback($post){
    require_once get_template_directory() . '/inc/soapInfoForm.php';
  }

  function save_soapInfo_meta_boxes($post_id){
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return;
    }
    $fields = [
      'fabula_soap_name',
      'fabula_soap_price',
      'fabula_soap_description'
    ];
    foreach ($fields as $field ) {
      if (array_key_exists($field, $_POST)) {
        update_post_meta($post_id,$field,$_POST[$field]);
      }
    }
  }
  add_action('save_post','save_soapInfo_meta_boxes');

 ?>
