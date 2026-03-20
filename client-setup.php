<!DOCTYPE html>
<html>
<head>
	<title>Client Setup | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>This guide will explain the process of setting up the Bootstrapper in a Warframe install, which will allow you to connect to custom servers.</p>
		<h2>Prerequisites</h2>
		<p>This guide assumes that you have a supported version of Warframe. Please see <a href="versions<?=$ext;?>" target="_blank">here</a> for supported versions and download instructions.</p>
		<h2>Setup</h2>
		<ol>
			<li><a href="https://ipfs.io/ipfs/bafkreifedzhddsiz4tfxwkzuzu6722seqvzhp7fdxkvdd6ao3canjesyda?filename=Bootstrapper+Setup.exe" target="_blank">Download Bootstrapper Setup</a> (<a href="https://onlyg.it/OpenWF/Bootstrapper-Setup" target="_blank">source code</a>, <a href="https://openwf.io/supplementals/Bootstrapper%20Setup.sh" download>Linux version</a>)</li>
			<li>Move Bootstrapper Setup into the game installation folder that you would like to patch (next to Warframe.x64.exe)</li>
			<li>Run Bootstrapper Setup</li>
			<li>You may remove Bootstrapper Setup from this folder after it has successfully finished</li>
		</ol>
		<!-- <h3>A note for Linux users</h3>
		<p>The Linux version of Bootstrapper Setup produces a dwmapi.dll because that's the only way sideloading seemed to work without friction in our testing. However, Warframe versions prior to 29.0.0 did not import this DLL, so you will need to rename it to <code>wtsapi32.dll</code> or <code>version.dll</code> and then force sideloading. To force side-loading, provide an environment variable like <code>WINEDLLOVERRIDES="wtsapi32.dll=n,b"</code>.</p> -->
		<h2>First Run <small>(Optional)</small></h2>
		<p>In general, you can simply double-click Warframe.x64.exe to start the game now. However, for our first run:</p>
		<ol>
			<li>Open a command prompt/terminal in the game installation folder</li>
			<li>Run <code>Warframe.x64.exe -owfServerHost:demo.openwf.io</code></li>
			<li>Attempting to log in with any credentials should show you that the request was successfully redirected (<a href="_assets/demo.avif" target="_blank">what that looks like</a>)</li>
		</ol>
		<p>While on the login screen, you also have an opportunity to visit <a href="http://localhost:6155/" target="_blank">http://localhost:6155/</a>, which is available while the game is running. You may not find any immediately-useful options, but it's good to keep in mind; maybe bookmark it.</p>
		<h2>Configuration</h2>
		<p>The <code>OpenWF/Client Config.json</code> file gives you many options, such as the fallback language and graphics driver. For the language, input the 2-letter code, so <code>en</code> for English, <code>zh</code> for Chinese (Simplifed), etc.</p>
		<p>For more information, check out the Bootstrapper's comprehensive manual, which you can find <a href="bootstrapper-manual<?=(!empty($ext) ? ".html" : "");?>" target="_blank">online</a> and in the <code>OpenWF/Reference Manual.html</code> file.</p>

		<div class="row g-3 my-4">
			<div class="col-6"></div>
			<div class="col-6">
				<a href="web-server-setup<?=$ext;?>" class="card p-3 text-decoration-none text-end">
					<small class="text-muted">Next</small>
					<div class="fw-bold text-primary">Web Server Setup »</div>
				</a>
			</div>
		</div>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>
