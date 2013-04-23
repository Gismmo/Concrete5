<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="<?php echo $lang?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="<?php echo $lang?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="<?php echo $lang?>"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $lang?>"> <!--<![endif]-->
<head>
   
  	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/layout.css" />
	<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/nav.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('typography.css')?>" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('style.css')?>" />

<!-- google Web Font -->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<!--[if IE 7]>
<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/font-awesome-ie7.min.css">
<![endif]-->
   
<?php  Loader::element('header_required'); ?>

<?PHP
# Cannonical URL PHP CODE
            $cPath = $c->getCollectionPath(); 
            $canonicalURL = BASE_URL;
            $canonicalURL.= DIR_REL;
       $canonicalURL.= URL_REWRITING?"":"/index.php";
            $canonicalURL.= $cPath; 
            if(!(substr($cPath, strlen($cPath)-1, 1)=="/")) $canonicalURL .= "/";
            $pageIndentifierVars = array('keywords','fID','tag','productID'); 
            $canonicalVars = array(); 
            foreach($pageIndentifierVars as $var) 
            if($_REQUEST[$var]) $canonicalVars[]= $var.'='.$_REQUEST[$var]; 
            if( count($canonicalVars) ) $canonicalURL.= '?' . join(',',$canonicalVars); 
        ?>
<link rel="canonical" href="<?= $canonicalURL ?>" />

    <!-- Grab Modernizer CDN, with a protocol relative URL; fall back to local if offline -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $this->getThemePath()?>/js/libs/modernizr-2.5.3.min.js"><\/script>')</script>
</head>
<body>

<body>
<div id="main-container">

<div id="outer-wrap">
<div id="inner-wrap">