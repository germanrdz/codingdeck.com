<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head> 
		<base href="<?= base_url() ?>" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
		<meta name="robots" content="all" /> 

		<?= link_tag("public/stylesheets/master.css"); ?>

		<title>Coding Deck : Panel</title> 
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
		
		<div id="content">
			<h1>Panel</h1>
		
		
		
		</div>
	
	</body>
</html>