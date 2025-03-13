<?php require "_components/loc.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?=loc("import.title")?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p><?=loc("import.intro")?></p>
		<h2><?=loc("import.export.title")?></h2>
		<ul>
			<li><?=loc("import.export.alecaframe");?></li>
			<li><?=str_replace("|warframe-api-helper|", '<a href="https://github.com/Sainan/warframe-api-helper/releases/latest/download/warframe-api-helper.exe">warframe-api-helper</a>', loc("import.export.helper"));?></li>
		</ul>
		<h2><?=loc("import.import.title")?></h2>
		<p><?=loc("import.import.desc")?></p>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
