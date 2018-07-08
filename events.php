<?php
/*
Template Name: events
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
				
				<h2>events</h2>
				
				<?php $wp_query->init(); ?>
			
				<?php query_posts("category_name=events");
				
				while (have_posts()) : the_post(); 

				
				?>
				
				<div id="tec-content" class="grid">
					<div id='tec-events-calendar-header' class="clearfix">
						<h2 class="tec-cal-title"><?php _e('Calendar of Events', $spEvents->pluginDomain) ?></h2>
						
						<span class='tec-month-nav'>
							<span class='tec-prev-month'>
								<a href='<?php echo events_get_previous_month_link(); ?>'>
								&#x2190; <?php echo events_get_previous_month_text(); ?>
								</a>
							</span>

							<?php get_jump_to_date_calendar( "tec-" ); ?>

							<span class='tec-next-month'>
								<a href='<?php echo events_get_next_month_link(); ?>'>				
								<?php echo events_get_next_month_text(); ?> &#x2192; 
								</a>
							</span>
						</span>
						
						
						<span class='tec-calendar-buttons'> 
							<a class='tec-button-off' href='<?php echo events_get_listview_link(); ?>'><?php _e('Event List', $spEvents->pluginDomain)?></a>
							<a class='tec-button-on' href='<?php echo events_get_gridview_link(); ?>'><?php _e('Calendar', $spEvents->pluginDomain)?></a>
						</span>

						
					</div><!-- tec-events-calendar-header -->
					<?php
					global $wp_query;
					$tecCatObject = get_category( $wp_query->query_vars['cat'])
					?>
					<a class="ical" href="<?php bloginfo('home'); ?>/?ical=<?php echo $tecCatObject->slug; ?>"><?php _e('iCal Import', $spEvents->pluginDomain) ?></a>
					<?php event_grid_view(); // See the plugins/the-events-calendar/views/table.php template for customization ?>	
				</div>
			<?php /* For custom template builders...
				   * The following init method should be called before any other loop happens.
				   */
			$wp_query->init(); ?>

				<div class ="events">
					
					<div class="event_left">
					
						<h3><?php the_date('m'); ?></h3>
					
					
					</div><!--/event_left-->
				
					<div class="event_right">

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