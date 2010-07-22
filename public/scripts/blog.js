$(document).ready( function() {
	  var _config = {username: 'GerManson',        // last.fm username
					 placeholder: 'lastfmrecords',       // id of the div in HTML to use for cd covers
					 defaultthumb: 'public/images/lastfm_logo.jpg',  // image to show when no cd cover or artist image was found
					 period: '3month',              // which period/type of data do you want to show? you can choose from
														 // recenttracks, 7day, 3month, 6month, 12month, overall, topalbums and lovedtracks
					 count: 20,                          // number of images to show
					 refresh: 30,                         // when to get new data from last.fm (in minutes)
					 offset: 7                          // difference between your timezone and GMT.
					};

	  lastFmRecords.debug();                             // log to console
	  lastFmRecords.init(_config);
	  
	$("#fb_logout").click(function() {
		FB.logout(function(response) {
			location.reload(true);
		})
	}).hover("css", "cursor", "pointer");
	
});
