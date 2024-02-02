<?php

if ( post_password_required() ) {
    return;
}

?>

<div id="comments" class="comments-area">
<?php if ( have_commets() ) : ?>
    <h2 class="comments-title">
        
    </h2>
<?php endif; ?>
</div>