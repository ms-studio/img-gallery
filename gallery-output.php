<?php

// ********* Produce Image Gallery **********  
    
    global $has_gallery;
    global $img_info;
    
    if ($has_gallery == true) { 
    	
    		
    			// initialize
    			$counter = 0;
    			
    			echo '<section class="sub-content img-gallery">';
    					
    			echo '<div class="clear img-gallery-content">';
    				
    			echo '<a href="'.$img_info[0]["url-large"].'" class="colorbox img-gl-itm-big" data-caption="'.esc_attr($img_info[0]["caption"]).'" title="'.esc_attr($img_info[0]["caption"]).'"><img width="'.$img_info[0]["width-medium"].'" height="'.$img_info[0]["height-medium"].'" src="'.$img_info[0]["url-medium"].'" alt="'.esc_attr($img_info[0]["alt"]).'" class="attachment-thumbnail" style="max-width:'.$img_info[0]["width-medium"].'px" /></a>';
    			
    			// are there more images ?
    			
    			if (count($img_info) > 1) {
    			
    					echo '<div class="img-gallery-more">';
    					    			
		    			foreach ($img_info as $key => $item){
		    			
				    			if ($counter == 0){
				    					// first image : already there
				    			} else {
				    			
				    				// other images
				    			
				    				echo '<a href="'.$item["url-large"].'" class="colorbox img-gl-itm" data-caption="'.esc_attr($item["caption"]).'"><img width="'.$item["width-custom"].'" height="'.$item["height-custom"].'" src="'.$item["url-custom"].'" class="attachment-thumbnail" alt="'.esc_attr($item["alt"]).'" /></a>';	
				    			}
				    			
				    			$counter++; // increment by one
				    			
		    			} // end foreach
		    			
		    			echo '</div>';
    			
    			} // end if count.
    			
    			?>
    			</div>
    			
    			<?php
    			if ($galerie_credits) {
    			
    				echo '<footer class="credits-photo"><p class="small-font">';
    				
    				echo 'Photographie: '.$galerie_credits;
    					
    				echo '<p></footer>';
    			}
    			?>
    			
    			
    		</section>
    			<?php
    		}
    	
// end Images.
        
?>