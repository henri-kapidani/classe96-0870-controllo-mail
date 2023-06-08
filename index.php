<?php include_once __DIR__ . '/logica.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iscrizione newsletter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
		defer></script>
</head>
<body>
	<div class="container"><?php
		if ($email) { ?>
			<div class="alert alert-<?= $is_email_valid ? 'success' : 'danger' ?>" role="alert">
				<?= $message ?>
			</div><?php
		} ?>

		<h1>Iscriviti alla newsletter</h1>
		<form>
			<div class="mb-3">
			  <label for="email" class="form-label">Email address</label>
			  <input type="text" class="form-control" id="email" name="email">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="/classe96-0870-controllo-mail" class="btn btn-secondary">Reset</a>

			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="lettere" name="chars[]" value="lettere">
				<label class="form-check-label" for="lettere">
					Lettere
				</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="numeri" name="chars[]" value="numeri">
				<label class="form-check-label" for="numeri">
					Numeri
				</label>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="checkbox" id="simboli" name="chars[]" value="simboli">
				<label class="form-check-label" for="simboli">
					Simboli
				</label>
			</div>
		</form>
	</div>
</body>
</html>