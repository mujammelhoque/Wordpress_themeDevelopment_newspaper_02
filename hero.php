
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
          <?php 
              wp_nav_menu(
                array(
                  'theme_location' => 'My-top-menu',
                  'menu_class' => 'top_nav',
                  
                )
              );
              ?>
<!--               
            <ul class="top_nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="pages/contact.html">Contact</a></li>
            </ul> -->
          </div>
          <div class="header_top_right">
            <p><?php the_time( 'l, F jS, Y' ); ?></p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo">
            <?php 
           if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
           ?>
           </a></div>
          <div class="add_banner">
            <a href="#"><?php
              if(is_active_sidebar('header-ads')){
              dynamic_sidebar('header-ads');
              }
                ?></a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
      

        <?php 
              wp_nav_menu(
                array(
                  'theme_location' => 'header-menu',
                  'menu_class' => 'top_nav',
                  
                )
              );
              ?>
          <!--
              <ul class="nav navbar-nav main_nav">
             <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li><a href="#">Technology</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mobile</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Android</a></li>
              <li><a href="#">Samsung</a></li>
              <li><a href="#">Nokia</a></li>
              <li><a href="#">Walton Mobile</a></li>
              <li><a href="#">Sympony</a></li>
            </ul>
          </li>
          <li><a href="#">Laptops</a></li>
          <li><a href="#">Tablets</a></li>
          <li><a href="pages/contact.html">Contact Us</a></li>
          <li><a href="pages/404.html">404 Page</a></li> 
        </ul>-->
        
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea "> <span>Latest News</span>
          <!-- <ul id="ticker01" class="news_sticker"> -->
            <!-- <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My First News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Second News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Third News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Four News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Five News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Six News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Seven News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Eight News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail2.jpg" alt="">My Nine News Item</a></li> -->
            <h5 class="text-danger">
            <?php
$options = get_option( 'scl_simple_options' );
if($options['show'] == 'true'){
	?>
	<marquee>
	<?php
	$news = implode(" | " ,  explode(",",$options['message']));
_e($news);
	?>
	</marquee>
	<?php
}
?>
</h5>

<!-- 
          </ul> -->
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="www.facebook.com"></a></li>
              <li class="twitter"><a href="www.twitter.com"></a></li>
              <li class="flickr"><a href="https://www.flickr.com/"></a></li>
              <li class="pinterest"><a href="https://www.pinterest.com/"></a></li>
              <li class="googleplus"><a href="www.google.com"></a></li>
              <li class="vimeo"><a href="https://vimeo.com/"></a></li>
              <li class="youtube"><a href="www.youtube.com"></a></li>
              <li class="mail"><a href="www.gmail.com"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>