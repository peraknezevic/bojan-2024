<?php /* Template Name: Page Article */ ?>

<?php get_header(); ?>
	
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
		
    <main>

	<h1 class="page-title"><span><?php the_title(); ?></span></h1>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										
				<?php the_content(); ?>
											
		</article>
		
		<?php endwhile; ?>
		
	<?php else : ?>
		
		<?php get_template_part('inc/gone'); ?>
		
	<?php endif; ?>
	
    </main>

<?php get_footer(); ?>