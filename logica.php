<?php

var_dump($_GET);

$email = $_GET['email'] ?? false;

if ($email) {
	// verificare che $email contenga @ e il .
	if (str_contains($email, '@') && str_contains($email, '.')) {
		$is_email_valid = true;
		$message = 'Sei stato registrato alla newsletter!';
	} else {
		$is_email_valid = false;
		$message = 'Email non valida. Inserirne un\'altra';
	}
}
