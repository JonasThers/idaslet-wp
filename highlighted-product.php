<?php
/*
As of now, this store is only going to have one product,
so we are just fetching the the only product which can
found with this query.

If  they later decide to sell other products,
this can be adjusted, so they can decide which one to
highlight on the front page.
*/
$product = wc_get_products( array( 'status' => 'publish' ) )[0];

if ($product):
  ?>
  <section class="highlighted-product">
    <h2 class="highlighted-product__header">Pre-order our upcoming cd</h2>
    <div class="highlighted-product__img">
      <?php echo $product->get_image(); ?>
    </div>
    <h2 class="highlighted-product__title">
      <?php echo $product->get_name(); ?>
    </h2>
    <a class="highlighted-product__cta" href="/product/<?php echo $product->get_slug(); ?>">Pre-order</a>
  </section>
<?php endif; ?>