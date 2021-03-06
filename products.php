<?php
/*
Template Name: products
*/
?>

<?php include('header.php'); ?>

	<div id="content_wrapper">
		
		<div id="inner_wrapper">
		
		<div id="content">
						
			<div id="main_content">
				
				<h2>Our Products</h2>
				
				<?php query_posts("category_name=products");
				$counter = 0;
				while (have_posts()) : the_post(); 

				$counter++; ?>

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
			
			<div id="amazon">
					
				<div class="border2">
				
				<h3>You can buy books and resources by following the links below</h3>
				
				<p>Buy books on<a target="_blank" href="http://www.amazon.com/mn/search/?_encoding=UTF8&field-language=&field-title=&Adv-Srch-Books-Submit.y=12&node=22&field-dateyear=&field-publisher=&redirect=true&sort=relevanceexprank&search-alias=stripbooks&field-isbn=&tag=beaforashmin-20&linkCode=ur2&unfiltered=1&field-p_n_condition-type=&field-feature_browse-bin=&field-subject=&camp=1789&Adv-Srch-Books-Submit.x=35&field-datemod=&field-dateop=&creative=390957&field-keywords=prayer&field-author="> Prayer</a><img src="https://www.assoc-amazon.com/e/ir?t=beaforashmin-20&l=ur2&o=1" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
				</p>

				<p>Buy books on<a target="_blank" href="http://www.amazon.com/mn/search/?_encoding=UTF8&field-language=&field-title=&Adv-Srch-Books-Submit.y=12&node=22&field-dateyear=&field-publisher=&redirect=true&sort=relevanceexprank&search-alias=stripbooks&field-isbn=&tag=beaforashmin-20&linkCode=ur2&unfiltered=1&field-p_n_condition-type=&field-feature_browse-bin=&field-subject=&camp=1789&Adv-Srch-Books-Submit.x=35&field-datemod=&field-dateop=&creative=390957&field-keywords=prayer&field-author=#/ref=nb_sb_noss?url=node=22"> Healing and Deliverance</a><img src="https://www.assoc-amazon.com/e/ir?t=beaforashmin-20&l=ur2&o=1" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
				</p>
				
				</div><!-- border -->
				
			</div><!-- amazon -->
				
		</div><!--/sidebar-->
		
		</div><!--/inner_wrapper-->
		
	</div><!--/content_wrapper-->
	
<?php include('footer.php'); ?>