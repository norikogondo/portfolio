<?php
get_header();

if (have_posts()):
?>
<div class="work-header">
    <p>WORK</p>
</div>
<?php

    while(have_posts()):
        the_post();

        get_template_part('template-parts/content');


    endwhile;

    elseif (is_404()): 

    endif;

    the_posts_pagination(
        array(
            'mid_size'      => 2, // 現在ページの左右に表示するページ番号の数
            'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
            'prev_text'     => __( 'prev'), // 「前へ」リンクのテキスト
            'next_text'     => __( 'next'), // 「次へ」リンクのテキスト
            'type'          => 'list', // 戻り値の指定 (plain/list)
        )
    );

get_footer();