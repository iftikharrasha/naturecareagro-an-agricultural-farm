<?php
session_start();

function Message () {
	if ( isset($_SESSION['errorMessage'])) {
		$ouput = "
			<div class='message'>" .
			htmlentities($_SESSION["errorMessage"]) .
			"</div>
		";
		$_SESSION['errorMessage'] = null;
		return $ouput;
	}else{
		if ( isset($_SESSION['successMessage'])) {
		$ouput = "
			<div class='message'>" .
			htmlentities($_SESSION["successMessage"]) .
			"</div>
		";
		$_SESSION['successMessage'] = null;
		return $ouput;
		}
	}
}
?>