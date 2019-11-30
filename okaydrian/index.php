<?php date_default_timezone_set('America/Detroit');
/* 



Hey Adrian, edit the bits below for the copy.
You can use linebreaks.
You can use SINGLE QUOTES/APOSTROPHES but not double quotes.
To replace the backgrounds, overwrite the images found in /assets/images/
But keep the same names.




*/
// Home copy
$home_copy = "Adrian (Okaydrian)
Gamestop TV Host
Freelance Event/Stage Host
Twitch Partnered Streamer since 2015
Coffee & pro wrestling & gaming";

// Hosting copy
$hosting_copy = "Gamestop TV Host
Freelance Event/Stage Host
TwitchCon since 2015
Pax South
Pax East";

// Twitch copy
$twitch_copy = "Twitch Partnered Streamer since 2015
Over 1 million unique viewers
Averages 10-15% buy-in rate on Sponsored products";

// Contact copy
$contact_copy = "Adrian (Okaydrian)
Gamestop TV Host
Freelance Event/Stage Host
Twitch Partnered Streamer since 2015
Coffee & pro wrestling & gaming";

// Now leave the rest as is.

global $home_url; $home_url = 'http://okaydrian.tv/';
function formatCopy($copy){
    $copy = str_replace("\r\n",'<br>',$copy);
    
    return $copy;
}
function formatCopySchema($copy){
    $copy = str_replace("\r\n",'. ',$copy);
    
    return $copy;
}

?><!--[if lt IE 12]>    <html class="no-js lt-ie12" lang="en" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
<!--[if gt IE 12]><!--> <html class="no-js" lang="en" prefix="og: http://ogp.me/ns#"> <!--<![endif]-->
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		
		<link rel='dns-prefetch' href='//ajax.googleapis.com' />

		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $home_url; ?>assets/icons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $home_url; ?>assets/icons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $home_url; ?>assets/icons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $home_url; ?>assets/icons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $home_url; ?>assets/icons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $home_url; ?>assets/icons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $home_url; ?>assets/icons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $home_url; ?>assets/icons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $home_url; ?>assets/icons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $home_url; ?>assets/icons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $home_url; ?>assets/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $home_url; ?>assets/icons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $home_url; ?>assets/icons/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $home_url; ?>assets/icons/manifest.json">
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="msapplication-TileImage" content="<?php echo $home_url; ?>assets/icons/ms-icon-144x144.png">
        <meta name="theme-color" content="#000000">

		<title>Adrian "Okaydrian" F.E. | Freelance Event/Stage Host | Partnered Twitch Streamer</title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="//code.jquery.com" rel="dns-prefetch">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- CSS -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,700&display=swap&subset=latin-ext" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="assets/css/style.css?ver=<?php echo filemtime( 'assets/css/style.css' ); ?>" />
		
		<link rel="image_src" href="<?php echo $home_url; ?>assets/images/home.jpg"/>
		<meta property="article:published_time" content="<?php echo date('c', time()); ?>">
		<meta property="article:modified_time" content="<?php echo date('c', time()); ?>">
		<meta name="description" content="<?php echo formatCopySchema($home_copy); ?>"/>
		<meta name="robots" content="noodp"/>
		<link rel="canonical" href="http://okaydrian.tv/" />
		<meta property="og:locale" content="en_GB" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content='Adrian "Okaydrian" F.E. | Freelance Event/Stage Host | Partnered Twitch Streamer' />
		<meta property="og:description" content="<?php echo formatCopySchema($home_copy); ?>" />
		<meta property="og:url" content="http://okaydrian.tv/" />
		<meta property="og:site_name" content='Adrian "Okaydrian" F.E.' />
		<meta property="og:image" content="<?php echo $home_url; ?>assets/images/home.jpg">
		<meta property='og:image:width' content='1200'>
		<meta property='og:image:height' content='630'>
		<meta property="og:description" content="<?php echo formatCopySchema($home_copy); ?>">
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:title" content='Adrian "Okaydrian" F.E. | Freelance Event/Stage Host | Partnered Twitch Streamer' />
		<meta name="twitter:description" content="<?php echo formatCopySchema($home_copy); ?>">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:image" content="<?php echo $home_url; ?>assets/images/home.jpg">
	</head>
	<body>
<?php
$socials = '<ul class="social-list">
						<li class="socials"><a href="https://twitter.com/okaydrian" target="_blank" class="icons icon-twitter" title="twitter.com/okaydrian"><span class="socials-text">twitter.com/okaydrian</span></a></li>
						<li class="socials"><a href="https://instagram.com/okaydrian" target="_blank" class="icons icon-instagram" title="instagram.com/okaydrian"><span class="socials-text">instagram.com/okaydrian</span></a></li>
                        <li class="socials"><a href="https://twitch.tv/okaydrian" target="_blank" class="icons icon-twitch" title="twitch.tv/okaydrian"><span class="socials-text">twitch.tv/okaydrian</span></a></li>
						<li class="socials"><a href="https://www.youtube.com/OkayPerView" target="_blank" class="icons icon-youtube-play" title="youtube.com/OkayPerView"><span class="socials-text">youtube.com/OkayPerView</span></a></li>
						<li class="socials"><a href="mailto:okaydrian@gmail.com" target="_blank" class="icons icon-mail-alt" title="Email Adrian"><span class="socials-text">okaydrian@gmail.com</span></a></li>
					</ul>';        
?>
		<div class="loading">
			<img src="assets/images/logo_solo.png" alt="OKPV">
		</div>
		<div class="wrapper">
			<div class="section home" data-section-name="home">
				<div class="copy-col">
					<h1>Adrian F.E.</h1>
					<p><?php echo formatCopy($home_copy); ?></p>
					<?php echo $socials; ?>
				</div>
				<div class="content-col"></div>
			</div>
			<div class="section hosting" data-section-name="hosting">
				<div class="copy-col">
					<h1>Hosting</h1>
					<p><?php echo formatCopy($hosting_copy); ?></p>
                    <?php echo $socials; ?>
				</div>
				<div class="content-col"></div>
			</div>
			<div class="section twitch" data-section-name="twitch">
				<div class="copy-col">
					<h1>Your favorite streamer&rsquo;s<br>favorite streamer</h1>
					<p><?php echo formatCopy($twitch_copy); ?></p>
                    <?php echo $socials; ?>
				</div>
				<div class="content-col"></div>
			</div>
			<div class="section contact" data-section-name="contact">
				<div class="copy-col">
					<h1>Get In Touch</h1>
					<p><?php echo formatCopy($contact_copy); ?></p>
                    <?php echo $socials; ?>
				</div>
				<div class="content-col"></div>
			</div>
		</div>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/scripts.js?ver=<?php echo filemtime( 'assets/js/scripts.js' ); ?>"></script>
        <script type="application/ld+json">
        {
        "@context" : "http://schema.org",
        "@type": "Person",
        "name" : "Adrian F.E.",
        "alternateName": [
        "Okaydrian"
        ],
        "logo" : "<?php echo $home_url; ?>assets/images/logo-solo.png",
        "image": "<?php echo $home_url; ?>assets/images/home.jpg",
        "url": "<?php echo $home_url; ?>",
        "email" :"okaydrian@gmail.com",
        "sameAs" :
        [ "https://twitch.tv/okaydrian",
        "https://twitter.com/okaydrian",
        "https://instagram.com/okaydrian",
        "https://www.youtube.com/OkayPerView"
        ],
        "description": "<?php echo formatCopySchema($home_copy); ?>"
        }
        }
        </script>
	</body>
</html>