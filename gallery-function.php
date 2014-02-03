<?php

// ********* Produce Image Gallery **********

/**
 * 1) Image Gallery Init.
 *
 * INPUT:
 * @param string $size : a registered image size.
 *
 * OUTPUT:
 * @return array $img_info : A functional image gallery array (with more custom size URLs than the ACF Gallery Array).
 * 
 */

function gallery_init($size = 'thumbnail') {

// 1) Test for acf_galerie_images
//    $has_gallery = false;
    $img_info = array();
    
    $galeries_photos = get_field('acf_galerie_images');
    
//     var_dump( get_field('acf_galerie_images') );
    		
    if ($galeries_photos) {
    
    		// tester aussi si $galeries_photos[0] > zero
    		// car le champ peut-être là, mais vide.

					if  ( $galeries_photos[0] > 0) {
					
						$has_gallery = true;
						$img_info = gallery_toolbox($galeries_photos,$size);
						
						// gallery_toolbox() is located in gallery-function.php
					
					}			
    				
    }
    
   return  $img_info;
    
} // end function gallery_init()


/**
 * 2) Image Gallery Array Generator.
 *
 *
 * @param array $img_list : The array produced by ACF Gallery Field.
 * @param string $size : a registered image size (thumbnail, medium, large, full...)
 * 
 * @return array $img_gallery_array : A functional image gallery array (with more custom size URLs than the ACF Gallery Array). 
 */

function gallery_toolbox($img_list = array(),$size = 'thumbnail') {
	
	$img_gallery_array = array();
	
	// idea: test for featured image
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
	 
} // end of function gallery_toolbox()