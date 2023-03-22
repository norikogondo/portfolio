<?php get_header(); ?>
<section class="hero-header">
    <div class="hero-header-content">
        <span id='typeAnimation'></span>
    </div>
    <p class="hero-jp">デザインの力であなたのビジネスに貢献します。</p>
    <p class="hero-message">
        I'm a UX/UI Designer and a Product Designer in Canada and Japan, passionate about contributing to your business
        through creative designs, branding, and user experiences.
    </p>
</section>

<section class="about">
    <div class="about-wrap">
        <div class="about-img"><img src="<?php echo get_template_directory_uri(); ?>/public/images/about-img.jpg"
                alt="ABOUT">
        </div>
        <div class="about-info">
            <h2>ABOUT</h2>
            <div class="about-text">
                <p>
                    I have earned a Bachelor's degree in Economics. Through various work experiences, I have come to
                    realize that user interface and user experience design can potentially play a crucial role in the
                    success of any type of business in contemporary society. That is the main reason why I switched to a
                    career in UX/UI design in 2016, and since then, I have been involved in creating websites, apps,
                    graphics, and digital marketing for small and mid-sized companies in Japan and Canada. I am driven
                    by digital design and am currently pursuing my career as a UX/UI designer or a product designer.</p>
                ​
            </div>
        </div>
        ​
    </div>
</section>

<section class="work">
    <h2>WORK</h2>
    <?php
    $args = array(
        'post_type'      =>  'post',
        'tag_slug__and' => array('favorite',),
        'orderby'        => 'menu_order date',
        'order'          => 'DESC',

    );

    $my_query = new WP_Query($args);

    if ($my_query->have_posts()) :
        while ($my_query->have_posts()) :
            $my_query->the_post();
            get_template_part('template-parts/content');
        endwhile;
    endif;
    ?>

    <a href="<?php the_permalink(25); ?>" class="button">WORK</a>

</section>

<section class="contact">
    <div class="contact-wrap">
        <h2>CONTACT</h2>
        <p>Feel free to ask me anything or let me know any ideas you would like to collaborate on.</p>
        <p>I will get back to you as soon as possible.</p>
        <a href="<?php the_permalink(21); ?>" class="button">CONTACT</a>
    </div>
</section>


<?php
get_footer();