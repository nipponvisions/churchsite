<?php
/*
Template Name: missions
*/
?>

<?php include('header.php'); ?>

	<div id="content_wrapper">
		
		<div id="inner_wrapper">
		
		<div id="content">
						
			<div id="main_content">
				
				<h2>Missions/Outreach</h2>
				
				<?php query_posts("category_name=missions");
				
				while (have_posts()) : the_post(); 
				?>


				<h3><?php the_title(); ?></h3>

				<p><?php the_content(); ?></p>

				<?php $link = get_post_meta($post->ID, 'url', true); ?>
				
				<p><a href="<?php echo $link; ?>" target="blank"><?php echo $link; ?></a></p>

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
			
				<img src="<?php bloginfo('template_url'); ?>/images/book.jpg" height="115" width="82" alt="product" title="product" />
				
				<h3>A 21 Day Journey For Singles</h3>
				
				<p>Spiritual Warfare Prayers to unlock 
				your Marital Destiny.</p>
			
			</div><!--/product-->
			
			</div><!--products-->
				
		</div><!--/sidebar-->
		
		</div><!--/inner_wrapper-->
		
	</div><!--/content_wrapper-->
	
<?php include('footer.php'); ?>