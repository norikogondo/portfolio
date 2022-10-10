<?php
get_header();  
?>

<article <?php post_class(); ?>>

    <div class="single-title">
      <h3 class="single-title"><?php the_title(); ?></h3>
      <p><?php echo strip_tags(get_the_category_list(),'<ul><li>'); ?></p>
    </div>
    <div class="single-img"><?php the_post_thumbnail(); ?></div>

  <div class="single-content"><?php the_content(); ?></div>

    <?php 
        the_post_navigation();
    ?>
    <a href="<?php the_permalink();?>">
      <?php the_category(); ?>
    </a>
    <a href="<?php the_permalink(25);?>" class="button">WORK TOP</a>
</article>



<?php
get_footer();  
?>