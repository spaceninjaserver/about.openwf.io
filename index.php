<!DOCTYPE html>
<html>
<head>
	<title>About OpenWF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>OpenWF is a software suite centered around customizing Warframe, including:</p>
		<ul>
			<li><b>SpaceNinjaServer</b> — an <a href="https://openwf.io/SpaceNinjaServer.git">open-source</a> reimplementation of the game's web services. As we have custom server software, OpenWF avoids interference with the live game while allowing full customization of savedata.</li>
			<li>The <b>Bootstrapper</b> — our main DLL targeting the latest game version. Its core precept is connecting to custom servers, but it also has some QoL features and cheats as well as a scripting API, label replacements and metadata patches, allowing for extensive customization of the game.</li>
		</ul>
		<a href="/guide.php" class="btn btn-primary">Get Started</a>
		<h3 class="mt-3">Preserving Warframe</h3>
		<p>
			A long-term goal of the project is to preserve Warframe after the official servers have shut down, and indeed being able to play any update.<br/>
			Our main focus right now is on staying up-to-date with the game, but there is a DLL + fork of SpaceNinjaServer that can be used to revisit 2013 Warframe. More information about this can be found <a href="https://discord.gg/PNNZ3asUuY">on our Discord</a>, specifically <a href="https://discord.com/channels/1108159019635462206/1280628166825873510/1280628233355923497">in this thread</a>.		</p>
		<hr>
		<p>Warframe is a registered trademark of Digital Extremes. Its use is for identification purposes only and does not imply any affiliation with or endorsement by Digital Extremes.</p>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
