<?php
add_filter('wpseo_robots', 'noindex_pagination_blog', 999);
function noindex_pagination_blog($string= "") {
	if(preg_match("/\/page\/[0-9]+\//i", $_SERVER['REQUEST_URI'])){
        $string= "noindex,follow";
	}
    return $string;
}

add_filter('wpseo_robots', 'noindex_pagination_annuaire', 999);
function noindex_pagination_annuaire($string= "") {
	if(preg_match("/\/page\/[0-9]+\//i", $_SERVER['REQUEST_URI'])){
        $string= "noindex,follow";
	}
    return $string;
}
?>