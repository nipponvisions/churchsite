<?php
/*
Template Name: staff
*/
?>

<?php include('header.php'); ?>

	<div id="content_wrapper">
		
		<div id="inner_wrapper">
		
		<div id="content">
						
			<div id="main_content">
				
				<h2>Our Team</h2>
				
				<?php query_posts("category_name=staff");
				$counter = 0;
				while (have_posts()) : the_post(); 

				$counter++;
				?>

				<div class ="team_member">

					<div class="member_left">

					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail(array('130', '180'));
					} ?>

					</div><!--/member_left-->

				<div class="member_right">	


				<h4><?php the_title(); ?></h4>

				<p><?php the_content(); ?></p>

				</div><!--/member_right-->

				</div><!--team_member-->

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
			
			</div><!--/products-->
				
		</div><!--/sidebar-->
		
		</div><!--/inner_wrapper-->
		
	</div><!--/content_wrapper-->
	
<?php include('footer.php'); ?>