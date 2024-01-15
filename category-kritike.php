<?php get_header(); ?>

    <main>

    <h1 class="title">Kritike</h1>

	<div class="articles">

	<?php if (have_posts()) : ?>

 		<?php if (is_category()) { ?>

		<?php } ?>

		<?php while (have_posts()) : the_post(); ?>

		<article>

			<h2 id="post-title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>

			<?php the_excerpt(); ?>
            
            <time datetime="<?php the_time('d-m-Y'); ?>" pubdate>Objavljeno: <?php the_time('d. m. Y.'); ?></time><?php echo ah_share_buttons(); ?>

		</article>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('inc/gone'); ?>

	<?php endif; ?>

	<?php $args = array(
			'prev_text'          => __('&#8592; Prethodno'),
			'next_text'          => __('Sledeće &#8594;'),
		); ?>

	<nav class="paging">
		<?php echo paginate_links( $args ); ?>
	</nav>

    </main>

<?php get_footer(); ?>