<?php

function banner_preprocess_page(&$variables){
	
	$variables['active_trail'] = FALSE;
	
	//Get the active trail of the current page
	$active_trail = menu_get_active_trail();

	foreach($active_trail as $key => $value){
		
		//Retrieve the root menu item of the main-menu
		if(array_key_exists('menu_name', $value) && $value['menu_name'] == 'main-menu' && $value['plid'] == '0'){

			//Retrieve the image id associated with the active root menu item
			$fid = '';
			if(array_key_exists('other', $value['options'])){
				$fid = $value['options']['other']['fid'];
			}
	
			if($fid != ''){
				$file = file_load($fid);
				//Define a variable with the name of the image that we can use in page.tpl.php for the banner
				$variables['filename'] = $file->filename;
				//Display the banner in the page.tpl.php
				$variables['active_trail'] = TRUE;
			}
			
			break;
		}
	}
	
	/*
	foreach($variables['main_menu'] as $key => $value){

		//If the page is an item of 'main-menu'
		if( strstr($key, 'active-trail')){

			//Retrieve the active root menu item id
			$mlid = str_replace('menu-', '', str_replace(' active-trail', '', $key));
			
			//Retrieve the image id associated with the active root menu item
			$fid = '';
			$link = menu_link_load($mlid);
			if(array_key_exists('other', $link['options'])){
				$fid = $link['options']['other']['fid'];
			}
	
			if($fid != ''){
				$file = file_load($fid);
				//Define a variable with the name of the image that we can use in page.tpl.php for the banner
				$variables['filename'] = $file->filename;
				//Display the banner in the page.tpl.php
				$variables['active_trail'] = TRUE;
			}
			
			break;
		}
	}*/		
}



