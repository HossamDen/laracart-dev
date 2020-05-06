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