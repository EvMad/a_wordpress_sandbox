<?php
//search results

get_header();
?>

<div id="primary" class="search-content-area">
    <main id="main" class="site-main">
        <?php if ( have_posts() ) : 
            
            while ( have_posts() ) :
                thepost();
                get_template_part( 'template-parts/page/content', 'search' );
            endwhile;

            echo paginate_links( [
                'prev_text' => esc_html__( 'Prev', 'Sandbox'),
                'next_text' => esc_html__( 'Next', 'Sandbox'),
            ] );

            else

            get_template_part( 'template-parts/page/content', 'none' )
            
            ?>

            <?php endif; ?>
    </main>
</div>

<?php 
get_footer();
?>