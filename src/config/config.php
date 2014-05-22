<?php

return array(
    //Your Mapbox API Key
    'key' => 'examples.map-9ijuk24y',
	//Width of the map container. You can use pixel or percentage value
    'width' => '400px',
    //Height of the map container. You can use pixel or percentage value
    'height' => '300px',
    //default zoom level on map
    'zoom' => '6',
    //The default css class name of the map container
    'class' => '',
    //default id of the map container. It must be unique on the page
    'map_id' => 'mapbox',
	//Default title of the center marker    
    'center_title'=>'Hello',
	//Default description of the center marker
	'center_description'=>'Hi',
	//Set if it will show marker at center
	'show_center_marker'=>true,
	//The default size of any marker in the map
	'marker_size'=> 'large',
	//The default color of any marker in the map
	'marker_color'=> '#f0a',
	//Set if it should show the custom marker icon by default
	'show_marker_icon'=>false,
	//Default custom marker icon image url
	'marker_icon_url'=>'https://eastpaloalto.shotspotter.net/assets/images/icons/incident_map_marker.png',
	//Default custom marker icon width
	'marker_icon_width'=>24,
	//Default custom marker icon height
	'marker_icon_height'=>24
);
?>