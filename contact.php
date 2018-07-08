<?php
/*
Template Name: contact
*/
?>

<?php include('header.php'); ?>

	<div id="content_wrapper">
		
		<div id="inner_wrapper">
		
		<div id="content">
						
			<div id="main_content">
				
				
				
				<div id="contact_form">
					
				<h2>contact us</h2>
				
				<!-- <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> -->
                
      <!-- Moses Added -->
                
                <!-- <div id="contact_content">
                
                   <h3>  By Phone  </h3>
                   
                   
                      <?php   ?> <br><br>
                   
                   <h3>  By Email:  </h3> 
                  
                  		 <?php // echo get_post_meta($post ->ID, 'Email', true)  ?>    <br><br> 
                   
                    <h3>  By Mail </h3> 
                     <?php // echo get_post_meta($post ->ID, 'Mail', true)  ?>  <br><br>
                    
                     <h3>  Office Hours </h3> 
					   <?php // echo get_post_meta($post ->ID, 'Office Hours', true)  ?>   <br><br>
             
              </div>
               -->
        <!-- End   Moses Added -->    

                
 <?php
				
				 $args = array(
	'posts_per_page'   => 5,
	'offset'           => 0,
	'category'         => '',
	'category_name'    => 'contact',
	'orderby'          => 'date',
	'order'            => 'DESC',
	'include'          => '',
	'exclude'          => '',
	'meta_key'         => '',
	'meta_value'       => '',
	'post_type'        => 'post',
	'post_mime_type'   => '',
	'post_parent'      => '',
	'author'	   => '',
	'author_name'	   => '',
	'post_status'      => 'publish',
	'suppress_filters' => true 
);

$posts_array = get_posts( $args ); ?>

<?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
	<li>
		<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
	</li>
<?php endforeach; 
wp_reset_postdata();?>
                
				
			<!-- 	<?php the_content(); ?> 

				<?php endwhile;?>

				<?php endif; ?> -->
				
				</div><!--contact_form-->
				
			</div><!--/main_content-->
			
		</div><!--/content-->
		
		<div id="sidebar">
			
			<div id="contact_sidebar">
			
			<div class="padding">
				
		
				<h4> This is the sidebar area </h4>
			

		
			
				
			</div><!--/padding-->
			
			</div><!--contact_sidebar-->	
		</div><!--/sidebar-->
		
		</div><!--/inner_wrapper-->
		
	</div><!--/content_wrapper-->
	
<?php include('footer.php'); ?>