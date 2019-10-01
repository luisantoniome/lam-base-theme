<?php get_header(); ?>

<?php if ( is_archive() ) : ?>

  <h1><?php the_archive_title(); ?></h1>

<?php elseif ( is_search() ) : ?>

  <h1><?php _e('Search: ', 'lam-base-theme'); ?><?php the_search_query(); ?></h1>

<?php elseif ( is_404() ) : ?>

  <h1><?php _e('Page not found.', 'lam-base-theme'); ?></h1>

<?php elseif ( is_home() ) : ?>

  <h1><?php _e('Blog', 'lam-base-theme'); ?></h1>

<?php else : ?>

  <h1><?php bloginfo('name'); ?></h1>

<?php endif; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <h2><a href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h2>
  <?php the_excerpt(); ?>

<?php endwhile; else : ?>

	<p><?php esc_html_e( 'Sorry, no content to show.', 'lam-base-theme' ); ?></p>
  
<?php endif; ?>

<?php get_footer(); ?>