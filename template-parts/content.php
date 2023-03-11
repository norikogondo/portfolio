<article <?php post_class(); ?>>
    <div class="blog-img">
        <?php
        if (is_front_page()) :
            the_post_thumbnail();

        else :
        ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <?php
        endif;
        ?>
    </div>

    <div class="post-info">
        <?php if (is_front_page()) : ?>
            <h3><?php echo strip_tags(get_the_category_list(), '<ul><li>'); ?></h3>
            <?php the_excerpt(); ?>

            <?php $categories = get_the_category(); ?>
            <?php if ($categories) : ?>
                <?php foreach ($categories as $category) : ?>
                    <?php $theCatLink = esc_url(get_category_link($category->term_id)) ?>


                    <?php echo '<a class="button button--nospace" href="' .  $theCatLink . '">' . $category->name . '</a>'; ?>
                <?php endforeach; ?>
            <?php endif; ?>

        <?php else : ?>

            <h3>
                <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_title()); ?></a>
            </h3>
            <?php the_category(); ?>
        <?php endif; ?>
    </div>

</article>