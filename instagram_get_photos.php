<?php
require __DIR__ . '/vendor/autoload.php';

$instagram = new \InstagramScraper\Instagram();

$max_imgs = 6;
$hastag = 'spalongevity';
$username = 'spalongevity';
// $media = $instagram->getMedias($username, 100);
$media = $instagram->getCurrentTopMediasByTagName($hastag);

foreach ($media as $index => $img) {
  if ($index < $max_imgs) {
    $src = $img['squareImages'][2];
    $shortcode = $img['shortcode'];
    echo '<li class="wow fadeInUp animated col-md-2 col-sm-2 col-xs-6 m-b-0" style="padding: 2px;visibility: visible; animation-name: fadeInUp;"><figure><a href="http://instagram.com/p/'.$shortcode.'" target="blank"><img src="'.$src.'" alt="Instagram image" height="122" width="122"></a></figure></li>';
  }
}
?>