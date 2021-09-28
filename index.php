<?php 
define('ASSETS_CSS',get_template_directory_uri()."/assets/css");
define('ASSETS_IMAGES',get_template_directory_uri()."/assets/images");
define('ASSETS_JS',get_template_directory_uri()."/assets/js");
 ?>
<!DOCTYPE html>
<html>
<head>
<title>NewsFeed</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
 <?php echo get_template_part('hero');?>
 
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">

        <div class="slick_slider">

<?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();?>
          <div class="single_iteam"> <a href="pages/single_page.html"><?php the_post_thumbnail( 'large' ); ?></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html"><?php the_title( ' ' );  ?></a></h2>
              <p><?php the_excerpt() ?></p>
            </div>
          </div>
<?php     
endwhile;
else :
    _e( 'Sorry, no posts were found.', 'textdomain' );
endif; 
?>
<!-- 
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider_img2.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider_img3.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/slider_img1.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
            <ul class="slides">
          </div> -->
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
            <?php
              $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>'5','offset'=>'1' ) );
                if ( $the_query->have_posts() ) {
     
                  while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                      ?>
                  


                <li>
                  <div class="media wow fadeInDown"> <a href="<?php the_permalink();  ?>" class="media-left"> <?php the_post_thumbnail( 'thumbnail', array('class' => 'img-fluid') ); ?>  </a>
                    <div class="media-body"> <a href="<?php the_permalink();  ?>" class="catg_title"> <?php the_title();  ?></a> </div>
                  </div>
                </li>

                <?php 
                  }
              } else {
                  // no posts found
              }
              /* Restore original Post Data */
              wp_reset_postdata();
                ?>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Business</span></h2>
            <div class="single_post_content_left">
             
                <?php 
               $the_query = new WP_Query( array( 'cat' => 19, 'posts_per_page'=>'1' ) );
                if ( $the_query->have_posts() ) {
                  echo '<ul class="business_catgnav  wow fadeInDown">';
                  while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                      ?>
                      <li>
                  <figure class="bsbig_fig"> <a href="<?php the_permalink();  ?>" class="featured_img">
                  <?php the_post_thumbnail( 'medium', array('class' => 'img-fluid') ); ?> 
                   <span class="overlay"></span> </a>
                    <figcaption> <a href="pages/single_page.html"><?php the_title() ; ?></a> </figcaption>
                    <p><?php the_excerpt() ?>...</p>
                  </figure>
                </li>
                      
                      <?php 
                  }
                  echo '</ul>';
              } else {
                  // no posts found
              }
              /* Restore original Post Data */
              wp_reset_postdata();
                ?>

                


            
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <?php
              $the_query = new WP_Query( array( 'cat' => 19, 'posts_per_page'=>'4','offset'=>'1' ) );
                if ( $the_query->have_posts() ) {
     
                  while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                      ?>
                  


                <li>
                  <div class="media wow fadeInDown"> <a href="<?php the_permalink();  ?>" class="media-left"> <?php the_post_thumbnail( 'thumbnail', array('class' => 'img-fluid') ); ?>  </a>
                    <div class="media-body"> <a href="<?php the_permalink();  ?>" class="catg_title"> <?php the_title();  ?></a> </div>
                  </div>
                </li>

                <?php 
                  }
              } else {
                  // no posts found
              }
              /* Restore original Post Data */
              wp_reset_postdata();
                ?>



              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Fashion</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img2.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">

                <?php
              $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>'4','offset'=>'1' ) );
                if ( $the_query->have_posts() ) {
     
                  while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                      ?>
                  


                <li>
                  <div class="media wow fadeInDown"> <a href="<?php the_permalink();  ?>" class="media-left"> <?php the_post_thumbnail( 'thumbnail', array('class' => 'img-fluid') ); ?>  </a>
                    <div class="media-body"> <a href="<?php the_permalink();  ?>" class="catg_title"> <?php the_title();  ?></a> </div>
                  </div>
                </li>

                <?php 
                  }
              } else {
                  // no posts found
              }
              /* Restore original Post Data */
              wp_reset_postdata();
                ?>


<!--                 
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li> -->
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Technology</span></h2>
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="images/featured_img3.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">

                <?php
              $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>'4','offset'=>'1' ) );
                if ( $the_query->have_posts() ) {
     
                  while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                      ?>
                  


                <li>
                  <div class="media wow fadeInDown"> <a href="<?php the_permalink();  ?>" class="media-left"> <?php the_post_thumbnail( 'thumbnail', array('class' => 'img-fluid') ); ?>  </a>
                    <div class="media-body"> <a href="<?php the_permalink();  ?>" class="catg_title"> <?php the_title();  ?></a> </div>
                  </div>
                </li>

                <?php 
                  }
              } else {
                  // no posts found
              }
              /* Restore original Post Data */
              wp_reset_postdata();
                ?>


<!--                 
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>Photography</span></h2>
            <ul class="photograph_nav  wow fadeInDown">

            <?php
              $the_query = new WP_Query( array( 'post_post' => 'post', 'posts_per_page'=>'6') );
                if ( $the_query->have_posts() ) {
     
                  while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                      ?>
                  


                  <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php the_permalink();  ?>" title="Photography Ttile 1"> <?php the_post_thumbnail( 'thumbnail', array('class' => 'img-fluid') ); ?> </a> </figure>
                </div>
              </li>

                <?php 
                  }
              } else {
                  // no posts found
              }
              /* Restore original Post Data */
              wp_reset_postdata();
                ?>



<!--               
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img4.jpg" title="Photography Ttile 4"> <img src="images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img2.jpg" title="Photography Ttile 5"> <img src="images/photograph_img2.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="images/photograph_img3.jpg" title="Photography Ttile 6"> <img src="images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li> -->
            </ul>
          </div>
          <div class="single_post_content">
            <h2><span>Games</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="pages/single_page.html"> <img src="images/featured_img1.jpg" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">

              <?php
              $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>'4','offset'=>'1' ) );
                if ( $the_query->have_posts() ) {
     
                  while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                      ?>
                  


                <li>
                  <div class="media wow fadeInDown"> <a href="<?php the_permalink();  ?>" class="media-left"> <?php the_post_thumbnail( 'thumbnail', array('class' => 'img-fluid') ); ?>  </a>
                    <div class="media-body"> <a href="<?php the_permalink();  ?>" class="catg_title"> <?php the_title();  ?></a> </div>
                  </div>
                </li>

                <?php 
                  }
              } else {
                  // no posts found
              }
              /* Restore original Post Data */
              wp_reset_postdata();
                ?>

<!--                 
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                  </div>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
            <?php
              $the_query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>'4','offset'=>'5' ) );
                if ( $the_query->have_posts() ) {
     
                  while ( $the_query->have_posts() ) {
                      $the_query->the_post();
                      ?>
                  


                <li>
                  <div class="media wow fadeInDown"> <a href="<?php the_permalink();  ?>" class="media-left"> <?php the_post_thumbnail( 'thumbnail', array('class' => 'img-fluid') ); ?>  </a>
                    <div class="media-body"> <a href="<?php the_permalink();  ?>" class="catg_title"> <?php the_title();  ?></a> </div>
                  </div>
                </li>

                <?php 
                  }
              } else {
                  // no posts found
              }
              /* Restore original Post Data */
              wp_reset_postdata();
                ?>


<!-- 
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                </div>
              </li> -->
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <?php  wp_list_categories();?>
                  <!-- <li class="cat-item"><a href="#">Sports</a></li>
                  <li class="cat-item"><a href="#">Fashion</a></li>
                  <li class="cat-item"><a href="#">Business</a></li>
                  <li class="cat-item"><a href="#">Technology</a></li>
                  <li class="cat-item"><a href="#">Games</a></li>
                  <li class="cat-item"><a href="#">Life &amp; Style</a></li>
                  <li class="cat-item"><a href="#">Photography</a></li> -->
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <!-- <a class="sideAdd" href="https://www.daraz.bd.com"><img src="<?php //echo get_template_directory_uri() ?>/images/add_img.jpg" alt=""></a> </div> -->
            <a class="" href="https://www.daraz.bd.com"><?php 
             if(is_active_sidebar('sponsor-ads')){
              dynamic_sidebar('sponsor-ads');
              }
            ?></a> </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Category Archive</span></h2>
            <select class="catgArchive">
              <option>Select Category</option>
              <option>Life styles</option>
              <option>Sports</option>
              <option>Technology</option>
              <option>Treads</option>
            </select>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Rss</span></h2>
            <?php
              if(is_active_sidebar('sidebar-rss')){
              dynamic_sidebar('sidebar-rss');
              }
                ?>
            <!-- <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Rss Feed</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Life &amp; Style</a></li>
            </ul> -->
          </div>
        </aside>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>