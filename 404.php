<?php
    @get_header();
?>

<div id="primary" class="content-area">

<main id="main" class="site-main">

    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Oops! That page cannot be found.', 'Sandbox' ); ?></h1>
        </header>

    <div class="page-content">

        <p><?php esc_html_e( 'It looks like nothing was found at this location. Try the links below or the search form.' ); ?></p>

        <?php get_search_form(); ?>

    </div>

    </section>

</main>

</div>