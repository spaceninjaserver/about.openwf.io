<!DOCTYPE html>
<html>
<head>
	<title>About OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>OpenWF is a community project to play Warframe offline, specifically for preservation and customization.</p>
		<h3>Software</h3>
		<ul>
			<li><b>SpaceNinjaServer</b> is a customizable, <abbr title="You may be familiar with the term open-source, but the official definition includes commercial use which is explicitly prohibited by SpaceNinjaServer's license.">source-available</abbr> reimplementation of the game's web services. <a href="https://onlyg.it/OpenWF/SpaceNinjaServer" target="_blank">Browse code.</a></li>
			<li>The <b>Bootstrapper</b> patches the game client to connect to custom servers, but for newer versions, it also has some QoL features and cheats as well as a scripting API, label replacements and metadata patches, allowing for extensive customization of the experience. <a href="https://onlyg.it/OpenWF/Mods" target="_blank">Browse mods.</a></li>
		</ul>
		<a href="guide<?=$ext;?>" class="btn btn-primary">Get Started</a>
		<h3 class="mt-3">Preservation</h3>
		<p>The versions supported by OpenWF will always be available to play and revisit. <a href="versions<?=$ext;?>">Browse versions.</a></p>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>
