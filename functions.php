<?php
function my_script() {
  //wordpress特有のjqueryを読み込まない
  wp_deregister_script('jquery');

  //jsファイルの読み込み
  wp_enqueue_script(
    'script-name',
    get_template_directory_uri() . '/js/script.js',
    array( 'jquery' ),
    '1.0.2',
    true
  );
}
add_action( 'wp_enqueue_script', 'my_script' );