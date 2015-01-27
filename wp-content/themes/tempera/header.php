<?php
/**
 * The Header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Cryout Creations
 * @subpackage tempera
 * @since tempera 0.5
 */
 ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php wp_title( '-', true, 'right' ); ?></title>
<?php  cryout_meta_hook(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
 	cryout_header_hook();
	wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php cryout_body_hook(); ?>

<div id="wrapper" class="hfeed">

<div id="topbar" ><div id="topbar-inner">
	<div class="topbar-block-one">
		<a href="http://bestgolfclub.co/">
		<span style="padding-top:4px;"><img src="<?php echo get_bloginfo('template_directory');?>/images/icon.png"></span>
		<span>首页</span>
		<?php cryout_topbar_hook(); ?>
		</a>
	</div>

	<?php if(wp_get_current_user()->data):?>
		<div class="topbar-block-two">

			<span>您好 <a href="account" style="cursior:pointer;color:white;text-decoration: underline;"><?php echo wp_get_current_user()->user_nicename;?></a></span>
			<span>|</span>
			<span><a href="http://bestgolfclub.co/wp-login.php?action=logout&redirect_to=%2Faccount%2F&_wpnonce=516e9c0e4a" style="cursior:pointer;color:white;text-decoration: underline;">登出</a></span>
			<span>|</span>
			<span><a href="shopping_cart" style="cursior:pointer;color:white;text-decoration: underline;">查看购物车</a></span>
						<span>|</span>
			<span><a href="contact-us" style="cursior:pointer;color:white;text-decoration: underline;">联系我们</a></span>
		</div>
	<?php else:?>
		<div class="topbar-block-two">
			<span>您还没有 <a href="account" style="cursior:pointer;color:white;text-decoration: underline;">登录</a></span>
			<span>|</span>
			<span><a href="registration" style="cursior:pointer;color:white;text-decoration: underline;">注册</a></span>
			<span>|</span>
			<span><a href="shopping_cart" style="cursior:pointer;color:white;text-decoration: underline;">查看购物车</a></span>
			<span>|</span>
			<span><a href="contact-us" style="cursior:pointer;color:white;text-decoration: underline;">联系我们</a></span>
		</div>
	<?php endif;?>



	
</div></div>



<?php cryout_wrapper_hook(); ?>

<div id="header-full">
	<header id="header">
<?php cryout_masthead_hook(); ?>
		<div id="masthead">
			<div id="branding" role="banner" >
				<?php cryout_branding_hook();?>
				<?php cryout_header_widgets_hook(); ?>
				<div style="clear:both;"></div>
			</div><!-- #branding -->
			<a id="nav-toggle"><span>&nbsp;</span></a>
			<nav id="access" role="navigation">
				<?php cryout_access_hook();?>
			</nav><!-- #access -->		
		</div><!-- #masthead -->
	</header><!-- #header -->
</div><!-- #header-full -->

<div style="clear:both;height:0;"> </div>

<div id="main">
		<?php cryout_main_hook(); ?>
	<div  id="forbottom" >
		<?php cryout_forbottom_hook(); ?>

		<div style="clear:both;"> </div>

		<?php cryout_breadcrumbs_hook();?>
