<?php
 $url = $_SERVER['REQUEST_URI'];
        $segments = explode("-", $url);
        $stadt= $segments[1];
    	$stadt = str_replace(array("oe", "ue", "ae"), array("ö", "ü", "ä"), $stadt);
        $stadt = str_replace("_", " ", $stadt ); 
       $stadt = str_replace("%20", " ", $stadt );
        $stadt = rtrim($stadt , "/");
    	if($stadt == null){
    	    $stadt = "NRW";
    	}


     $capitalizedString = ucfirst($stadt); 
    echo $capitalizedString; 


       
?>
