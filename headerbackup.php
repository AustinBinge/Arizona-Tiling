<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<title>Byers Tile</title>
	</head>
	<body>
		
		<a href="#"><div id="topStripe"></div></a>
		<a href="#"><div id="one"><img src="http://localhost/ByersTile/wordpress/wp-content/uploads/2013/08/ByersTile-022-1024x768.jpg"></div></a>
		<a href="#"><div id="two"><img src="http://localhost/ByersTile/wordpress/wp-content/uploads/2013/08/ByersTile-052-1024x768.jpg"></div></a>
		<a href="#"><div id="three"><img src="http://localhost/ByersTile/wordpress/wp-content/uploads/2013/08/ByersTile-007-1024x768.jpg"></div></a>
		<a href="#"><div id="four"><img src="http://localhost/ByersTile/wordpress/wp-content/uploads/2013/08/ByersTile-051-1024x768.jpg"></div></a>
			
			
			<!--<div id="cssmenu">-->
	<?php wp_nav_menu(array(
  'menu' => 'Main Menu', 
  'container_id' => 'cssmenu', 
  'walker' => new CSS_Menu_Maker_Walker())); ?>	
	</div>
	<!--</div>-->	
		
	</body>
</html>

	