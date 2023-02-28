<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php 

        $unternehmen= "Prinz Schrottabholung und Entsorgung";
  		$url = $_SERVER['REQUEST_URI'];
        $segments = explode("-", $url);
        $stadt= $segments[1];
    	$stadt = str_replace(array("oe", "ue", "ae"), array("ö", "ü", "ä"), $stadt);
		$stadt = str_replace("_", " ", $stadt);
        $stadt = rtrim($stadt , "/");
       	$link = $segments[1];
		$link = strtolower(rtrim($link , "/"));
		if($stadt == ""){
           $stadt = "NRW" ;
        }
		
		if (is_page('schrottabholung')){
            if($stadt == "NRW"){
            	$canonical = "schrottabholung";
            }else{
            	$canonical = "schrottabholung-".$link;
            }
        	 
        }elseif(is_page('schrottankauf')){
        	
            if($stadt == "NRW"){
            	$canonical = "schrottankauf";
            }else{
            	$canonical = "schrottankauf-".$link;
            }
        }else{
        	 if($stadt == "NRW"){
            	$canonical = "entruempelung";
            }else{
            	$canonical = "entruempelung-".$link;
            }
        }
    if (is_page('schrottabholung') || is_page('schrottankauf') || is_page('entruempelung') ) {

        if(is_page('schrottabholung')){
            ?>
              <title>Entsorgung von Schrott in <?=ucfirst($stadt)?></title>
               <meta name="title" content="Entsorgung von Schrott in <?=ucfirst($stadt)?>">
               <meta name="description" content="Kostenlose Schrottabholung in <?=ucfirst($stadt)?> – Schrotthändler holt Firmen und Haushaltsschrott kostenlos bei Ihnen ab. Jetzt anrufen und Termin vereinbaren">
                <!-- Open Graph / Facebook -->
                <meta property="og:type" content="website">
                <meta property="og:url" content="https://www.altmetallabholung.de/<?=$canonical?>/">
                <meta property="og:title" content="Entsorgung von Schrott in <?=ucfirst($stadt)?>">
                <meta property="og:description" content="Kostenlose Schrottabholung in <?=ucfirst($stadt)?> – Schrotthändler holt Firmen und Haushaltsschrott kostenlos bei Ihnen ab. Jetzt anrufen und Termin vereinbaren.">
                <meta property="og:image" content="https://www.altmetallabholung.de/wp-content/uploads/2023/02/jack-blueberry-MfWtAeQS5oI-unsplash-1.jpg">

                <!-- Twitter -->
                <meta property="twitter:card" content="summary_large_image">
                <meta property="twitter:url" content="https://www.altmetallabholung.de/<?=$canonical?>/">
                <meta property="twitter:title" content="Entsorgung von Schrott in <?=ucfirst($stadt)?>">
                <meta property="twitter:description" content="Kostenlose Schrottabholung in <?=ucfirst($stadt)?> – Schrotthändler holt Firmen und Haushaltsschrott kostenlos bei Ihnen ab. Jetzt anrufen und Termin vereinbaren.">
                <meta property="twitter:image" content="https://www.altmetallabholung.de/wp-content/uploads/2023/02/jack-blueberry-MfWtAeQS5oI-unsplash-1.jpg">
                <link rel="canonical" href="https://www.altmetallabholung.de/<?=$canonical?>/" class="yoast-seo-meta-tag">
                <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
                <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
                <style>body{font-family:"sora" !important;} img{padding:0 !important;margin:0px !important;}.elementor-8610{background:#fff;}</style>
            <?php
            include('style.php'); 
        }
        
        if(is_page('schrottankauf')){
			?>
                <title>Metallschrott-Ankauf in <?=ucfirst($stadt)?> , Wettbewerbsfähige Preise </title> 
                 <meta name="title" content="Metallschrott-Ankauf in <?=ucfirst($stadt)?> , Wettbewerbsfähige Preise">
                 <meta name="description" content="Wir sind spezialisiert auf den Ankauf von Metallschrott in <?=ucfirst($stadt)?> und bieten wettbewerbsfähige Preise an. Wir akzeptieren alle Arten von Metallen, einschließlich Kupfer, Messing, Aluminium, Zink und Edelstahl. Kontaktieren Sie uns, um mehr zu erfahren.">
                    <!-- Primary Meta Tags -->


                    <!-- Open Graph / Facebook -->
                    <meta property="og:type" content="website">
                    <meta property="og:url" content="https://www.altmetallabholung.de/<?=$canonical?>/">
                    <meta property="og:title" content="Metallschrott-Ankauf in <?=ucfirst($stadt)?> , Wettbewerbsfähige Preise">
                    <meta property="og:description" content="Wir sind spezialisiert auf den Ankauf von Metallschrott in <?=ucfirst($stadt)?> und bieten wettbewerbsfähige Preise an. Wir akzeptieren alle Arten von Metallen, einschließlich Kupfer, Messing, Aluminium, Zink und Edelstahl. Kontaktieren Sie uns, um mehr zu erfahren.">
                    <meta property="og:image" content="https://www.altmetallabholung.de/wp-content/uploads/2023/02/jack-blueberry-MfWtAeQS5oI-unsplash-1.jpg">

                    <!-- Twitter -->
                    <meta property="twitter:card" content="summary_large_image">
                    <meta property="twitter:url" content="https://www.altmetallabholung.de/<?=$canonical?>/">
                    <meta property="twitter:title" content="Metallschrott-Ankauf in <?=ucfirst($stadt)?> , Wettbewerbsfähige Preise">
                    <meta property="twitter:description" content="Wir sind spezialisiert auf den Ankauf von Metallschrott in <?=ucfirst($stadt)?> und bieten wettbewerbsfähige Preise an. Wir akzeptieren alle Arten von Metallen, einschließlich Kupfer, Messing, Aluminium, Zink und Edelstahl. Kontaktieren Sie uns, um mehr zu erfahren.">
                    <meta property="twitter:image" content="https://www.altmetallabholung.de/wp-content/uploads/2023/02/jack-blueberry-MfWtAeQS5oI-unsplash-1.jpg">
                     <link rel="canonical" href="https://www.altmetallabholung.de/<?=$canonical?>/" class="yoast-seo-meta-tag">
                    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
                    <style>body{font-family:"sora" !important;}img{padding:0 !important;margin:0px !important;} .elementor-8610{background:#fff;}</style>
             <?php
			include('style2.php'); 
        }
        
        if(is_page('entruempelung')){
            ?>
                <title> Professionelle Entrümpelungs in <?=ucfirst($stadt)?></title>
                 <meta name="title" content="Professionelle Entrümpelungs in <?=ucfirst($stadt)?>">
                <meta name="description" content="Wir bieten professionelle Entrümpelungs- und Haushaltsauflösungsdienste in <?=ucfirst($stadt)?> an. Wir entsorgen alle Arten von Abfall, einschließlich Metallschrott. Kontaktieren Sie uns, um einen Termin zu vereinbaren.">
                <!-- Open Graph / Facebook -->
                <meta property="og:type" content="website">
                <meta property="og:url" content="https://www.altmetallabholung.de/<?=$canonical?>/">
                <meta property="og:title" content="Professionelle Entrümpelungs in <?=ucfirst($stadt)?>">
                <meta property="og:description" content="Wir bieten professionelle Entrümpelungs- und Haushaltsauflösungsdienste in <?=ucfirst($stadt)?> an. Wir entsorgen alle Arten von Abfall, einschließlich Metallschrott. Kontaktieren Sie uns, um einen Termin zu vereinbaren.">
                <meta property="og:image" content="https://www.altmetallabholung.de/wp-content/uploads/2023/02/jack-blueberry-MfWtAeQS5oI-unsplash-1.jpg">

                <!-- Twitter -->
                <meta property="twitter:card" content="summary_large_image">
                <meta property="twitter:url" content="https://www.altmetallabholung.de/<?=$canonical?>/">
                <meta property="twitter:title" content="Professionelle Entrümpelungs in <?=ucfirst($stadt)?>">
                <meta property="twitter:description" content="Wir bieten professionelle Entrümpelungs- und Haushaltsauflösungsdienste in <?=ucfirst($stadt)?> an. Wir entsorgen alle Arten von Abfall, einschließlich Metallschrott. Kontaktieren Sie uns, um einen Termin zu vereinbaren.">
                <meta property="twitter:image" content="https://www.altmetallabholung.de/wp-content/uploads/2023/02/jack-blueberry-MfWtAeQS5oI-unsplash-1.jpg">
                 <link rel="canonical" href="https://www.altmetallabholung.de/<?=$canonical?>/" class="yoast-seo-meta-tag">
                 <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
                <style>body{font-family:"sora" !important;}img{padding:0 !important;margin:0px !important;}.elementor-8610{background:#fff;}</style>
                <?php
            include('style3.php');
        }

    } else {
        # -------------------------------------------------------------
        # -------------------------------------------------------------
        # ----------Im supposed to be here normally----------------------
         
         wp_head();  
        # -------------------------------------------------------------
        # -------------------------------------------------------------
        # -------------------------------------------------------------
    }

     	# -------------------------------------------------------------
      	# -------------------------------------------------------------
        # ----------put me here for changes----------------------
        
        # -------------------------------------------------------------
        # -------------------------------------------------------------
        # -------------------------------------------------------------
    
    
 ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	astra_header_before();

	astra_header();

	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>
