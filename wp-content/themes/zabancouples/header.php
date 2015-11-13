<?php
/**
 * Header
 *
 * @package Brain_Bytes
 * @subpackage Zaban_Couples
 * @since Zaban Couples 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	   <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="container-fluid">
        <div id="header">
            <div class="cover">            
                <div class="row text-center p-t-lg">
                    <img src="/wp-content/uploads/2015/11/zaban-logo.png" />
                </div>
                <div class="row text-center">                    
                    <?php wp_nav_menu(array('menu' => 'Main Menu', 'menu_class' => 'nav')); ?>
                </div>
            </div>
            <div class="drawer">
                <div class="row">
                    <div class="col-sm-1">
                        <hr class="m-t-xlg">
                    </div>
                    <div class="col-sm-8">
                        <h1 class="m-t-md p-l-lg p-b-0">Donate</h1>
                        <p class="p-l-lg">Sa imperdiet adipscing, in donec. Ante morbierat ante urna,
netus mauris sit, nascerur a liquam handrerit conubia mauris.</p>
                    </div>
                    <div class="col-sm-3">
                        <div class="m-t-xxlg">
                            <a href="/donate">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>