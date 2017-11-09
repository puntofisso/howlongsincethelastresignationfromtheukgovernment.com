<?php
?>
<html>
<head><title>How long since the last resignation from the UK Government?</title></head>
<body>
<script id="twitter-wjs" src="https://platform.twitter.com/widgets.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=371522239658191';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<h1>How long since the last resignation from the UK Government?</h1>
<div id="time"></div>
<div id="name"></div>
<div id="sharing">

<a class="twitter-share-button"  href="http://howlongsincethelastresignationfromtheukgovernment.com/">Tweet</a>

<div class="fb-share-button" data-href="http://howlongsincethelastresignationfromtheukgovernment.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fhowlongsincethelastresignationfromtheukgovernment.com%2F&amp;src=sdkpreparse">Share</a></div>
</div>
<style>

h1 {	
	text-align: center;
	margin-top: 10%;
	font-family: "Helvetica","Arial", sans-serif;
	text-transform: uppercase;
}

#name,#time {
	text-align: center;
	font-family: "Helvetica","Arial", sans-serif;
	font-weight: bold;
}

#time {
	font-size: 50px;
}

#sharing {
	text-align: center;
}
</style>

<script>

function howlong() {


	<?php include('resignation.php'); ?>

    resignationTime = new Date(resignationDateS + " " + resignationTimeS+":00");
    delta = (new Date().getTime() - resignationTime) / 1000;

    // calculate (and subtract) whole days
var days = Math.floor(delta / 86400);
delta -= days * 86400;

// calculate (and subtract) whole hours
var hours = Math.floor(delta / 3600) % 24;
delta -= hours * 3600;

// calculate (and subtract) whole minutes
var minutes = Math.floor(delta / 60) % 60;
delta -= minutes * 60;

// what's left is seconds
var seconds = Math.floor(delta  % 60);

    document.getElementById('time').innerHTML=days + " days " + hours + " hours " + minutes + " minutes " + seconds + " seconds";
    document.getElementById('name').innerHTML=resignationName + " resigned on " + resignationDateS + " at " + resignationTimeS;
    setTimeout(howlong, 1000);
}

howlong();

</script>

</body>
</html>
