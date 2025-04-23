<?php
$dll_version = @file_get_contents("supplementals/client drop-in/latest.txt");
$version = ""; //json_decode(file_get_contents("supplementals/static data/buildConfig.json"), true)["version"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>OpenWF Setup Guide</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<h2>Client/Boostrapper</h2>
		<p>To use OpenWF, you only need to download the <a href="/supplementals/client%20drop-in/<?=$dll_version;?>/dwmapi.dll" download>dwmapi.dll</a> and put it in your game's installation folder (the one where Warframe.x64.exe is in).</p>
		<ul>
			<li>As long as this DLL is in the game folder, you can double-click Warframe.x64.exe to start the game with OpenWF.</li>
			<li>Opening the game's launcher will revert it back to normal.</li>
		</ul>
		<p>The DLL is <a href="bootstrapper-manual" target="_blank">fully documented here</a>, but the most important point is that, while the game is running, you can visit <a href="http://localhost:6155/" target="_blank">http://localhost:6155/</a> to manage options, cheats, and scripts.</p>
		<p><b>Next steps:</b> By default, the DLL redirects requests to localhost — meaning the same machine you're playing on — so you'll either need to set up a server or change the server_host to point to a different machine that's already got a server running.</p>
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
			<li>Run <code>copy config.json.example config.json</code> to create a config.json from config.json.example</li>
			<li>(Optional) Edit the config.json to match your MongoDB settings (if not default) and however else you would like to configure the server</li>
			<li>(Optional) If you want stripped assets (~622 <abbr title="mebibytes (1 MiB = 1048576 bytes)">MiB</abbr>) which the client will request from the server on-demand (most notably, <abbr title="Ability videos show a brief clip of an ability in action. They can be seen by hovering over an ability in the Arsenal, Codex, etc.">ability videos</abbr>), run <code>git clone https://openwf.io/0.git</code> in the <code>static/data</code> folder</li>
			<li>Run <code>npm install --omit=dev</code> to install library dependencies</li>
			<li>Run <code>npm run build</code> to build the server</li>
			<li>Now you can run <code>npm run start</code> to start the server anytime</li>
		</ol>
		<h2>Server Update</h2>
		<p>Windows users can simply double-click the <code>UPDATE AND START SERVER.bat</code>, but otherwise the steps are pretty simple:</p>
		<ol>
			<li>Run <code>git pull</code> in the SpaceNinjaServer folder</li>
			<li>(Optional) If you have the stripped assets, run <code>git pull</code> in the <code>static/data/0</code> folder</li>
			<li>Run <code>npm install --omit=dev</code> to synchronize library dependencies</li>
			<li>Run <code>npm run build</code> to build the server</li>
			<li>Now you can use <code>npm run start</code> to start the server again</li>
		</ol>
		<h2>IRC Server</h2>
		<p>In addition to SpaceNinjaServer, you can also set up an IRC server for the in-game chat:</p>
		<ul>
			<li><a href="https://github.com/Sainan/warframe-irc-server/releases" target="_blank">warframe-irc-server</a> — an IRC server specifically made for Warframe. Talks to SpaceNinjaServer to give "chat moderator" permissions and report dropped connections.</li>
			<li>InspIRCd — a well-known IRC server implementation used by DE themselves (albeit with unknown modifications). A pre-configured Windows copy of it can be downloaded <a href="/supplementals/IRC.zip" download>here</a>.</li>
		</ul>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
