<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head> 
		<base href="<?= base_url() ?>" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
		<meta name="robots" content="all" /> 

		<?= link_tag("public/stylesheets/master.css"); ?>

		<? foreach($stylesheets as $file): ?>
		<?= link_tag("public/stylesheets/" . $file . ".css"); ?>
		<? endforeach; ?>

		<? foreach($scripts as $file): ?>
		<script src="public/scripts/<?= $file ?>.js" type="text/javascript" charset="utf-8"></script>
		<? endforeach; ?>
		
		<title>Coding Deck</title> 
	</head>
	<body>
		
		<div id="header">
			<div class="logo">
				<h1>
					<a href="http://www.codingdeck.com">
						<span>Coding Desk</span>
					</a>
				</h1>
				The fabulous life of a developer
			</div>
			
			<div class="navigation">
				<?= anchor("blog", "Home"); ?>
				<?= anchor("blog/about", "About"); ?>
				<?= anchor("blog/contact", "Contact"); ?>
			</div>
		</div>
		
		<div id="sidebar">
			<div class="about_me">
				<h2>German Rodriguez</h2>
				<img class="imageStyle" alt="German Rodriguez" src="public/images/me.png" /><br /><br />
				<a href="http://www.germanrodriguez.com.mx">http://www.germanrodriguez.com.mx</a><br /><br />
				<a href="http://www.twitter.com/GerManson" rel="external">
					<img alt="follow me" src="public/images/follow_me.png" />
				</a>
			</div>
			
			<div class="categories">
				<h2>Categories</h2>

				<ul>
				<li><a href="http://germanson.bitacoras.com/categorias/cine">Cine</a> <span>(3)</span></li>
				<li><a href="http://germanson.bitacoras.com/categorias/computacion">Computacion</a> <span>(21)</span></li>
				<li><a href="http://germanson.bitacoras.com/categorias/escuela">Escuela</a> <span>(5)</span></li>
				<li><a href="http://germanson.bitacoras.com/categorias/general">General</a> <span>(56)</span></li>

				<li><a href="http://germanson.bitacoras.com/categorias/musica">Musica</a> <span>(27)</span></li>
				<li><a href="http://germanson.bitacoras.com/categorias/poemas-y-pensamientos">Poemas y Pensamientos</a> <span>(33)</span></li>
				</ul>
			</div>
		</div>
		
		<div id="content">