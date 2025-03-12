<?php require "_components/loc.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?=loc("contribute.title");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<h2><?=loc("contribute.code");?></h2>
		<p><?=loc("contribute.code.desc");?></p>
		<h2><?=loc("contribute.trans");?></h2>
		<p><?=loc("contribute.trans.desc");?></p>
		<ul>
			<li><a href="https://onlyg.it/OpenWF/SpaceNinjaServer/src/branch/main/static/webui/translations" target="_blank">SpaceNinjaServer WebUI</a></li>
			<li><a href="https://onlyg.it/OpenWF/Translations/src/branch/main/client-webui" target="_blank">Bootstrapper WebUI</a></li>
			<li><a href="https://onlyg.it/OpenWF/Website/src/branch/main/_lang" target="_blank"><?=loc("contribute.trans.this");?></a></li>
		</ul>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>