<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php include('header.php'); ?>

	<div id="content_wrapper">
		
		<div id="inner_wrapper">
		
		<div id="content">
						
			<div id="main_content">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2><?php the_title(); ?></h2>

					

					
						<p><?php the_content(); ?></p>
						


				


<?php endwhile; // end of the loop. ?>


			</div><!--/main_content-->
			
		</div><!--/content-->
		
		</div><!--innerwrappe-->
		
		<div id="sidebar">
			
			<ul id="submenu">
			<?php wp_list_pages("title_li=&child_of=113"); ?>
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