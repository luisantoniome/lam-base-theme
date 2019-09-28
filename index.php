<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <h2><?php the_title() ;?></h2>
  <?php the_excerpt(); ?>

<?php endwhile; else : ?>

	<p><?php esc_html_e( 'Sorry, no content to show.' ); ?></p>
  
<?php endif; ?>

<?php get_footer(); ?>