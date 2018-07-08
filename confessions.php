<?php
/*
Template Name: confessions
*/
?>

<?php include('header.php'); ?>

	<div id="content_wrapper">
		
		<div id="inner_wrapper">
		
		<div id="content">
						
			<div id="main_content">
				
				<h2>confessions</h2>
				
				<?php $wp_query->init(); ?>
			
				<?php query_posts("category_name=confessions");
				
				while (have_posts()) : the_post(); 

				
				?>

				<div class ="request">
	
						<h3><?php the_title(); ?></h3>

						<p>	<?php the_content(); ?></p>

				</div><!--request-->

				<?php
				endwhile; ?>
				
			
				
			</div><!--/main_content-->
			
		</div><!--/content-->
		
		<div id="sidebar">
			
			
			<ul id="submenu">
			<?php wp_list_pages("title_li=&child_of=8"); ?>
			</ul>
			
			<div id="products">
				
				<h2>products</h2>
				
				<div class="product">
				
					<img src="<?php bloginfo('template_url'); ?>/images/book.jpg" height="115" width="82" alt="product" title="product" />
					
					<h3>A 21 Day Journey For Singles</h3>
					
					<p>Spiritual Warfare Prayers to unlock 
					your Marital Destiny.</p>
				
				</div><!--/product-->
				
			</div><!--/products-->
				
		</div><!--/sidebar-->
		
		</div><!--/inner_wrapper-->
		
	</div><!--/content_wrapper-->
	
<?php include('footer.php'); ?>