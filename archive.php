<?php
//archive template

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if ( have_posts() ) : ?>
            <header class="archive-page-header">
                
            </header>
            <?php endif; ?>
    </main>
</div>

<?php 
get_footer();
?>