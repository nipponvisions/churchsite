<?php
/*
Template Name: announcements
*/
?>

<?php include('header.php'); ?>

	<?php
	global $spEvents;
	$spEvents->loadDomainStylesScripts();
	?>

	<div id="content_wrapper">
		
		<div id="inner_wrapper">
		
		<div id="content">
						
			<div id="main_content">
				
				<h2>announcements</h2>
				
				<?php $wp_query->init(); ?>
			
				<?php query_posts("category_name=announcements");
				
				while (have_posts()) : the_post(); 

				
				?>
				
				<div id="announcements">
					<div class="announcement">
					

						<h4><?php the_title(); ?></h4>

						<p>	<?php the_content(); ?></p>
					
					</div><!--/event_right-->

				</div><!--events-->

				<?php
				endwhile; ?>
				
			</div><!--/main_content-->
			
		</div><!--/content-->
		
		<div id="sidebar">
			
			
			<ul id="submenu">
				<?php wp_list_pages("title_li=&child_of=3" ); ?>
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
				
			</div><!--/products-->
				
		</div><!--/sidebar-->
		
		</div><!--/inner_wrapper-->
		
	</div><!--/content_wrapper-->
	
<?php include