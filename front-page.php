<?php get_header(); ?>

<!-- main img & text rapper -->

<div class="header-img">
</div>

<!-- main img & text  end -->



<!-- profile  start -->

<section id="profile">
        <div class="profile-flexAll">

            <div class="profile">
                <h2 class="profile-title">工房について</h2>
                <p>はじめまして。趣味でイラストを描いており、ミニマルデザインかつ、ヴィンテージ調が大好きなSakiです。
                    おしゃれだけど、どこか冷たい空気を感じさせるミニマル独自の雰囲気を求めて、日々イラストを制作しています。
                </p>
                <div class="button1">
                    <a href="./bread&sweets/index.html">view more</a>
                </div>
            </div>

            <div class="profile-img">
                <img src="images/ikon.jpeg" alt="">
                </div>
            </div>
    </div>
</section>

<!-- profile  end -->



<!-- works  start -->

<section id="works" class="topworks">

    <div class="works-title">
        <h2 >天然工房とお菓子blog</h2>
    </div>
    <div class="bread_to_sweets">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/works_1.jpeg" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/works_2.jpeg" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/works_3.jpeg" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/works_4.jpeg" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/works_5.jpeg" alt="">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/works_6.jpeg" alt="">
    </div>


    <div class="button020">
        <a href="<?php echo esc_url(home_url('/blog')); ?>">view more</a>
    </div>

        </div>

</section>

<!-- works  end -->

<?php get_footer();


