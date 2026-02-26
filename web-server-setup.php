<!DOCTYPE html>
<html>
<head>
	<title>Web Server Setup | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>This guide will explain the process of setting up <a href="https://onlyg.it/OpenWF/SpaceNinjaServer" target="_blank">SpaceNinjaServer</a> so you'll have your very own Warframe web server.</p>
		<h2>Prerequisites</h2>
		<p>Ensure the following software is installed on your machine:</p>
		<ul>
			<li>Git (<a href="https://git-scm.com/downloads" target="_blank">Download</a>)</li>
			<li>Node.js (<a href="https://nodejs.org/en/download" target="_blank">Download</a></a>)</li>
			<li>MongoDB (<a href="https://www.mongodb.com/try/download/community" target="_blank">Download</a></a>)</li>
		</ul>
		<p>Alternatively, for a more <i>contained</i> approach, <a href="dockerized-server-setup<?=$ext;?>">you can use Docker</a>.</p>
		<h2>Setup</h2>
		<ol>
			<li>Run <code>git clone https://openwf.io/SpaceNinjaServer.git</code> in a command prompt to download SpaceNinjaServer in the current working directory</li>
			<li>Open the SpaceNinjaServer folder</li>
			<li>Copy config-vanilla.json to create a config.json</li>
			<li>(Optional) If you have a GB of free space, you might want to download stripped assets such as <abbr title="Ability videos show a brief clip of an ability in action. They can be seen by hovering over an ability in the Arsenal, Codex, etc.">ability videos</abbr> so the client can request them on-demand: Run <code>cd static/data && git clone https://openwf.io/0.git && cd ../..</code></li>
			<li>Run <code>npm install --omit=dev --omit=optional</code> to install library dependencies</li>
			<li>Now you can run <code>npm run raw</code> to start the server anytime</li>
		</ol>
		<h2>Usage</h2>
		<p>With the server running, you can obviously connect to it with a patched Warframe installation.</p>
		<ul>
			<li>When logging in with an email address that has no associated account, it will automatically be created (<code>autoCreateAccount</code> in config.json).</li>
			<li>If you want newly-created accounts to be past the tutorial, set <code>skipTutorial</code> to <code>true</code> in the config.json.</li>
		</ul>
		<p>Furthermore, SpaceNinjaServer has a WebUI that you can access at <a href="http://localhost/" target="_blank">http://localhost/</a> where you can view and edit your savedata, as well as modify the server's config.</p>
		<h2>Updates</h2>
		<p>SpaceNinjaServer is <a href="https://onlyg.it/OpenWF/SpaceNinjaServer/commits/branch/main" target="_blank">constantly updated</a> with new features and bug fixes, which is why it comes with an <code>UPDATE AND START SERVER</code> script, but in case you want to do it manually:</p>
		<ol>
			<li>Run <code>git pull --prune</code> in the SpaceNinjaServer folder</li>
			<li>(Optional) If you have the stripped assets, run <code>git pull</code> in the <code>static/data/0</code> folder</li>
			<li>Run <code>npm install --omit=dev --omit=optional</code> to synchronize library dependencies</li>
			<li>Now you can use <code>npm run raw</code> to start the server again</li>
		</ol>

		<div class="row g-3 my-4">
			<div class="col-6">
				<a href="client-setup<?=$ext;?>" class="card p-3 text-decoration-none">
					<small class="text-muted">Previous</small>
					<div class="fw-bold text-primary">« Client Setup</div>
				</a>
			</div>
			<div class="col-6">
				<a href="import<?=$ext;?>" class="card p-3 text-decoration-none text-end">
					<small class="text-muted">Next</small>
					<div class="fw-bold text-primary">Importing »</div>
				</a>
			</div>
		</div>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>
