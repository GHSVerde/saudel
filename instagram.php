<?php
  // PARA FUNCIONAR É NESSARIO INSTALAR A DEPENDENCIA 
  // $ composer require raiym/instagram-php-scraper
  require __DIR__ . '/vendor/autoload.php';

  $instagram = new \InstagramScraper\Instagram();

  $max_imgs = 6;
  $hastag = 'spalongevity';
  $username = 'spalongevity';
  $square_img_resolution = 2;
  // $media = $instagram->getMedias($username, 100);
  $media = $instagram->getCurrentTopMediasByTagName($hastag);
?>

<style>
  .instagram-block {padding-top: 90px;padding-bottom: 0;display: inline-block;width: 100%;vertical-align: bottom;}
  .instagram-image-row {overflow: hidden;display: block;}
  .instagram-image-row ul {font-size: 0;}
  .instagram-image-row ul li {display: inline-block;font-size: 14px;vertical-align: top;/*width: 14.31%;*/position: relative;margin-right: -0.5px;}
  .instagram-image-row ul {display: inline-block;overflow: hidden;vertical-align: bottom;}
  .instagram-image-row ul li figure {margin-bottom: 0;overflow: hidden;}
  .instagram-image-row li img {width: 100%;display: block;height: auto;object-fit: cover;}
  .follow-at {font-size: 17px;color: #60ba62;font-family: 'Montserrat-Regular', sans-serif;}
  .tag-at {font-size: 17px;color: #60aeba;font-family: 'Montserrat-Regular', sans-serif;}
  .tag-at:hover {color: #79a2a9;}
  .instagram-block h4 {margin-bottom: 5px;}
  .instagram-block .top-text-header {margin-bottom: 30px;}
</style>

<section class="block instagram-block">
    <div class="container">
        <div class="top-text-header text-center">
            <h4 class="text-uppercase text-sp text-lt">SIGA O NOSSO INSTAGRAM</h4>
            <?php if (isset($username)): ?>
              <a class="follow-at text-spx text-lt" href="https://www.instagram.com/<?php echo $username;?>" target="blank">@<?php echo $username;?></a>
            <?php endif ?>
            
            <?php if (isset($hastag)): ?>
              <a class="tag-at text-spx text-lt" href="https://www.instagram.com/explore/tags/<?php echo $hastag;?>" target="blank">#<?php echo $hastag;?></a>
            <?php endif ?>
          </div>
    </div>
    <div class="instagram-image-row">
        <ul class="container-fluid">
            <?php 
              foreach ($media as $index => $img) {
                if ($index < $max_imgs) {
                  $src = $img['squareImages'][$square_img_resolution];
                  $shortcode = $img['shortcode'];
                  echo '<li class="wow fadeInUp animated col-md-2 col-sm-2 col-xs-6 m-b-0" style="padding: 2px;visibility: visible; animation-name: fadeInUp;"><figure><a href="http://instagram.com/p/'.$shortcode.'" target="blank"><img src="'.$src.'" alt="Instagram image" height="122" width="122"></a></figure></li>';
                }
              }
            ?>
        </ul>
    </div>
</section>