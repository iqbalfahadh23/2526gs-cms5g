<?php get_header(); ?>

<div class="container">
  <div class="content">
    <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <div><?php the_content(); ?></div>
        <?php endwhile;
      else :
        echo "<p>Belum ada postingan.</p>";
      endif;
    ?>
  </div>

  <div class="sidebar">
    <h3>Profil</h3>
    <img src="https://th.bing.com/th/id/OIP.DOUmo-MEq5ziy4cagPOl8QHaHk?w=170&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Profil" width="100" style="border-radius:50%;">
    <p>Halo, saya Iqbal. Selamat datang di blog sederhana ini!</p>
  </div>
</div>

<?php get_footer(); ?>

