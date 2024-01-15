<?php get_header(); ?>

    <main class="index">

		<figure class="index-bio">

			<img src="./images/bojan-krivokapic-500-color.jpg" class="index-bio-image" />

			<figcaption>
				<article>
					<p>
						Objavljene knjige: <strong><i>Trči Lilit, zapinju demoni</i></strong> (kratke priče, 2013), <strong><i>Žoharov let</i></strong> (poezija, 2014), <strong><i>Proleće se na put sprema</i></strong> (roman, 2017), <strong><i>Gnezdo dečaka</i></strong> (poezija, 2019) i <strong><i>Vila Fazanka</i></strong> (roman, 2023). Dobitnik je nagrada za prozu: Ulaznica (Zrenjanin, 2011), Đura Đukanov (Kikinda, 2012), Edo Budiša (Pazin, 2014), Lapis Histriae (Umag, 2021), Biber (Beograd – Sarajevo, 2021), Milutin Uskoković (Užice, 2021), Laza K. Lazarević (Šabac, 2022), kao i nagrade Mak Dizdar za zbirku poezije (Stolac, 2013). Za roman „Proleće se na put sprema“ godine 2018. dobija Nagradu Mirko Kovač za najbolje delo mladog autora u Srbiji, Bosni i Hercegovini, Hrvatskoj i Crnoj Gori.
					</p>
					<div class="btn-wrapper">
						<a href="<?php get_site_url(); ?>/biografija" class="btn">Biografija</a>
					</div>
				</article>
			</figcaption>

		</figure>

		<div>

		<h2 class="index-news-title">Najnovije</h2>

		<div class="index-news-list">

			<?php $catquery = new WP_Query( 'cat=2&posts_per_page=4' ); ?>
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>

			<article>
				<h3 class="small-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h3>
				<p>
				<?php echo excerpt(25); ?>
				</p>
			</article>

			<?php endwhile;
			wp_reset_postdata();
			?>

		</div>
		</div>

	</div>

	
	</main>

<?php get_footer(); ?>
