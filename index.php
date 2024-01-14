<?php get_header(); ?>

    <main class="index">

	<div>
		<img src="./images/bojan-krivokapic-500.jpg" class="index-bio-image" />
		<a href="/biografija">
			<div class="index-item">
				<p>
					Objavljene knjige: „Trči Lilit, zapinju demoni“ (kratke priče, 2013), „Žoharov let“ (poezija, 2014), „Proleće se na put sprema“ (roman, 2017), „Gnezdo dečaka“ (poezija, 2019) i „Vila Fazanka“ (roman, 2023). Dobitnik je nagrada za prozu: Ulaznica (Zrenjanin, 2011), Đura Đukanov (Kikinda, 2012), Edo Budiša (Pazin, 2014), Lapis Histriae (Umag, 2021), Biber (Beograd – Sarajevo, 2021), Milutin Uskoković (Užice, 2021), Laza K. Lazarević (Šabac, 2022), kao i nagrade Mak Dizdar za zbirku poezije (Stolac, 2013). Za roman „Proleće se na put sprema“ godine 2018. dobija Nagradu Mirko Kovač za najbolje delo mladog autora u Srbiji, Bosni i Hercegovini, Hrvatskoj i Crnoj Gori.
				</p>
			</div>
		</a>
	</div>

	<div>

		<h2 class="index-news-title">Novosti</h2>

		<div class="index-news-list">

			<?php $catquery = new WP_Query( 'cat=2&posts_per_page=4' ); ?>

			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

			<a href="<?php the_permalink(); ?>">

			<div class="index-item">
				<h3><?php the_title(); ?></h3>
				<p>
				<?php echo excerpt(25); ?>
				</p>
				</a>

			</div>

			<?php endwhile;
			wp_reset_postdata();
			?>

		</div>

	</div>

	<div class="archive-link">
		<a href="//bojankrivokapic.com/cat/novosti">arhiva novosti</a>
	</div>

	
	</main>

<?php get_footer(); ?>
