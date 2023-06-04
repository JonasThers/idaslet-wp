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

<?php global $woocommerce; ?>

<body>
  <header id="<?php echo (is_front_page()) ? "header" : ''; ?>"
    class="header <?php echo (is_front_page()) ? "" : 'header--black'; ?>">
    <a href="<?php echo home_url(); ?>">
      <h1 id="<?php echo (is_front_page()) ? "header-title" : ''; ?>"
        class="header__title <?php echo (is_front_page()) ? "" : 'header__title--white'; ?>"><?php bloginfo('name'); ?>
      </h1>
    </a>
    <a href="/cart" class="minicart"><img class="minicart__logo"
        src="<?= get_template_directory_uri() . './assets/img/shopping-cart.png'; ?>" /><?php if ($woocommerce->cart->get_cart_contents_count()): ?><span class="minicart__amount">
          <?php echo $woocommerce->cart->get_cart_contents_count() ?>
        </span>
      <?php endif; ?>
    </a>
  </header>