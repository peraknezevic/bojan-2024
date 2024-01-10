<?php get_header(); ?>

    <main>

	<h1 class="naslov"><span>Najnoviji tekstovi</span></h1>

	<div class="card-container">

	<?php $catquery = new WP_Query( 'cat=3&posts_per_page=4' ); ?>
	
	<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

	<div id="post-<?php the_ID(); ?>" class="card">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( array( 432, 324 ) ); ?>
        <div class="card-head">
			<span>Intermezzo</span>
            <h2><?php the_title(); ?></h2>
            <p><?php echo excerpt(12); ?></p>
        </div>
    </a>
	</div>
    <?php endwhile;
	  wp_reset_postdata();
	?>
	</div>
	<div class="jos">
		<a href="//bojankrivokapic.com/cat/tekstovi">arhiva tekstova</a>
	</div>

	<h1 class="naslov"><span>Novosti</span></h1>

	<div class="najave">
	<?php $catquery = new WP_Query( 'cat=2&posts_per_page=2' ); ?>
	<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>
	<h2 id="post-title"><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></h2>
	<div class="entry">
	<?php the_excerpt( $more_link_text ); ?>
	</div>
	<time datetime="<?php the_time('d-m-Y'); ?>" pubdate>Objavljeno: <?php the_time('d. m. Y.'); ?></time><?php echo ah_share_buttons(); ?>
	</div>
	<?php endwhile;
	wp_reset_postdata();
	?>
	</div>

	<div class="jos">
		<a href="//bojankrivokapic.com/cat/novosti" class="jos">arhiva novosti</a>
	</div>

	</main>

<?php get_footer(); ?>
