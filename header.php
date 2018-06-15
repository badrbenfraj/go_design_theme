<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

	<title>Go Design</title>
    
    <meta name="description" content="">  
	<meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <?php wp_head(); ?>
    
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri()?>/favicon.ico" type="image/x-icon">
</head>

<body id="top">
    <!-- header 
   ================================================== -->
   <header> 

    <div class="header-logo">
    <a href="<?php echo esc_url(home_url('/')); ?>">Infinity</a>
    </div> 

    <a id="header-menu-trigger" href="#0">
        <span class="header-menu-text">Menu</span>
        <span class="header-menu-icon"></span>
    </a> 
    <nav id="menu-nav-wrap">

		<a href="#0" class="close-button" title="close"><span>Close</span></a>	

	<h3>Infinity.</h3>  
    <?php
        wp_nav_menu( array( 
            'theme_location' => 'header-menu', 
            'menu_class' => 'nav-list',
            ) 
        );
    ?>
    <p class="sponsor-text">
				Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">DreamHost</a>.
				Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>. 
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->
			</p>			

			<ul class="header-social-list">
	         <li>
	         	<a href="#"><i class="fa fa-facebook-square"></i></a>
	         </li>
	         <li>
	         	<a href="#"><i class="fa fa-twitter"></i></a>
	         </li>
	         <li>
	         	<a href="#"><i class="fa fa-instagram"></i></a>
	         </li>
            <li>
            	<a href="#"><i class="fa fa-behance"></i></a>
            </li>
	         <li>
	         	<a href="#"><i class="fa fa-dribbble"></i></a>
	         </li>	         
	      </ul>		

		</nav>

    </header> <!-- end header -->  