<?php

/* Image Gallery Array Generator
**********************************/

function gallery_toolbox($img_list = array(),$size = 'thumbnail') {
	
	$img_gallery_array = array();
	
	// test for featured image
	// and put it first
	
	
	foreach ( $img_list as $image ) {
					 
					 // var_dump($image);
					 
					 // test for image mime types
					 // allowed: image/jpeg
					 // not allowed: image/tiff
					 
					 $img_mime_types = array("image/jpeg", "image/png", "image/gif");
					 
					 if (in_array($image["mime_type"], $img_mime_types)) {
					
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
							
						} // else: wrong mime type
					
			} // end foreach
	 							
	 return $img_gallery_array;
}