<?php get_header(); ?>
<!-- ループの基本形の文章です -->
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<!-- コンテンツのHTMLやPHPを書く -->
<?php ?>
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php endwhile; else: ?>
<!-- コンテンツがないときのHTMLやPHPを書く -->
<?php endif; ?>
<?php get_footer();