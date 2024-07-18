<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ninesquares
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!--**********START NEW Binotel code CALL*****-->
    <script type='text/javascript'>(function(d,w,s){var widgetHash='32wjoj8uueh43qmmbeb4',gcw=d.createElement(s);gcw.type='text/javascript';gcw.async=true;gcw.src='//widgets.binotel.com/getcall/widgets/'+widgetHash+'.js';var sn=d.getElementsByTagName(s)[0];sn.parentNode.insertBefore(gcw,sn);})(document,window,'script');</script>
    <!--**********START NEW Binotel code CHAT*****-->
    <script type='text/javascript'>(function(d,w,s){var widgetHash='ajWRyByQvEPdX3qzpJV2',bch=d.createElement(s);bch.type='text/javascript';bch.async=true;bch.src='//widgets.binotel.com/chat/widgets/'+widgetHash+'.js';var sn=d.getElementsByTagName(s)[0];sn.parentNode.insertBefore(bch,sn);})(document,window,'script');</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php renderBlock('header'); ?>