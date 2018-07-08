	<div id ="footer">
		
		<div id="footer_nav">
			
			<?php wp_nav_menu(array('menu' => 'custom_menu', 'container' => 'main_nav')); ?>
					
		</div><!--/footer_nav-->
		
	</div><!--/footer-->
	
</div><!--/wrapper-->

</div><!--/outer_wrapper-->

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.spasticNav.js"></script>    

<script type="text/javascript">
	
		$('#nav').spasticNav(); 

</script>

</body>
</html>