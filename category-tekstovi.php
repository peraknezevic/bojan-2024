<?php get_header(); ?>

    <main>

    <h1 class="title">Tekstovi</h1>

    <ul class="intermezzo">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

        <li>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( array( 500, 400 ) ); ?>
        </a>
            <div>
                <small>Intermezzo</small>
                <h2>
                    <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a>
                </h2>
                <p><?php echo excerpt(20); ?></p>
            </div>
        </li>

    <?php endwhile; ?>

        <?php else : ?>

            <?php get_template_part('inc/gone'); ?>

        <?php endif; ?>

    </ul>

	<?php $args = array(
			'prev_text'          => __('&#8592; Prethodno'),
			'next_text'          => __('Sledeće &#8594;'),
		); ?>

	<nav class="paging">
		<?php echo paginate_links( $args ); ?>
    </nav>

    </main>

<?php get_footer(); ?>
