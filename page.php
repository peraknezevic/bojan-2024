<?php get_header(); ?>
	
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
		
    <main>

	<h1 class="page-title"><?php the_title(); ?></h1>

		<div>
			
			<?php the_content(); ?>
											
		</div>
		
		<?php endwhile; ?>
		
	<?php else : ?>
		
		<?php get_template_part('inc/gone'); ?>
		
	<?php endif; ?>
	
    </main>

<?php get_footer(); ?>