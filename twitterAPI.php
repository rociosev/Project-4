    <!--Twitter API-->
    
    <html>
        <head>
            
            
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
             <link href="css/twitter-blockquote.css" rel="stylesheet">
         <link href="css/iframe.css" rel="stylesheet">
     
        </head>
            <body>
               <div class="container">
    <?php
    ini_set('display_errors', 1); // this is how many errors you have. Since you don't want other people to know this you would delete this before going live.
    require_once('TwitterAPIExchange.php');
    
    /** Set access tokens here - see: https://dev.twitter.com/apps/ **/
    
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
    //$getfield = '?q=Expo2015';
     // https:'https://api.twitter.com/1.1/followers/tweets.json';
    $getfield = '?q=Expo2015';
    
    $requestMethod = 'GET';
    
    $twitter = new TwitterAPIExchange($settings);
    /* this is what we'll comment in or out to get info of twitter api*/
    /*
    echo $twitter->setGetfield($getfield)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest();
    */
                 
    $tweetData = json_decode($twitter->setGetfield($getfield)
                 ->buildOauth($url, $requestMethod)
                 ->performRequest(),$assoc = TRUE); /*here we are basically rewriting the echo things.*/
   
                
    foreach($tweetData['statuses'] as $items)
    {
        $userArray = $items['user'];
      //making the pics show up with the tweets.
        $entitiesArray = $items['entities'];
        $mediaArray = $entitiesArray['media'];
        $tweetMedia = $mediaArray[0];
        //shrink the image so that it fits in the box and no overflow
        $mediaResize = $tweetMedia['sizes']['thumb']['w'];
        echo "<div class='twitter-div'>"; //makes it smaller than the normal size.
        echo "<div><div class='user-pic'><a target='#' href='#" . $userArray['screen_name'] . "'><img class='user-pic' target='#' src='" . $userArray['profile_image_url'] . "'></a></div>";
        echo "<a target='#' href='#" . $userArray['screen_name'] . "'><span>" . $userArray['name'] . "</span>   </br><span>@" . $userArray['screen_name']. "</span></a> <span> ";
        echo "<div class='tweet'>" . $items['text'] . "</div>";
        echo "<a target='#' href='" . $tweetMedia['expanded_url'] . "'><img class='twitter-pics' target='#' src='" . $tweetMedia['media_url'] . "'></a>";
        echo "<span class='tweet-box'></span></div>";
        echo "</div>";
 
   /*****    Trash code****************
$entities = $items['entities'];
$media = $entities['media'];
$tweetMedia = $media[0];
$userArray = $items['user'];


   echo"<dic class='tweet-box'>";
   echo "<a target='#' href='#" . $items['user']['screen_name']  . "'><div class='name'></div></a>";

     echo "<img class='profile-image' src='" . $items['user']['profile_image_url'] ."'/> ";
    echo "<div class='name'>" . $items['user']['name']  . "</div>" ;
          echo "<div class='handle'>" . "@" . $items['user']['screen_name'] . "</div>" . "<br/>";
                echo "<div class='tweet'>" . $items['text'] . "<br/>";
              echo "<a target='#' href='" . $tweetMedia['expanded_url']."'><img class='pic-twitter' target='#' src='" . $tweetMedia['media_url'] . "'></a>";
         echo "<a target='#' href='https://twitter.com/intent/tweet?in_reply_to=" . $items['id'] . "'><div class='tweet-reply'></div></a>";
        echo "<a target='#' href='https://twitter.com/intent/retweet?tweet_id=" . $items['id'] . "'><div class='tweet-retweet'></div></a>";
        echo "<a target='#' href='https://twitter.com/intent/favorite?tweet_id=" . $items['id'] . "'><div class='tweet-favorite'></div></a>";
    "</div>";*/
    }
              
                // echo "<pre>";
                // print_r($script);
                // echo"</pre>";

    ?>
        
        
               </div>
        
                
                 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
          
          </body>
       </html>