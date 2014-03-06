<?php

// ********* Produce Image Gallery **********

/**
 * Produces an image gallery
 *
 * Output:
 * $has_gallery - true or false
 * $img_info - array containing all images
 * $galerie_credits - photographer info (string)
 */

// 1) Test for acf_galerie_images
    
    $has_gallery = false;
    $img_info = array();
    
    $galeries_photos = get_field('acf_galerie_images');
    
//     var_dump( get_field('acf_galerie_images') );
    		
    if ($galeries_photos) {
    
    		// tester aussi si $galeries_photos[0] > zero
    		// car le champ peut-être là, mais vide.

					if  ( $galeries_photos[0] > 0) {
					
						$img_info = gallery_toolbox($galeries_photos);
						
						if ($img_info) {
							$has_gallery = true;
						}
						
						// gallery_toolbox() is located in gallery-function.php
					
					}			
    				
    }
    
    $galerie_credits = get_field('acf_infos_photographe');

// Output is handled by gallery-output.php
        
?>