<?php
/*
Template Name: homepage
*/
?>

<?php include('header.php'); ?>

		<div id="content_wrapper">
			
			<div id="content">
				
				<div id="slider">
					
					<img src="<?php bloginfo('template_url'); ?>/images/main_pic.jpg" height="301" width="576" alt="slide image" title="slider image" />
					
				</div><!--slider-->
				
				<div id="main_content" class="border">
					
					<div class="inner_wrapper">
						
						<h2>Welcome</h2>
						
						<p>Welcome and thank you for visiting our website. We serve a God of divine appointments and connections and we believe that this is your appointed time! We pray that you will be blessed as you navigate the site and make use of the resources that we have made available to you.  We are committed to sharing God’s Word and extending the love of God to you. We would love to minister to you if you have any further prayer needs or if we can encourage you in any way. May God bless you and shower you with his love and tender mercy.<br/><br/>

						Love is the greatest!</p>
					
					
						
						<h2>from the pastor</h2>
						
						<?php

						query_posts( array ( 'category_name' => 'minister', 'posts_per_page' => 2 ) );					

						while (have_posts()) : the_post(); 
						?>

						
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<h4><?php the_date(); ?></h4>
							
                            <p><?php
							
								/* Moses commented out  */
								
							// content('70'); 
							 ?></p>
					

						<?php endwhile; ?>
					
					</div><!--/inner_wrapper-->
					
				</div><!--/main_content-->
				
			</div><!--/content-->
			
			<div id="sidebar" class="border">
				
				<div id="featured_events">
					
					
					
					<h2> featured events </h2>
					
					<?php
					
						query_posts( array( 'category_name' => 'events', 'posts_per_page' => 3) );			
						
					
						
					
					while (have_posts()) : the_post(); 
					?>
					
					<ul>
						<li>
						    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                            
                            		
                                    
                                      <!-- Moses added   and custom fields  -->
      							<p>	<b> Venue:  <?php echo get_post_meta( $post ->ID, 'Venue', true);  ?> <br>  
                                     Start Date:   <?php  echo get_post_meta( $post ->ID, 'Start Date', true);  ?>  <br>
                                      End Date:    <?php  echo get_post_meta( $post ->ID, 'End Date', true);  ?>
                                 </b></p>
                                   
                                        
                                        <p> <?php //   echo the_event_start_date(); ?> </p>
                                        
                                                <!--  End   Moses added   and custom fields  -->
					
						</li>
					</ul>
					
					<?php endwhile; ?>
					
				</div><!--/featured_events-->
				
				<div class="twitter">
				
				<a href="http://twitter.com/beautyforashes4" alt="" target="blank" ><img class="no-border" src="<?php echo(get_bloginfo('template_directory')); ?>/images/twitter2.png" width="40" alt="" /><p>follow us on twitter</p></a>
				
				</div><!-- twitter -->
				
				<div id="facebook_widget">
				
				<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FBeauty-for-Ashes-Ministries-International%2F173253446061191&amp;width=269&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23C5BBA1&amp;stream=false&amp;header=true&amp;appId=185962248127628" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:269px; height:290px;" allowTransparency="true"></iframe>
				
				</div><!--/facebook_widget-->
				
				<div id="email_list">
					
					<h3>Sign up for our weekly word</h3>
					
					<script type="text/javascript" 	src="http://app.icontact.com/icp/loadsignup.php/form.js?c=827527&l=3054&f=5270">
					</script>
				</div><!--email_list-->
				
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
			
		</div><!--/content_wrapper-->
		
<?php include('footer.php'); ?>