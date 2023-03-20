<?php get_header(); ?>

<section class="hero-header">
    <div class="hero-header-content">
        <span id='typeAnimation'></span>
    </div>
    <p class="hero-jp">デザインの力であなたのビジネスに貢献します。</p>
    <p class="hero-message">
        I'm a UX/UI designer in Canada and Japan, passionate about contributing to your business
        with creative design, identities and experiences.
    </p>
</section>

<section class="about">
    <div class="about-wrap">
        <div class="about-img"><img src="<?php echo get_template_directory_uri(); ?>/public/images/about-img.jpg" alt="ABOUT">
        </div>
        <div class="about-info">
            <h2>ABOUT</h2>
            <div class="about-text">
                <p>
                    Earned my Bachelor's Degree in economics. Through a variety of work experiences, I noticed that both
                    user interface and user experience design could play a crucial role for any type of businesses to
                    succeed in contemporary society. That is the biggest reason why I switched my career to a web
                    designer in 2016, and have worked on websites, app design, banners, ads, and graphics for small and
                    mid-sized companies in Japan, as well as in Canada recently. I have been driven to digital design,
                    and currently pursuing my career as a UX/UI designer.</p>

            </div>
        </div>

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
        <p>Ask me anything or let me know an idea you would like to collaborate with me.</p>
        <p>I will get back to you ASAP.</p>
        <a href="<?php the_permalink(21); ?>" class="button">CONTACT</a>
    </div>
</section>


<?php
get_footer();
