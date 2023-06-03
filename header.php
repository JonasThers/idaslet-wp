<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php bloginfo('name'); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body>
  <header id="<?php echo (is_front_page()) ? "header" : ''; ?>"
    class="header <?php echo (is_front_page()) ? "" : 'header--black'; ?>">
    <h1 id="<?php echo (is_front_page()) ? "header-title" : ''; ?>"
      class="header__title <?php echo (is_front_page()) ? "" : 'header__title--white'; ?>"><?php bloginfo('name'); ?>
    </h1>
  </header>