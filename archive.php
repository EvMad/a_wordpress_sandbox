<?php
//archive template

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if ( have_posts() ) : ?>
            <header class="archive-page-header">
                <?php 
                the_archive_title( '<h1 class="archive-title">', '</h1>')
                ?>
            </header>
            <?php endif; ?>
    </main>
</div>

<?php 
get_footer();
?>