<?php
namespace Solvercircle\Mapbox;

class Mapbox {
	public static function display($map_input=array())
	{
		if(!isset($map_input['key']))
		{
			$map_input['key']=\Config::get('Mapbox::config.key');			
		}
		if(!isset($map_input['width']))
		{
			$map_input['width']=\Config::get('Mapbox::config.width');			
		}
		if(!isset($map_input['height']))
		{
			$map_input['height']=\Config::get('Mapbox::config.height');
		}
		if(!isset($map_input['zoom']))
		{
			$map_input['zoom']=\Config::get('Mapbox::config.zoom');
		}
		if(!isset($map_input['class']))
		{
			$map_input['class']=\Config::get('Mapbox::config.class');
		}
		if(!isset($map_input['map_id']))
		{
			$map_input['map_id']=\Config::get('Mapbox::config.map_id');
		}
		
		if(!isset($map_input['center_title']))
		{
			$map_input['center_title']=\Config::get('Mapbox::config.center_title');			
		}
		if(!isset($map_input['center_description']))
		{
			$map_input['center_description']=\Config::get('Mapbox::config.center_description');			
		}
		if(!isset($map_input['show_center_marker']))
		{
			$map_input['show_center_marker']=\Config::get('Mapbox::config.show_center_marker');			
		}
		
		if(!isset($map_input['center_marker_size']))
		{		
			$map_input['center_marker_size']=\Config::get('Mapbox::config.marker_size');			
		}
		if(!isset($map_input['center_marker_color']))
		{
			$map_input['center_marker_color']=\Config::get('Mapbox::config.marker_color');			
		}
		
		if(!isset($map_input['center_marker_icon_width']))
		{		
			$map_input['center_marker_icon_width']=\Config::get('Mapbox::config.marker_icon_width');			
		}
		if(!isset($map_input['center_marker_icon_height']))
		{
			$map_input['center_marker_icon_height']=\Config::get('Mapbox::config.marker_icon_height');			
		}
		
		if(isset($map_input['markers']))
		{
			$markers=array();
			foreach($map_input['markers'] as $marker)
			{			
				if(!isset($marker['size']))
				{				
					$marker['size']=\Config::get('Mapbox::config.marker_size');					
				}
				if(!isset($marker['color']))
				{
					$marker['color']=\Config::get('Mapbox::config.marker_color');
					//die(print_r($marker));
				}
				
				if(\Config::get('Mapbox::config.show_marker_icon') && !isset($marker['icon_url']))
				{
					$marker['icon_url']=\Config::get('Mapbox::config.marker_icon_url');
				}
				
				if(!isset($marker['icon_width']))
				{
					$marker['icon_width']=\Config::get('Mapbox::config.marker_icon_width');
					//die(print_r($marker));
				}
				if(!isset($marker['icon_height']))
				{
					$marker['icon_height']=\Config::get('Mapbox::config.marker_icon_height');
					//die(print_r($marker));
				}
				//die(print_r($marker));
				array_push($markers,$marker);
			}
			$map_input['markers']=$markers;
		}
		
		//die(print_r($map_input));
			
		return \View::make('Mapbox::mapbox')
			->with('map_input', $map_input);
	}
}