<?
use \MediaCore\Lib\Helpers\HModule as HModule;
use \MediaCore\Lib\Helpers\HString as HString;
use \MediaCore\Lib\Helpers\HStyle as HStyle;
use \MediaCore\Lib\Helpers\HJScript as HJScript;

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width" />
        <title><?=HString::escape(!empty($title) ? 'Dmitry Serpakov — '.$title : 'Dmitry Serpakov — Lead Programmer')?></title>
        <meta name="keywords" content="<?=HString::escape(!empty($keywords) ? $keywords : 'Dmitry Serpakov — Lead Programmer')?>" />
        <meta name="description" content="<?=HString::escape(!empty($description) ? $description : 'Dmitry Serpakov — Lead Programmer')?>" />

		<link rel="icon" type="image/png" href="/favicon.png" />

		<? /* <meta property="og:title" content="" />
		<meta property="og:description" content="" />
		<meta property="og:image" content="" / -->

		<!--meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@site_account" />
		<meta name="twitter:creator" content="@individual_account" />
		<meta name="twitter:url" content="http://www.example.com/path/to/page.html" />
		<meta name="twitter:title" content="" />
		<meta name="twitter:description" content="" />
		<meta name="twitter:image" content="http://www.example.com/path/to/image.jpg" /> */ ?>

		<link rel="author" href="/humans.txt" />
		<?
			HJScript::add('/js/vendor/jquery-1.10.1.min.js', false);
			HJScript::add('/js/vendor/jquery.imageLoader.js', true);
			HJScript::add('/js/vendor/jquery.scroll-paging.min.js', false);
			HJScript::add('/js/gallery.js', true);
			HJScript::add('/js/main.js', true);
			// compilation is in bottom.php template


			HStyle::add('http://fonts.googleapis.com/css?family=Roboto:300,500,100|Roboto+Condensed:300', true);
			HStyle::add('/css/normalize.min.css', true);
			HStyle::add('/css/main.css', true);
			HStyle::add('/css/adaptive.css', true);
			HStyle::compile();

			HJScript::inc('/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', false);
		?>
	    <link rel="stylesheet" type="text/css" href="/css/<?=isset($_COOKIE['theme']) && $_COOKIE['theme'] == 1 ? 'light' : 'dark'?>.css" media="all" id="theme-style" />
    </head>
    <body class="dark">
        <!--[if lte IE 8]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		<div id="container">
			<nav>
				<div id="light-switch"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%"viewBox="0 0 30 40"><filter id="f1"><feGaussianBlur stdDeviation="1" /></filter><rect x="1" y="1" rx="6" ry="6" width="12" height="38"/><g id="switch-btn"><circle filter="url(#f1)" cx="7" cy="<?=isset($_COOKIE['theme']) && $_COOKIE['theme'] == 1 ? '8' : '32'?>" r="4" /><circle cx="7" cy="<?=isset($_COOKIE['theme']) && $_COOKIE['theme'] == 1 ? '8' : '32'?>" r="3" /></g><text x="18" y="11" id="switch-on">on</text><text x="18" y="34" id="switch-off">off</text></svg></div>
				<a href="/" class="adapt-short" rel="nofollow">~</a>
				<a href="/" class="adapt-long">Home</a>
				<a href="<?=HModule::getUrl('Portfolio')?>">Portfolio</a>
				<a href="<?=HModule::getUrl('Pages', array('alias' => 'interest'))?>">Hello World!</a>
				<a href="<?=HModule::getUrl('Pages', array('alias' => 'cv'))?>" class="adapt-short" rel="nofollow">CV</a>
				<a href="<?=HModule::getUrl('Pages', array('alias' => 'cv'))?>" class="adapt-long">Curriculum Vitae</a>
				<a href="<?=HModule::getUrl('Pages', array('alias' => 'contacts'))?>">Contacts</a>
			</nav>

			<header><h1><?=HString::escape(!empty($title) ? $title : 'Dmitry Serpakov — Lead Programmer')?></h1></header>
			<div class="wrap">
