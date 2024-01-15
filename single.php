<?php get_header(); ?>

    <main>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<?php if ( in_category( 'tekstovi') ) : ?>

			<div class="intermezzo-article">

			<?php endif; ?>

		<?php the_post_thumbnail( array( 800, 600 ) ); ?>

		<article>

			<?php if ( in_category( 'tekstovi') ) : ?>

			<small>Intermezzo</small>

			<?php endif; ?>

			<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

            <time datetime="<?php the_time('d-m-Y'); ?>" pubdate>Objavljeno: <?php the_time('d. m. Y.'); ?></time> <?php echo ah_share_buttons(); ?>

		</article>

		<?php if ( in_category( 'tekstovi') ) : ?>

<div class="intermezzo-article">

<?php endif; ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('inc/gone'); ?>

	<?php endif; ?>

	</main>

<?php get_footer(); ?>
