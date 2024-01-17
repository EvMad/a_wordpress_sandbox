<?php
//archive template

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if ( have_posts() ) : ?>
            <header class="archive-page-header">
                <?php 
                the_archive_title( '<h1 class="archive-title">', '</h1>');
                the_archive_description( '<div class="archive-description">', '</div>');
                ?>
            </header>

            <?php 
            
            while ( have_posts() ) :
                thepost();
                get_template_part( 'template-parts/post/content' );
            endwhile;
            
            ?>

            <?php endif; ?>
    </main>
</div>

<?php 
get_footer();
?>