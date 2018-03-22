<!-- by twitter.com/leukissanders -->

<!doctype html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101734464-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-101734464-1');
	</script>

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta property="og:url"           content="https://gewoonnee.nl" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Nee. Gewoon nee." />
  <meta property="og:description"   content="Nee." />
  <!-- <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" /> -->
	
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

	<script async defer src="https://buttons.github.io/buttons.js"></script>

	<title>Nee. Gewoon Nee</title>
</head>
<body>
	<div id="container">
		<a href="http://giphy.com"><img class="poweredby" src="img/giphy.png" width="85px" alt="Powered by Giphy"/></a>
		<div class="gifwrap">
			<h1>Nee.</h1>
			<p>Gewoon nee</p>
			<img class="gif" src="
			<?php
				include 'apikey.php';
				$url = "http://api.giphy.com/v1/gifs/random?tag=no&api_key=".$api_key."&limit=1";
				$gif = json_decode(file_get_contents($url));
				$gif = reset($gif);
				print_r($gif->images->original->url);
			?>" alt="awesome NO gif">
			<p class="refresh">🔀 <a href="/">Andere gif</a></p>
		</div>
		<div class="social">
			<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fgewoonnee.nl&layout=button_count&size=small&mobile_iframe=true&appId=221247907903894&width=69&height=20" width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			<a class="github-button" href="https://github.com/sanderjn/gewoonnee" data-show-count="true" aria-label="Star sanderjn/gewoonnee on GitHub">Star</a>
		</div>
	</div>
</body>
</script>
</html>