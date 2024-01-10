<?php
/** */

get_header();
?>

<div id="primary" class="content-area">

<main id="main" class="site-main">
<?php
while ( have_posts() ) :
    the_post();

endwhile;
?>
</main>

</div>

<?php
/** */

get_footer();
?>
