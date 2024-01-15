<?php /* Template Name: Page Article */ ?>

<?php get_header(); ?>
		
	<main>
	
	<?php if (have_posts()) : ?>
		
	<?php while (have_posts()) : the_post(); ?>

	<h1 class="title"><?php the_title(); ?></h1>

		<article>
	
				<?php the_content(); ?>
											
		</article>
		
		<?php endwhile; ?>
		
	<?php else : ?>
		
		<?php get_template_part('inc/gone'); ?>
		
	<?php endif; ?>
	
    </main>

<?php get_footer(); ?>