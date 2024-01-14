<?php get_header(); ?>
	
	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
		
    <main>

	<h1 class="page-title"><span><?php the_title(); ?></span></h1>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
			<div class="entry">
				
				<?php the_content(); ?>
				
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
								
			</div>
			
		</div>
		
		<?php endwhile; ?>
		
	<?php else : ?>
		
		<?php get_template_part('inc/gone'); ?>
		
	<?php endif; ?>
	
    </main>

<?php get_footer(); ?>