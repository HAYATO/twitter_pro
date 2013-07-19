<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php

require_once("twitteroauth/twitteroauth.php");

$consumer_key = "DF3072YxRj7kniKbrEMFQ";
$consumer_secret = "StS9GjBd8FTIea4wd9ZEzDTLC3L2ADZXfQUE76zjs";
$access_token = "65310190-YKiCtXetXemnnyTfA2ZrdB6g3U4KrWS6fFi6nA5sX";
$access_token_secret = "l4nz1kgTYyVikizGsdsr0z4FOa7c7YEiC8eEFaLRKJc";

$to = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

$req = $to->OAuthRequest(
	"https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=HAYATO_Y&page=".$_POST['post'],
	"GET",
	array("count"=>"5"
		));
$tweet = json_decode($req);

foreach ($tweet as $tw) {
	echo '<li>'.$tw -> text.'</li><br />';
}

?>
</body>
</html>
