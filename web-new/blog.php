<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Max Kaindl Pottery</title>
  <meta name="author" content="Max Kaindl" />
  <meta name="keywords" content="Max Kaindl ceramics pottery traditional san francisco californa artist"/>
  <meta name="description" content="Portfolio of Max Kaindl, ceramic artistic residing in the Bay Area."/>
  <meta http-equiv="Content-Language" content="en" />
  <meta property="og:title" content="Max Kaindl Pottery" />
  <meta property="og:url" content="http://www.maxkaindlpottery.com/" />
  <link href='img/icon.ico' rel='shortcut icon' type='image/ico'>


  <!-- load pure grids -->


  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">


  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/jquery-rebox.css">
  <link rel="stylesheet" href="css/pure-grids.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- Load JQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <!-- Load Typekit Fonts -->
  <script src="//use.typekit.net/vbd3aie.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <script src="js/typed.js"></script>
  <script src="js/wuj.js"></script>

  <!-- load slideshow plugin -->
  <script src="js/jquery-rebox.js"></script>
</head>
<body>
  <div id="left-border"></div>
  <div id="right-border"></div>
  <div id="top-border"></div>
  <div id="bottom-border"></div>
  <div id="container">


    <div class="pure-g">
      <nav class="pure-u-1-6">
        <a href="index.html"><img id="logo" src="img/web-see-thru.png"></a>
        <ul id="navigation-list">
          <li><a id="work-button" href="#">Work</a>

            <ul class="sub-menu">
              <li><a href="teapots.html">Teapots</a></li>
              <li><a href="#">Drinking Vessels</a></li>
              <li><a href="#">Jugs</a></li>

            </ul>

          </li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="bio.html">Bio</a></li>
          <li><a href="http://maxkaindlpottery.bigcartel.com/" taget="_blank" id="store-button">Store</a></li>

        </ul>

      </nav>
      <div class="pure-u-2-3 main-content">
        <h1 class="section-title">Blog</h1>
        <h2 class="sub-title"><span class="typed-subtitle-blog multi-line-type" style="white-space:pre"></span></h2>
        <section class="work-text">

       <!-- blog code block -->
          <?
          $xml = simplexml_load_file('http://mattwujek.tumblr.com/api/read?type=post&start=0&num=8');
          $posts = $xml->xpath("/tumblr/posts/post[@type='regular']");

          foreach($posts as $post) {?>
          <?echo '<article class="blog-roll">';?>
          <?echo '<h1 class="post-title">'.$post->{'regular-title'}.'</h1>';?>
          <?echo '<h2 class="date">'.date("F jS, Y",strtotime($post['date'])).'</h2>';?>
          <?echo $post->{'regular-body'};?>
          <?echo '</article>';?>

          <?}?>


        </section>
      </div>


    </div> <!-- end of pure grids -->

  </div> <!-- end of container -->


  <script src="js/lightbox.js" async></script>
</body>
</html>