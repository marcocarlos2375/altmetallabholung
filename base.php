<?php
        $unternehmen= "Prinz Schrottabholung und Entsorgung";
  		$url = $_SERVER['REQUEST_URI'];
        $segments = explode("-", $url);
        $stadt= $segments[1];
    	$stadt = str_replace(array("oe", "ue", "ae"), array("ö", "ü", "ä"), $stadt);
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
               <link rel="canonical" href="https://www.altmetallabholung.de/<?=$canonical?>/" class="yoast-seo-meta-tag">
               <meta name="description" content="Kostenlose Schrottabholung in <?=ucfirst($stadt)?> – Schrotthändler holt Firmen und Haushaltsschrott kostenlos bei Ihnen ab. Jetzt anrufen und Termin vereinbaren">
                 
            <?php
            #include('style.php'); 
        }
        
        if(is_page('schrottankauf')){
			?>
                <title>Metallschrott-Ankauf in <?=ucfirst($stadt)?> , Wettbewerbsfähige Preise </title> 
                 <link rel="canonical" href="https://www.altmetallabholung.de/<?=$canonical?>/" class="yoast-seo-meta-tag">
                 <meta name="description" content="Wir sind spezialisiert auf den Ankauf von Metallschrott in <?=ucfirst($stadt)?> und bieten wettbewerbsfähige Preise an. Wir akzeptieren alle Arten von Metallen, einschließlich Kupfer, Messing, Aluminium, Zink und Edelstahl. Kontaktieren Sie uns, um mehr zu erfahren.">
             <?php
			#include('style2.php'); 
        }
        
        if(is_page('entruempelung')){
            ?>
                <title> Professionelle Entrümpelungs in <?=ucfirst($stadt)?></title>
                 <link rel="canonical" href="https://www.altmetallabholung.de/<?=$canonical?>/" class="yoast-seo-meta-tag">
                <meta name="description" content="Wir bieten professionelle Entrümpelungs- und Haushaltsauflösungsdienste in <?=ucfirst($stadt)?> an. Wir entsorgen alle Arten von Abfall, einschließlich Metallschrott. Kontaktieren Sie uns, um einen Termin zu vereinbaren.">
                <?php
           # include('style3.php');
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
