<?php get_header(); ?>

<section class="hero" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
</section>
<section class="about">
  <div class="about__description">
    <?php the_content(); ?>
  </div>
  <div class="about__music">
    <iframe
      style="border-radius: 12px"
      src="https://open.spotify.com/embed/artist/6uTmzUp8K9iXpV2peh3F6S?utm_source=generator&theme=0"
      width="100%"
      height="352"
      frameborder="0"
      allowfullscreen=""
      allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
      loading="lazy"
    ></iframe>
  </div>
</section>

<?php include 'highlighted-product.php';?>

<?php get_footer(); ?>
