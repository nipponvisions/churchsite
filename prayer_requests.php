<?php
/*
Template Name: prayer_requests
*/
?>

<?php include('header.php'); ?>

	<div id="content_wrapper">
		
		<div id="inner_wrapper">
		
		<div id="content">
						
			<div id="main_content">
				
				<h2>prayer requests</h2>
				
				<p>Use the form below to make a prayer request to the minister</p>
				
				<div id="request_form">
				
					<?php tdomf_the_form(1); ?>
				
				</div><!--/request_form-->
				
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