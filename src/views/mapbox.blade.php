<script src='//api.tiles.mapbox.com/mapbox.js/v1.4.0/mapbox.js'></script>
<link href='//api.tiles.mapbox.com/mapbox.js/v1.4.0/mapbox.css' rel='stylesheet' />
<!--[if lte IE 8]>
<link href='//api.tiles.mapbox.com/mapbox.js/v1.4.0/mapbox.ie.css' rel='stylesheet'>
<![endif]-->

<div id="{{$map_input["map_id"]}}" style="width:{{$map_input["width"]}}; height:{{$map_input["height"]}};" class="{{$map_input["class"]}}"></div>

<script type="text/javascript">
//var map = L.mapbox.map('{{$map_input["map_id"]}}', '{{$map_input["key"]}}', {attributionControl: false});
var map = L.mapbox.map('{{$map_input["map_id"]}}', '{{$map_input["key"]}}');
        map.setView([{{$map_input["lat"]}}, {{$map_input["lon"]}}], {{$map_input["zoom"]}});
		
		var center_marker={
            "type": "Feature",
            "geometry": {
                "type": "Point",
                "coordinates": [{{$map_input["lon"]}}, {{$map_input["lat"]}}]
            },
            "properties": {  
				@if (isset($map_input['center_title']))              
					title: '{{$map_input["center_title"]}}',
				@endif
				@if (isset($map_input['center_description']))              
					description: '{{$map_input["center_description"]}}',				
				@endif
				@if (isset($map_input['center_marker_icon_url']))
					"icon": {
						"iconUrl": '{{$map_input["center_marker_icon_url"]}}',
						"iconSize": [{{$map_input["center_marker_icon_width"]}}, {{$map_input["center_marker_icon_height"]}}] // size of the icon
					}
				@else				
					'marker-size': '{{$map_input["center_marker_size"]}}',
					'marker-color': '{{$map_input["center_marker_color"]}}'
				@endif
            }
        };
		
		

        var geoJson = [];
		@if ($map_input['show_center_marker'])
			geoJson.push(center_marker);
		@endif
		
		@foreach($map_input["markers"] as $value)
			var marker={
				"type": "Feature",
				"geometry": {
					"type": "Point",
					"coordinates": [{{$value["lon"]}}, {{$value["lat"]}}]
				},
				"properties": {
					@if (isset($value['title']))
						title: '{{$value["title"]}}',
					@endif
					@if (isset($value['description']))
						description: '{{$value["description"]}}',				   
					@endif
					@if (isset($value['icon_url']))
						"icon": {
							"iconUrl": '{{$value["icon_url"]}}',
							"iconSize": [{{$value["icon_width"]}}, {{$value["icon_height"]}}] // size of the icon
						}
					@else	             								
						'marker-size': '{{$value["size"]}}',
						'marker-color': '{{$value["color"]}}'
					@endif
				}
			};
			geoJson.push(marker);
		@endforeach

        // Set a custom icon on each marker based on feature properties
        map.markerLayer.on('layeradd', function(e) {
            var l_marker = e.layer,
			feature = l_marker.feature;
			
			if(feature.properties.hasOwnProperty('icon'))
			{
				l_marker.setIcon(L.icon(feature.properties.icon));
			}
        });


        // Add features to the map
        map.markerLayer.setGeoJSON(geoJson);
</script>

