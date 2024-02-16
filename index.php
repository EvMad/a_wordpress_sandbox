<?php
/** */
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

<?php 
    get_header();
    
    if ( have_posts() ) :
    
        while ( have_posts() ) :
    
            the_post();
            get_template_part( 'template-parts/post/content' );
        endwhile;
    
    endif;
    
    
?>


    </main>
</div>

<?php get_footer(); ?>




