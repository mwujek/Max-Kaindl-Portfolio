<!doctype html>
<!--[if lte IE 9 ]><html class="ie" lang="en"><![endif]-->
<!--[if gt IE 9 ]><html lang="en"><![endif]-->
<!--[if !IE ]> --><html lang="en"><![endif]-->
  <head>
    <title>Home / Max Kaindl Pottery</title>

    <meta charset="UTF-8">
    <!--[if IE ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script><![endif]-->
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1, width=device-width">
    <meta name="author" content="Max Kaindl Pottery">
    <meta name="description" content="Handmade pottery by Max Kaindl">
    <meta name="keywords" content="Mugs">

    

    <link rel="stylesheet" href="//cdn.bigcartel.com/theme_stylesheets/27702058/2811625894/theme.css">
        <link rel="stylesheet" href="css/theme.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
    <script src="http://cache0.bigcartel.com/theme_assets/6/1.3.0/theme.js" type="text/javascript"></script>

    <script type="text/javascript" charset="utf-8">
      $(function() {
        Store.init('home', {
          shippingEnabled: false,
          discountEnabled: false,
          showSearch: false
        });
      });
    </script>

    <!-- IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta name="generator" content="Big Cartel" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Varela+Round" />
    
    <!--CUSTOM SCRIPTS AND LINKS-->
    <!--TYPEKIT-->
    <script type="text/javascript" src="//use.typekit.net/toc4mjz.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    
  </head>

  <body id="home_page" class="theme no_transition">
    <div id="site_header" class="strip">
      <div class="canvas">
        <nav id="main_nav">
          <ul>
            <li><a href="index.html">Portfolio Home</a></li>
            <li id="store"><div class="external-link"></div><a href="http://maxkaindlpottery.bigcartel.com/" title="View Portfolio">Store</a>
            </li><li><a href="#" class="active-nav">Blog</a></li>
            <li ><a href="bio.html">Bio</a></li>
          </ul>
        </nav>

        <header>
            <h1 id="store_name"><a href="/">Max Kaindl Pottery</a></h1>

                        <img id="logo" src="img/logo.png">

          
        </header>

        <nav id="mobile_nav">
          <ul>
            <li id="menu-mobile"><a href="#site_footer" alt="See more options">Menu</a></li>
          </ul>
        </nav>
      </div>
    </div>

    
  <div id="content" class="strip">
      <div class="canvas fade_in">

      

      
        <header class="product_header page_header">
          <h1>Blog</h1>
          <span class="dash"></span>
        </header>

        <section id="page_body">
        

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
    </div>
    

    <div id="site_footer" class="strip">
      <footer class="canvas">
        
        <ul>
          <li><a href="index.html" alt="Home">Portfolio Home</a></li>
          <li><a href="http://maxkaindlpottery.bigcartel.com">Store</a></li>   
          <li><a href="blog.php">Blog</a></li>
          <li ><a class="active-nav" href="#">Bio</a></li>
          
          
          
        </ul>
        <p>Copyright &copy; 2014 Max Kaindl Pottery</p>

        

      </footer>
    </div>
  <script type="text/javascript">if (typeof NREUMQ !== "undefined") { if (!NREUMQ.f) { NREUMQ.f=function() {
NREUMQ.push(["load",new Date().getTime()]);
var e=document.createElement("script");
e.type="text/javascript";
e.src=(("http:"===document.location.protocol)?"http:":"https:") + "//" +
  "js-agent.newrelic.com/nr-100.js";
document.body.appendChild(e);
if(NREUMQ.a)NREUMQ.a();
};
NREUMQ.a=window.onload;window.onload=NREUMQ.f;
};
NREUMQ.push(["nrfj","beacon-1.newrelic.com","ecb267c352","11801","IlpXEUoLXF8DF0pKEg5HXEpLDF9E",3,10,new Date().getTime(),"","","","",""]);}</script></body>
</html>
