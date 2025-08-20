<!DOCTYPE html>
<html>
<head>
	<title>Contributing to OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<h2>Code</h2>
		<p>Code contributions would be most welcome, especially on SpaceNinjaServer, with <a href='https://onlyg.it/OpenWF/SpaceNinjaServer/issues' target='_blank'>many open issues</a>.</p>
		<h2>Translations</h2>
		<p>Most OpenWF software has support for translations:</p>
		<ul>
			<li><a href="https://onlyg.it/OpenWF/SpaceNinjaServer/src/branch/main/static/webui/translations" target="_blank">SpaceNinjaServer WebUI</a></li>
			<li><a href="https://onlyg.it/OpenWF/Translations/src/branch/main/bootstrapper" target="_blank">Bootstrapper WebUI</a></li>
		</ul>
		<h2>Seeding</h2>
		<p>We are looking into IPFS for censorship-resistance. You could help the project out by pinning some things to your own node(s):</p>
		<ul>
			<li>Bootstrapper Setup.exe v1.0.0: <code>ipfs pin add /ipfs/bafkreifedzhddsiz4tfxwkzuzu6722seqvzhp7fdxkvdd6ao3canjesyda</code></li>
		</ul>
		<p>Also some of our more dynamic content, for which we recommend an hourly cronjob as IPNS names are resolved to their CID when pinning:</p>
		<ul>
			<li>OpenWF Website: <code>ipfs pin add /ipns/openwf.io</code></li>
			<li>SpaceNinjaServer git mirror: <code>ipfs pin add /ipns/sns.openwf.io</code> (<a href="https://ipfs.io/ipns/k51qzi5uqu5diybf2prwdxnyiewvnjn5jshwiv5awoqrn9z5tfen8p31x15jk9/#repo=https%3A%2F%2Fipfs.io%2Fipns%2Fsns.openwf.io" target="_blank">gitview</a>)</li>
		</ul>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://censorcanary.org/censorcanary.js" defer></script>
</body>
</html>