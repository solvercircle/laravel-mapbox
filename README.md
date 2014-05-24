laravel-mapbox
==============

This laravel package will help to show mapbox map with given options

How to Install
===================
1. Download the package through composer by adding "solvercircle/mapbox": "dev-master" in your project's composer.json
1. add 'Solvercircle\Mapbox\MapboxServiceProvider' in the providers under app.php config file
3. Run the following command
php artisan mapbox:install

Usage Example
======================
echo Solvercircle\Mapbox\Mapbox::display(array('lat'=>37.475256,'lon'=>-122.146646,'zoom'=>15,'center_title'=>'My Pizza Shop','center_description'=>'Delicious pizza','center_marker_size'=>'large','center_marker_color'=>'#000','markers'=>array(array('lat'=>37.474256,'lon'=>-122.146646,'size'=>'small','color'=>'#CCC'),array('lat'=>37.473256,'lon'=>-122.146646,'icon_url'=>'http://www.solvercircle.com/wp-content/themes/internet/images/icon/development.png','icon_width'=>50,'icon_height'=>50),array('lat'=>37.472256,'lon'=>-122.146646,'title'=>'My home'))));

Usage
===========
To create a mapbox map in browser, you just need pass an array that contains the map input values to display method under Mapbox class.
The map will be shown upon your give values and default values that are configured app/config/packages/solvercircle/mapbox/config.php

The possible map input values of the array that is passed to display method of Mapbox class.

key: Your Mapbox API Key

	
    width: Width of the map container. You can use pixel or percentage value
    
    height: Height of the map container. You can use pixel or percentage value
  
    zoom: zoom level on map
    
    class: css class name of the map container
    
    map_id: id of the map container. It must be unique on the page
	
    center_title:  title of the center marker    
	
	center_description:  description of the center marker
	
	show_center_marker: Set if it will show marker at center
	
	marker_size: The size of any marker in the map
	
	marker_color: color of any marker in the map
	
	markers: Array of markers. In each index of marker array, a marker is given as an associative array containing its options. The options in each marker are described in the following.
	
	lat: required. The latitude of the marker
	lon: required. The longitude of the marker
	icon_url:  optional. custom marker icon image url
	
	icon_width: optional. custom marker icon width
	
	icon_height:  optional. custom marker icon height
