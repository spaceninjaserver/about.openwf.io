<!DOCTYPE html>
<html>
<head>
	<title>Manual Client Setup | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>This guide will explain the process of setting up the Bootstrapper in a Warframe install, which will allow you to connect to custom servers. <a href="client-setup<?=$ext;?>">Automated version here.</a></p>
		<h2>Setup</h2>
		<ol>
			<li>
				<a href="http://openwf.io/supplementals/client%20drop-in/download_latest" download>Download the latest Bootstrapper DLL & Hotfix</a> and drop it into the game install such that the DLL sits next to Warframe.x64.exe.
				<ul>
					<li>All versions are <a href="https://mega.nz/folder/ZlZV3BJB#uOt_feKorkrpGvZsawUx9w" target="_blank">mirrored on Mega</a>.</li>
				</ul>
			</li>
			<li>On Windows, for U38.6 and &gt;= U41, Warframe.x64.exe needs to be treated with <a href="https://github.com/Sainan/Sideloadify/releases" target="_blank">Sideloadify</a> to ensure it loads <code>dwmapi.dll</code>.</li>
			<li>For versions below U29, the DLL must be called <code>wtsapi32.dll</code> or <code>version.dll</code>. On Linux, set the environment variable <code>WINEDLLOVERRIDES="wtsapi32.dll=n,b"</code> to ensure that the Bootstrapper is loaded.</li>
		</ol>
		<h2>Usage</h2>
		<ul>
			<li>To start the game, you can simply run the <code>Launch with OpenWF</code> script.</li>
			<li>The <code>OpenWF/Client Config.json</code> file gives you many options, such as the fallback language and graphics driver. For the language, input the 2-letter code, so <code>en</code> for English, <code>zh</code> for Chinese (Simplifed), etc.</li>
			<li>While the game is running, you can visit <a href="http://localhost:6155/" target="_blank">http://localhost:6155/</a> to access Bootstrapper features like scripts.</li>
		</ul>
		<p>For more information, check out the Bootstrapper's comprehensive manual, which you can find <a href="bootstrapper-manual<?=(!empty($ext) ? ".html" : "");?>" target="_blank">online</a> and in the <code>OpenWF/Reference Manual.html</code> file.</p>

		<div class="row g-3 my-4">
			<div class="col-6">
				<a href="versions<?=$ext;?>" class="card p-3 text-decoration-none">
					<small class="text-muted">Previous Guide</small>
					<div class="fw-bold text-primary">« Version Archive</div>
				</a>
			</div>
			<div class="col-6">
				<a href="web-server-setup<?=$ext;?>" class="card p-3 text-decoration-none text-end">
					<small class="text-muted">Next Guide</small>
					<div class="fw-bold text-primary">Web Server Setup »</div>
				</a>
			</div>
		</div>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
</body>
</html>
