<?php 

//content template for page.php

?>

<article id="post-<?php the_ID(); ?>">

<?php the_title( '<h1 class="entry-title">', '</h1>' );  ?>

<?php
if ( has_post_thumbnail() ) :
    the_post_thumbnail( 'full' );
endif;
?>

</article>