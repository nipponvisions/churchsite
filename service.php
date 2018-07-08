<?php
/*
Template Name: servicetimes
*/
?>

<?php include('header.php'); ?>

	<div id="content_wrapper">
		
		<div id="inner_wrapper">
		
		<div id="content">
						
			<div id="main_content">
				
				<?php query_posts("category_name=service");
				$counter = 0;
				while (have_posts()) : the_post(); 

				$counter++;
				$preview = get_post_meta($post->ID, 'preview',true);
				?>

				

					<?php if($preview) {

					 the_post_thumbnail(); 

					}
					?>

					<div class="clear"></div>


				<h2><?php the_title(); ?></h2>

				<p><?php the_content(); ?></p>



				<?php
				endwhile; ?>
				
				
				
			</div><!--/main_content-->
			
		</div><!--/content-->
		
		<div id="sidebar">
			
			<ul id="submenu">
			<?php wp_list_pages("title_li=&child_of=113" ); ?>
			</ul>
			
			<div id="products">
			
			<h2>products</h2>
			
			<div class="product">
			
			<img src="<?php bloginfo('template_url'); ?>/images/cd_cover.jpg" height="82" width="82" alt="product" title="product" />
			
			<h3>a cd title</h3>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			
			</div><!--/product-->
			
			<div class="product">
			
			<img src="<?php bloginfo('template_url'); ?>/images/cd_cover_2.jpg" height="82" width="82" alt="product" title="product" />
			
			<h3>some book we wrote</h3>
			
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			
			
			
			</div><!--/product-->
				
		</div><!--/sidebar-->
		
		</div><!--/inner_wrapper-->
		
	</div><!--/content_wrapper-->
	
<?php include('footer.php'); ?>