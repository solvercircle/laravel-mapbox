laravel-mapbox
==============

This laravel package will help to show mapbox map with given options

How to Install
===================
1. Download the package through composer by adding "solvercircle/mapbox": "dev-master" in your project's composer.json
1. add the following in the providers array under app.php config file
 'Solvercircle\Mapbox\MapboxServiceProvider'
3. Run the following command
 php artisan mapbox:install

Usage Example
======================
	$map_input=array(

		'lat'=>37.475256,
		
		'lon'=>-122.146646,
		
		'zoom'=>15,
		
		'center_title'=>'My Pizza Shop',
		
		'center_description'=>'Delicious pizza',
		
		'center_marker_size'=>'large',
		
		'center_marker_color'=>'#000',
		
		'markers'=>array(
		
			array('lat'=>37.474256,'lon'=>-122.146646,'size'=>'small','color'=>'#CCC'),
			
			array('lat'=>37.473256,'lon'=>-122.146646,'icon_url'=>
			'http://www.solvercircle.com/wp-content/themes/internet/images/icon/development.png',
			'icon_width'=>50,'icon_height'=>50),
			
			array('lat'=>37.472256,'lon'=>-122.146646,'title'=>'My home','description'=>'Sweet home')
			
		)
		
	);
	
	echo Solvercircle\Mapbox\Mapbox::display($map_input);

Usage
===========
To create a mapbox map in browser, you just need pass an array that contains the map input values to display method under Mapbox class. The map will be shown upon your give values and default values that are configured app/config/packages/solvercircle/mapbox/config.php

Please note, the config file of this package is app/config/packages/solvercircle/mapbox/config.php. In that file you can 
configure the default values of map inputs.

The possible map input values of the array that is passed to display method of Mapbox class.

	key: Your Mapbox API Key. The default value is the value of 'key' index in the config file.
	
	lat: required. The latitude of the center
	
	lon: required. The longitude of the center
	
	width: Width of the map container. You can use pixel or percentage value. The default value is the value of 'width' index in the config file.
	
	height: Height of the map container. You can use pixel or percentage value. The default value is the value of 'height' index in the config file.
	
	zoom: zoom level on map. The default value is the value of 'zoom' index in the config file.
	
	class: css class name of the map container. The default value is the value of 'class' index in the config file.
	
	map_id: id of the map container. It must be unique on the page. The default value is the value of 'map_id' index in the config file.
	
	center_title:  title of the center marker. The default value is the value of 'center_title' index in the config file.
	
	center_description:  description of the center marker. The default value is the value of 'center_description' index in the config file.
	
	show_center_marker: Set if it will show marker at center. The default value is the value of 'show_center_marker' index in the config file.
	
	center_marker_size: The size of any marker in the map. The default value is the value of 'marker_size' index in the config file.
	
	center_marker_color: color of any marker in the map. The default value is the value of 'marker_color' index in the config file.
	
	markers: Array of markers. In each index of marker array, a marker is given as an associative array containing its options. The options in each marker are described in the following.
	
		lat: required. The latitude of the marker
		
		lon: required. The longitude of the marker
		
		icon_url:  custom marker icon image url
		
		icon_width: custom marker icon width. The default value is the value of 'marker_icon_width' index in the config file.
		
		icon_height:  custom marker icon height. The default value is the value of 'marker_icon_height' index in the config file.


