<?php

include_once ("x.php");

class Utils {

	public function escape_html ($raw) {
		return htmlspecialchars ($raw, ENT_QUOTES);
	}

	public function escape_sql ($raw) {
		return mysql_escape_string ($raw);
	}

	public function escape_url ($raw) {
		return rawurlencode ($raw);
	}

	public function redirect ($url) {
		header ("Location: ".$url);
	}

	public function check_email ($email) {

		if (!filter_var ($email, FILTER_VALIDATE_EMAIL)) {
			return new Response (null, Errors::EMAIL_FORMAT_INVALID);
		}

		return new Response (null);
	}
}

$utils = new Utils ();