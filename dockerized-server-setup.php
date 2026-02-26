<!DOCTYPE html>
<html>
<head>
	<title>Dockerized Server Setup | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>This guide is an amalgamated shortcut of the <a href="web-server-setup<?=$ext;?>">web server</a>, <a href="chat-server-setup<?=$ext;?>">chat server</a>, and <a href="hub-server-setup<?=$ext;?>">hub server</a> setup guides, which will give you a working system but will not explain why it works or how you use it.</p>
		<h2>Prerequisites</h2>
		<ul>
			<li>Git (<a href="https://git-scm.com/downloads" target="_blank">Download</a>)</li>
			<li>Docker (<a href="https://www.docker.com/" target="_blank">Download</a>)</li>
		</ul>
		<h2>Installing</h2>
		<ol>
			<li>Run <code>git clone https://onlyg.it/OpenWF/Docker-AIO "OpenWF Dockerized Server"</code> to set up an OpenWF Dockerized Server folder in the working directory</li>
			<li>Open the OpenWF Dockerized Server folder</li>
			<li>(Optional) If you have a GB of free space, you might want to download stripped assets such as <abbr title="Ability videos show a brief clip of an ability in action. They can be seen by hovering over an ability in the Arsenal, Codex, etc.">ability videos</abbr> so the client can request them on-demand: Run <code>cd static-data && git clone https://openwf.io/0.git && cd ..</code></li>
			<li>Now you can run <code>docker compose up</code> to start the server anytime</li>
		</ol>
		<h2>Updating</h2>
		<ol>
			<li>Run <code>docker compose pull</code> in the OpenWF Dockerized Server folder</li>
			<li>(Optional) If you have the stripped assets, run <code>git pull</code> in the <code>static-data/0</code> folder</li>
			<li>Now you can use <code>docker compose up</code> to start the server again</li>
		</ol>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>
