<?php
if ( !empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( $_SERVER['SCRIPT_FILENAME'] ) == 'comments.php' ) :

  die( __('Access denied to this route.', 'lam') );

endif;
?>

<div id="comments">

  <?php if ( post_password_required() ) : ?>

  <p><?php __('This content requires password', 'lam') ?></p>
  </div>
  
  <?php return; endif; ?>

  <?php if ( have_comments() ) : ?>

    <a href="#respond"></a>

    <h3 class="comments-title">
      <?php comments_number(
        __('Be the first to comment!', 'lam'),
        __('There is one comment.', 'lam'),
        __('There are % comments.', 'lam')
      ); ?>
    </h3>

    <ol id="comments-list">

      <?php wp_list_comments( 'avatar_size=32' ); ?>

    </ol>
    
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

      <div class="comments-nav-section">

        <p class="alignleft">
          <?php previous_comments_link( __('Previous comments', 'lam') ); ?>
        </p>
        <p class="alignright">
          <?php next_comments_link( __('Recent comments', 'lam') ); ?>
        </p>

      </div>

    <?php endif; ?>

  <?php endif; ?>

  <?php if ( !comments_open() && !is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

    <p>Comments are closed.</p>

  <?php endif; ?>

  <?php comment_form(); ?>

</div>