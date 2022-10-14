<?php get_header(); ?>

<section class="hero-header">
	<div class="hero-wrap">

		<div class="hero-title">
			<p>HELLO,</p>
			<p>I’M NORIKO.</p>
		</div>
		<p class="hero-message">I'm a UX/UI designer in Canada and Japan, passionate about contributing to your business
			with creative design, identities and experiences.</p>
		<p class="hero-jp">デザインの力であなたのビジネスに貢献します。</p>
	</div>

</section>

<section class="about">
	<div class="about-wrap">
		<div class="about-img"><img src="<?php echo get_template_directory_uri(); ?>/images/about-img.jpg" alt="ABOUT">
		</div>
		<div class="about-info">
			<h2>ABOUT</h2>
			<div class="about-text">
				<p>I am a UX/UI designer from Japan, and currently living in Vancouver, Canada.</p>
				<p>I have had various job experiences such as a recruitment consultant and a secretary to members of the
					Diet in Japan before my current career.</p>
				<p>Since I learned a lot in many industries, I've been utilizing my experience in creating visual assets
					and web products for enhancing clients’ business activities such as management and branding.</p>
			</div>
		</div>
		<!-- <a href="#" class="button">ABOUT</a> -->
	</div>
</section>

<section class="work">
	<h2>WORK</h2>
	<?php
  $args = array(
    'post_type'      =>  'post',
    'tag_slug__and' => array('favorite',),
    'orderby'        => 'menu_order date',
    'order'          => 'ASC',
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