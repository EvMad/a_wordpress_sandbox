<?php
/** */
?>

<article id="post-<?php the_ID() ?>">
<header class="entry-header">
    <?php
    the_title( '<h2 class="entry-title"> <a class="entry-link" href="'.esc_url( get_permalink() ).'">', '</a></h2>' );
    ?>
</header>
<!--post thumbnail-->
<?php
if ( has_post_thumbnail() ) :
    the_post_thumbnail( 'large' );
endif;
?>
<!--post content-->
<div class="entry-content">
    <?php the_excerpt(); ?>
</div>

</article>