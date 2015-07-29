<?php 



function inputHas($key) {
	if(isset($_REQUEST[$key])){
		return true;
	} else {
		return false;
	}
}

function inputGet($key) {
	if(isset($_REQUEST[$key])) {
		return $_REQUEST[$key]; 
	}else {
		return null; 
	}
}

function escape($input) {
	return strip_tags(htmlspecialchars($input));
}
	

 ?>