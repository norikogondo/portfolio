<section class="frontPageAboutSec">
    <div class="frontPageAboutSec_bkImage"></div>
    <div class="container">
        <div class="frontPageAboutSec_contents">
            <div class="frontPageAboutSec_contents_left">
                <div class="frontPageAboutSec_profileImg">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/about-img.jpg" alt="ABOUT">
                </div>
            </div>
            <div class="frontPageAboutSec_contents_right">
                <div class="frontPageHeading frontPageHeading--about">ABOUT</div>
                <div class="frontPageAboutSec_paragraph">
                    <p>
                        <?php the_field('front_about'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>