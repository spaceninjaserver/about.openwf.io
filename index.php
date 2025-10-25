<!DOCTYPE html>
<html>
<head>
	<title>About OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>OpenWF is a software suite centered around customizing Warframe, including:</p>
		<ul>
			<li><b>SpaceNinjaServer</b> — an <a href="https://openwf.io/SpaceNinjaServer.git">open-source</a> reimplementation of the game's web services. As we have custom server software, OpenWF avoids interference with the live game while allowing full customization of savedata.</li>
			<li>The <b>Bootstrapper</b> — our main DLL patching the client to connect to custom servers, but for newer versions, it also has some QoL features and cheats as well as a scripting API, label replacements and metadata patches, allowing for extensive customization of the experience. <a href="https://onlyg.it/OpenWF/Mods" target="_blank">Browse mods.</a></li>
		</ul>
		<a href="guide<?=$ext;?>" class="btn btn-primary">Get Started</a>
		<h3 class="mt-3">Preservation</h3>
		<p>OpenWF works entirely offline, so the versions supported by OpenWF will always be available to play and revisit, and it is indeed already possible to <a href="old-versions<?=$ext;?>">revisit old versions</a>.</p>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://censorcanary.org/censorcanary.js" defer></script>
</body>
</html>
