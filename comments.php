<?php

if ( post_password_required() ) {
    return;
}

?>

<div id="comments" class="comments-area">
<?php if ( have_commets() ) : ?>
    <h2 class="comments-title">
        <?php
        $comment_count = get_comments_number();
        if ( '1' === $comment_count ) {
            printf(
                esc_html__( 'Comments (1)', 'Sandbox' )
            );
        }
        ?>
    </h2>
<?php endif; ?>
</div>