<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">  

<html>
	<head>
		<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet">
		<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico">
		<!-- Styles for the header -->
				
<style type="text/css" >

	#header h1 { 
	background-image: url("<?php bloginfo('stylesheet_directory'); ?>/images/logo.png");
	}
	#commentlink {
	background-image: url("<?php bloginfo('stylesheet_directory'); ?>/images/bubble.png");
	background-repeat: no-repeat;
	}

</style>				

		<meta content="text/html" />
		<title>
			<?php
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
			?>		
		</title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	</head>
	<body>
		<div id="wrapper">
			<a href="<?php echo get_option('home'); ?>">			
				<div id="header">		
				<h1>The Grand Logo</h1>
			</div>
			</a>
			<div id="navbar">
				<ul id="nav">
					<?php wp_list_pages('sort_order=asc&title_li='); ?>
				</ul>
			</div>
	
