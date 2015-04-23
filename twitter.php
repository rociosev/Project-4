<!--Twitter API-->

<html>
    <head>
        
        
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
         <link href="css/twitter-blockquote.css" rel="stylesheet">
         </head>
        <body>
           <div class="container">
<?php
ini_set('display_errors', 1); // this is how many errors you have. Since you don't want other people to know this you would delete this before going live.
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/

/**Stevens
$settings = array(
    'oauth_access_token' => "16192753-C3Ah2Dg9JJLaaOZHyzFxPqW4jYF9iVTdq5alkSfBa",
    'oauth_access_token_secret' => "zAM5whJiLbi9d97EZkC5Ty5akHifwsYudXEkVi54",
    'consumer_key' => "7DupEseAPvT0aGaA9zwuKA",
    'consumer_secret' => "9Va802Pnpfd5nkz23ZIsqkQJjz2ZqLUxuAxzXQSI"
);
**/

$settings = array(
    'oauth_access_token' => "43644636-gbwY7coTl1K2tbIYuX6ZjJP9sbFI2oyNjBwfAqp8r",
    'oauth_access_token_secret' => "f4WBOnSqMqouLPhXIGBsCm68SrHVadZtVAecjkxRAL3Ke",
    'consumer_key' => "Rj1ZQF6wk2YVl4OWz0xvyKjAJ",
    'consumer_secret' => "NQIZDinRNPMrAw0FnN7cWbKpgrDynM6LGqHreRSDprP5Fqnfdb"
);


/** URL for REST request, see: https://dev.twitter.com/docs/api/1.1/ **/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$requestMethod = 'GET'; //POST we comment post out because we are going to use the GET method, not the post

/** POST fields required by the URL above. See relevant docs as above **/
$postfields = array(
    'screen_name' => 'usernameToBlock', 
    'skip_status' => '1'
);

/*The post and get requests both do the same thing so you need to choose on or the other. 
/** Perform a POST request and echo the response **/ // This is what makes it works, passes the information from twitter and sets it on the page.
/*$twitter = new TwitterAPIExchange($settings);
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();
*/
/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
/*$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=%23baseball'; /*q= is query and %23 is hashtag so we are looking for #baseball*/

https:'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=%23Expo2015';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
/* this is what we'll comment in or out to get info of twitter api*/

echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

             
$tweetData = json_decode($twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE); /*here we are basically rewriting the echo things.*/

             echo $tweetData;            
foreach($tweetData['statuses'] as $items)
{

  echo "<img class='profile-image' src='" . $items['user']['profile_image_url'] . "'/> <br>";
    
    
    echo "<div class='twitter-tweet'>Tweet: " . $items['text'] .  "</div>";
    
    echo "When: " . $items['created_at'] . "</br>";
   /*  echo "When: " . $items['user'] . "</br>";
     echo "language: " . $iterms['"iso_language_code": "en"'] . "</br>";
       echo "screen_name: " . $items['screen_name'] . "</br>";
        echo "Source: " . $items['source'] . "</br>";
         echo "Id: " . $items['590494687988965376'] . "</br>";
         */
         echo "name: " . $items['user']['name'] . "</br>";
           echo "screen_name: @" . $items['user']['screen_name'] . "</br>";
         
     
}
          
             echo "<pre>";
             print_r($script);
             echo"</pre>";
?>
    
    
           </div>
    
            
             <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      
      </body>
   </html>
             