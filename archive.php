<?php
get_header();
?>


<div class="work-header">
	<p>WORK</p>
	<h2><?php the_archive_title(); ?></h2>
</div>

<?php



if (have_posts()) :


    while (have_posts()) :
        the_post();
?>

<section>
	<div class="category-post-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
	<h3 class="category-post-title"><a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_title()); ?></a>
	</h3>
	<div class="category-post-excerpt"><?php the_excerpt(); ?></div>
</section>

<?php
    endwhile;

elseif (is_404()) :

endif;

the_posts_pagination(
    array(
        'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => __('prev'), // 「前へ」リンクのテキスト
        'next_text'     => __('next'), // 「次へ」リンクのテキスト
        'type'          => 'list', // 戻り値の指定 (plain/list)
    )
);
?>
<a href="<?php the_permalink(25); ?>" class="button">WORK TOP</a>
<?php



get_footer();

?>