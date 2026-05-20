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
		<h3 class="mt-3">Software</h3>
		<ul>
			<li><b>SpaceNinjaServer</b> is a customizable, <abbr title="You may be familiar with the term open-source, but the official definition includes commercial use which is explicitly prohibited by SpaceNinjaServer's license.">source-available</abbr> reimplementation of the game's web services. <a href="https://onlyg.it/OpenWF/SpaceNinjaServer" target="_blank">Browse code.</a></li>
			<li>The <b>Bootstrapper</b> patches the game client to connect to custom servers, but for newer versions, it also has some QoL features and cheats as well as a scripting API, label replacements and metadata patches, allowing for extensive customization of the experience. <a href="https://onlyg.it/OpenWF/Mods" target="_blank">Browse mods.</a></li>
		</ul>
		<h3>Preservation</h3>
		<p>The versions supported by OpenWF will always be available to play and revisit.</p>
		<a href="versions<?=$ext;?>" class="btn btn-primary">Get Started</a>
		<h3 class="mt-4"><abbr title="Frequently Asked Questions">FAQ</abbr></h3>
		<div id="faq-accordion" class="accordion mb-3">
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-ban" aria-expanded="true" aria-controls="collapse-ban">
						<b>Can I get banned for any of this?</b>
					</button>
				</h2>
				<div id="collapse-ban" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
					<div class="accordion-body">
						No. You're not playing the latest version here. You're not connecting to the live servers. As such, no one ever got banned for doing any of this.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-cache" aria-expanded="false" aria-controls="collapse-cache">
						<b>How come I see my email/warframe on the login screen?</b>
					</button>
				</h2>
				<div id="collapse-cache" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
					<div class="accordion-body">
						You may see your email address and appearance from live servers on the login screen for your local server and vice-versa. This is because all versions/installations of Warframe use the same cache for this. This cache never leaves your computer.
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-de" aria-expanded="false" aria-controls="collapse-de">
						<b>Are DE aware of this? Are they okay with this?</b>
					</button>
				</h2>
				<div id="collapse-de" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
					<div class="accordion-body">
						They are likely at least partially aware of this project. How they feel about it is unclear, and that's not for a lack of trying to get a response.
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>
