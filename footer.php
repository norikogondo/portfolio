<?php ?>

</main>
    <footer>
        <div class="footer-wrap">
            <div class="footer-nav">
                <?php
                    wp_nav_menu( array(
                        'theme_location'    =>  'menu_main',
                        'container'         =>  'nav',
                        'container_class'   =>  'menu-main'
                    ) );
                ?>
            </div>
            <div class="footer-info">
                <p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php bloginfo('name'); ?>
                    </a>
                </p>
                <?php
                    wp_nav_menu( array(
                        'theme_location'    =>  'menu_social',
                        'container'         =>  'nav',
                        'container_class'   =>  'menu-social',
                        'link_before'   =>  '<span>',
                        'link_after'   =>  '</span>'
                    ) );
                ?>
                <p>©copyright NORIKO GONDO</p>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri()."/main.js" ?>"></script>
</html>