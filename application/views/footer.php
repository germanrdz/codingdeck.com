
		</div> <!-- content -->
		<div id="footer">
			<b>CodingDeck.com</b> > The fabulous life of a developer |
			Designed by <a href="http://www.germanrodriguez.com.mx" target="_blank">German Rodriguez</a>
		</div>
		
		<div id="fb-root"></div>
		<script src="http://connect.facebook.net/en_US/all.js"></script>
		<script>
		  FB.init({appId: '111858858866466', status: true,
				   cookie: true, xfbml: true});
		  FB.Event.subscribe('auth.login', function(response) {
			window.location.reload();
		  });
		</script>
		
	</body>
</html>
