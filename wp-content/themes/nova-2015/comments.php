<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments-container" class="comments-area">
    <?php wp_list_comments( array(
        'walker' => new zipGun_walker_comment,
        'style' => 'ul',
        'callback' => null,
        'end-callback' => null,
        'type' => 'all',
        'page' => null,
        'avatar_size' => 32
    ) ); ?>
</div><!-- /#comments-container -->
 
<div id="respond-container">
    <?php comment_form(); ?>
</div><!-- /#respond-container -->