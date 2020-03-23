<?php
require __DIR__ . '/vendor/autoload.php';

function printMediaInfo(\InstagramScraper\Model\Media $media, $padding = '') {
    echo "${padding}Id: {$media->getId()}\n";
    echo "${padding}Shortcode: {$media->getShortCode()}\n";
    echo "${padding}Created at: {$media->getCreatedTime()}\n";
    echo "${padding}Caption: {$media->getCaption()}\n";
    echo "${padding}Number of comments: {$media->getCommentsCount()}\n";
    echo "${padding}Number of likes: {$media->getLikesCount()}\n";
    echo "${padding}Get link: {$media->getLink()}\n";
    echo "${padding}High resolution image: {$media->getImageHighResolutionUrl()}\n";
    echo "${padding}Media type (video/image/sidecar): {$media->getType()}\n";
}

// If account is public you can query Instagram without auth
$instagram = new \InstagramScraper\Instagram();

// If account is private and you subscribed to it firstly login
// $instagram = \InstagramScraper\Instagram::withCredentials('mateusarenasgioio', 'mateusarenas45781973');
// $instagram->login();
$max_imgs = 6;
$hastag = 'spalongevity';
// $media = $instagram->getMedias('spalongevity', 100);
$media = $instagram->getCurrentTopMediasByTagName($hastag);
// echo var_dump($media);


foreach ($media as $index => $img) {
  if ($index < $max_imgs) {
    $src = $img['squareImages'][2];
    $shortcode = $img['shortcode'];
    echo '<li  class="wow fadeInUp animated col-md-2 col-sm-2 col-xs-6 m-b-0" style="padding: 2px;visibility: visible; animation-name: fadeInUp;"><figure><a href="http://instagram.com/p/'.$shortcode.'" target="blank"><img src="'.$src.'" alt="Instagram image" height="122" width="122"></a></figure></li>';
  }
}

// $padding = '   ';
// echo "Sidecar medias info:\n";
// foreach ($media->getSidecarMedias() as $sidecarMedia) {
//     printMediaInfo($sidecarMedia, $padding);
//     echo "\n";
// }

// $account = $media->getOwner();
// echo "Account info:\n";
// echo "Id: {$account->getId()}\n";
// echo "Username: {$account->getUsername()}\n";
// echo "Full name: {$account->getFullName()}\n";
// echo "Profile pic url: {$account->getProfilePicUrl()}\n";
?>