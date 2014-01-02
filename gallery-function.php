<?php

/* Image Gallery Array Generator
**********************************/

function gallery_toolbox($img_list = array(),$size = 'thumbnail') {
	
	$img_gallery_array = array();
	
	// test for featured image
	// and put it first
	
	
	foreach ( $img_list as $image ) {
					 
					 // var_dump($image);
					
					$img_gallery_array[] = array( 
							"id" => $image["id"],
							"url-custom" => $image["sizes"][$size],
							"width-custom" => $image["sizes"][$size."-width"],
							"height-custom" => $image["sizes"][$size."-height"],
							
							"url-medium" => $image["sizes"]["medium"],
							"width-medium" => $image["sizes"]["medium-width"],
							"height-medium" => $image["sizes"]["medium-height"],
							
							"url-large" => $image["sizes"]["large"],
							"width-large" => $image["sizes"]["large-width"],
							"height-large" => $image["sizes"]["large-height"],
							
							"caption" => $image["caption"],
							"alt" => $image["alt"],
							// "gallery-title" => $gallery_title,
							// "gallery-descr" => $gallery_description,
					);
					
			} // end foreach
	 							
	 return $img_gallery_array;
}