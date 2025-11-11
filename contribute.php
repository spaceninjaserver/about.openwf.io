<!DOCTYPE html>
<html>
<head>
	<title>Contributing to OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<h2>Code</h2>
		<p>Code contributions would be most welcome, especially on SpaceNinjaServer, with <a href="https://onlyg.it/OpenWF/SpaceNinjaServer/issues" target="_blank">many open issues</a>.</p>
		<h2>Translations</h2>
		<p>You can help translate OpenWF software to non-English languages:</p>
		<ul>
			<li><a href="https://onlyg.it/OpenWF/SpaceNinjaServer/src/branch/main/static/webui/translations" target="_blank">SpaceNinjaServer WebUI</a> (<a href="https://onlyg.it/OpenWF/SpaceNinjaServer/src/branch/main/CONTRIBUTING.md" target="_blank">Contributing</a>)</li>
			<li><a href="https://onlyg.it/OpenWF/Translations" target="_blank">Bootstrapper</a></li>
		</ul>
		<h2>Seeding</h2>
		<p>We'd appreciate long-term seeding of update patches and user installations provided via BitTorrent v1 for <a href="/old-versions<?=$ext;?>">old versions</a>.</p>
		<!-- <p>We are looking into IPFS for censorship-resistance. You could help the project out by pinning some things to your own node(s):</p>
		<ul>
			<li>OpenWF Website: <code>ipfs pin add /ipns/openwf.io</code></li>
			<li>SpaceNinjaServer git mirror: <code>ipfs pin add /ipns/sns.openwf.io</code> (<a href="https://ipfs.io/ipns/k51qzi5uqu5diybf2prwdxnyiewvnjn5jshwiv5awoqrn9z5tfen8p31x15jk9/#repo=https%3A%2F%2Fipfs.io%2Fipns%2Fsns.openwf.io" target="_blank">gitview</a>)</li>
		</ul>
		<p>Note that IPNS names are resolved to their CID when pinning, so an hourly cronjob is recommended.</p> -->
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>