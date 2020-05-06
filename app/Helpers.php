<?php

if(!function_exists("pageTitle")){
	function pageTitle($title="Laracart")
	{
		if ($title != '') {
			return $title . "| Laracart" ;
		}else{
			return "laracart";
		}
	}
}


if (!function_exists("setActivePage")) {
	function setActivePage($route)
	{
		return Route::is($route) ? "active" : "";
	}
}

