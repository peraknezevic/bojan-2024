<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">

        <?php wp_head(); ?>
        
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97375596-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-97375596-1');
        </script>

	</head>
	<body <?php body_class(); ?>>

			<header>
                <div id="logo">
                    <a href="<?php echo home_url('/'); ?>">
                      <h1><?php bloginfo('name'); ?></h1>
                    </a>
                </div>
                <nav>
                   <ul class="main-menu">
                    <li><a href="//bojankrivokapic.com/cat/novosti" title="Novosti">Novosti</a></li>
                    <li><a href="//bojankrivokapic.com/cat/tekstovi" title="Tekstovi">Tekstovi</a></li>
                    <li><a href="//bojankrivokapic.com/knjige" title="Objavljene knjige">Knjige</a></li>
                    <li><a href="//bojankrivokapic.com/biografija" title="Biografija autora">Biografija</a></li>
                    <li><a href="//bojankrivokapic.com/intervjui" title="Intervjui">Intervjui</a></li>
                    <li><a href="//bojankrivokapic.com/cat/kritike" title="Kritike i komentari">Kritike</a></li>
                    <li><a href="//bojankrivokapic.com/foto" title="Fotografije">Foto</a></li>
                    <li><a href="//bojankrivokapic.com/kontakt" title="Kontaktirajte autora">Kontakt</a></li>
                    <li><a href="//facebook.com/gregor.fehmi/" class="facebook" title="Bojanova Facebook stranica"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg></a></li>
                    </ul>
                </nav>
			</header>
