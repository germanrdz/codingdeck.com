<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> 
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
		
		<script src="public/scripts/jquery.js" type="text/javascript" charset="utf-8" ></script>
		<script src="public/scripts/last.fm.records.js" type="text/javascript" charset="utf-8" /></script>
		
		<script src="public/scripts/blog.js" type="text/javascript" charset="utf-8" /></script>
		
		<title>Coding Deck</title> 
		
		<!-- Google Analytics -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-8479264-5']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		
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
			
			<div class="user_login">
				 <?php if ($login) { ?>
					<img src="http://graph.facebook.com/<?= $user->id ?>/picture?type=square" align="left"/> 
					<?= $user->name ?><br />
					<a id="fb_logout">logout</a>
				<?php } else { ?>
					<fb:login-button></fb:login-button>
				<?php } ?>
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
				<h3>I have been listening to...</h3>
				<div id="lastfmrecords"></div>
			</div>
					
		</div>
		
		<div id="content">