<!DOCTYPE html>
<html>
<head>
	<title>OpenWF Setup Guide</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<h2>Server Prerequisites</h2>
		<ul>
			<li>Git (<a href="https://git-scm.com/downloads" target="_blank">Download</a>)</li>
			<li>Node.js (<a href="https://nodejs.org/en/download" target="_blank">Download</a></a>)</li>
			<li>MongoDB (<a href="https://www.mongodb.com/try/download/community" target="_blank">Download</a></a>)</li>
		</ul>
		<h2>Server Installation</h2>
		<ol>
			<li>Run <code>git clone https://openwf.io/SpaceNinjaServer.git</code> in a command prompt to download SpaceNinjaServer in the current working directory</li>
			<li>Open the SpaceNinjaServer folder (<code>cd SpaceNinjaServer</code>)</li>
			<li>Copy config-vanilla.json to create a config.json</li>
			<li>(Optional) Edit the config.json to match your MongoDB settings (if not default) and however else you would like to configure the server</li>
			<li>(Optional) If you have a GB of free space, you might want to download stripped assets such as <abbr title="Ability videos show a brief clip of an ability in action. They can be seen by hovering over an ability in the Arsenal, Codex, etc.">ability videos</abbr> so the client can request them on-demand: Run <code>git clone https://openwf.io/0.git</code> in the <code>static/data</code> folder</li>
			<li>Run <code>npm install --omit=dev --omit=optional</code> to install library dependencies</li>
			<li>Now you can run <code>npm run raw</code> to start the server anytime</li>
		</ol>
		<h2>Server Update</h2>
		<p>You can simply run the <code>UPDATE AND START SERVER</code> script for this, but otherwise the steps are pretty simple:</p>
		<ol>
			<li>Run <code>git pull</code> in the SpaceNinjaServer folder</li>
			<li>(Optional) If you have the stripped assets, run <code>git pull</code> in the <code>static/data/0</code> folder</li>
			<li>Run <code>npm install --omit=dev --omit=optional</code> to synchronize library dependencies</li>
			<li>Now you can use <code>npm run raw</code> to start the server again</li>
		</ol>
		<h2>Client Patch</h2>
		<p>In order to connect to custom servers, the client needs to be patched, which is what the boostrapper is for.</p>
		<ul>
			<li><b>Prerequisite:</b> Because this is a project about preservation, we do not support the latest versions immediately. Please see <a href="old-versions<?=$ext;?>" target="_blank">here</a> for supported versions and download instructions.</li>
			<li><b>Setup:</b> Download <a href="https://openwf.io/supplementals/client%20drop-in/latest_dll" target="_blank">the boostrapper DLL (wtsapi32.dll)</a> and put it in your game's installation folder (the one where Warframe.x64.exe is in). On Linux, you may need to rename it to dwmapi.dll and/or use <code>WINEDLLOVERRIDE</code>.</li>
			<li><b>Usage:</b> With the DLL in place, you can double-click Warframe.x64.exe to start the game with OpenWF.<!-- Opening the game's launcher will revert it back to normal. --></li>
		</ul>
		<p>The bootstrapper is <a href="bootstrapper-manual<?=(!empty($ext) ? ".html" : "");?>" target="_blank">fully documented here</a>, but the most important point is that, while the game is running, you can visit <a href="http://localhost:6155/" target="_blank">http://localhost:6155/</a> to manage options, cheats, and scripts.</p>
		<h2>IRC Server</h2>
		<p>In addition to SpaceNinjaServer, you can also set up an IRC server for the in-game chat:</p>
		<ul>
			<li><a href="https://github.com/Sainan/warframe-irc-server/releases" target="_blank">warframe-irc-server</a> — an IRC server specifically made for OpenWF. Talks to SpaceNinjaServer to give "chat moderator" permissions and report dropped connections.</li>
			<li>InspIRCd — a well-known IRC server implementation used by DE themselves (albeit with unknown modifications). A pre-configured Windows copy of it can be downloaded <a href="https://openwf.io/supplementals/IRC.zip" download>here</a>.</li>
		</ul>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://censorcanary.org/censorcanary.js" defer></script>
</body>
</html>
