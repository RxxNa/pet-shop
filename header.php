<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>CAT BELL</title>

  <!-- CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Kosugi&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header_inner">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/home/logo.svg" alt="ロゴ"></a>
      <nav>
        <ul>
          <li><a href="#">猫を探す</a></li>
          <li><a href="#">お店を探す</a></li>
          <li><a href="#">ブログ一覧</a></li>
        </ul>
      </nav>
    </div>
  </header>