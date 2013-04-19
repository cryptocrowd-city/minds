<?php
/**
 * Index View
 */
$img_src = elgg_get_site_url() == 'http://www.minds.com/' ? elgg_get_site_url().'mod/minds/graphics/minds_logo.png' : elgg_get_site_url().'mod/minds/graphics/minds_logo_io.png';
?>
<div class='minds_index'>
    <div class="logo">
        <img src="<?php echo $img_src;?>" width="200" height="90" />
    </div>
    <div class="search">
            <form action="<?php echo elgg_get_site_url(); ?>search" method="get">
             
                    <input type="text" name="q" value=""  placeholder="<?php echo elgg_echo('search');?>" />
                    <button type="submit" value="search" class="elgg-button elgg-button-submit">Search</button>
                    <input type="hidden" name="search" value="1" />
    
            </form>
        
    </div>
    <div class='splash'>
		Organizing the world's free & open information
	</div>
		<div class='block'>
			<div class='news-block'>
				<h2>Featured News</h2>
				<?php echo minds_elastic_list_news(array('action_types'=> 'feature', 'limit'=>4));?>
			</div>
			<div class='side-block'>
				<?php if(!elgg_is_logged_in()) {
				 echo elgg_view_form('login');
				 echo '<p>Minds is a universal network to search, create and share free information.</p>';
				 } else {
				 	elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());
					echo elgg_view('page/elements/miniprofile');
					echo elgg_view('page/elements/friends');
				}
				?>
			</div>
		</div>
  	<div class='featured_wall'>
  		<h2>Featured content</h2>
	   <?php 
	    /**
		 * Video carousel
		 */
	   	$videos = minds_get_featured('kaltura_video', 12);
		echo '<h3>Videos <a href="'.elgg_get_site_url().'archive/all">(more)</a></h3>';
		echo elgg_view('output/carousel', array('id'=>'videos','entities'=>$videos));
		
		/**
		 * Blog carousel
		 */
		elgg_load_library('elgg:blog');
		$blogs = blog_get_featured(12);
		echo '<h3>Blogs <a href="'.elgg_get_site_url().'blog/all">(more)</a></h3>';
		echo elgg_view('output/carousel', array('id'=>'blogs','entities'=>$blogs));
		
		/**
		 * Images
		 */
		//elgg_load_library('elgg:blog');
		$images = minds_get_featured('image',12);
		echo '<h3>Images <a href="'.elgg_get_site_url().'photos/all">(more)</a></h3>';
		echo elgg_view('output/carousel', array('id'=>'images','entities'=>$images));
		
		?>
   </div>
</div>
