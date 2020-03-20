<?php

//returns a big old hunk of JSON from a non-private IG account page.
function scrape_insta($username) {
	$insta_source = file_get_contents('http://instagram.com/'.$username);
	$shards = explode('window._sharedData = ', $insta_source);
	$insta_json = explode(';</script>', $shards[1]); 
	$insta_array = json_decode($insta_json[0], TRUE);
	return $insta_array;
}

//Supply a username
$my_account = 'spalongevity'; 

//Do the deed
$results_array = scrape_insta($my_account);
echo var_dump($results_array['entry_data']['ProfilePage'][0]["graphql"]['user']['edge_owner_to_timeline_media']['edges']);
echo var_dump(array_keys($results_array['entry_data']['ProfilePage'][0]["graphql"]['user']['edge_owner_to_timeline_media']['edges']));
//An example of where to go from there
$latest_array = $results_array['entry_data']['ProfilePage'][0]["graphql"]['user']['edge_owner_to_timeline_media']['edges'];

foreach ($latest_array as $index => $line) {
	if ($index < 6) {
		$data = $line['node'];
		echo '<li class="wow fadeInUp animated col-md-2 col-sm-2 col-xs-6 m-b-0" style="padding: 2px;visibility: visible; animation-name: fadeInUp;"><figure><a href="http://instagram.com/p/'.$data['shortcode'].'" target="blank"><img src="'.$data['display_url'].'" alt="Instagram image" height="122" width="122"></a></figure></li>';
	}
	// echo 'Latest Photo:<br/>';
	// echo '<a href="http://instagram.com/p/'.$data['shortcode'].'"><img src="'.$data['display_url'].'"></a></br>';
	// echo 'Likes: '.$data['likes']['count'].' - Comments: '.$data['comments']['count'].'<br/>';
}

/* BAH! An Instagram site redesign in June 2015 broke quick retrieval of captions, locations and some other stuff.
echo 'Taken at '.$latest_array['location']['name'].'<br/>';
//Heck, lets compare it to a useful API, just for kicks.
echo '<img src="http://maps.googleapis.com/maps/api/staticmap?markers=color:red%7Clabel:X%7C'.$latest_array['location']['latitude'].','.$latest_array['location']['longitude'].'&zoom=13&size=300x150&sensor=false">';
?>
*/