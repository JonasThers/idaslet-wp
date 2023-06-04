<?php
  $product = wc_get_product( 13 );
  if ( $product) :
?>
<section class="highlighted-product">
  <h2 class="highlighted-product__header">Pre-order our upcoming cd</h2>
  <div class="highlighted-product__img"><?php echo $product->get_image(); ?></div>
  <h2 class="highlighted-product__title"><?php echo $product->get_name(); ?></h2>
  <a class="highlighted-product__cta" href="/product/<?php echo $product->get_slug(); ?>">Pre-order</a>
</section>
<?php endif; ?>