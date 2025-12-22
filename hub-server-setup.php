<!DOCTYPE html>
<html>
<head>
	<title>Hub Server Setup | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>Hubs (including relays and dojos) require a proprietary server for prex cards to appear, and, if multiple players are on the same server, for them to see and interact with each other (blessings, trading). This guide will explain how to set up <a href="https://github.com/Sainan/warframe-hub-server" target="_blank">a source-available reimplementation</a>.</p>
		<h2>Setup</h2>
		<ol>
			<li><a href="https://github.com/Sainan/warframe-hub-server/releases" target="_blank">Download the latest release of warframe-hub-server</a></li>
			<li>Now you can run the warframe-hub-server executable at any time to start the hub server</li>
		</ol>
		<h2>Auto-Starting</h2>
		<ul>
			<li>You can provide a relative path to the executable in SpaceNinjaServer's config.json under <code>hubExecutable</code> to have SpaceNinjaServer run it as a child process.</li>
			<li>On Windows, you can put a shortcut to the executable in <code>%appdata%\Microsoft\Windows\Start Menu\Programs\Startup</code> to have it start when you log in to Windows.</li>
		</ul>

		<div class="row g-3 my-4">
			<div class="col-6">
				<a href="chat-server-setup<?=$ext;?>" class="card p-3 text-decoration-none">
					<small class="text-muted">Previous</small>
					<div class="fw-bold text-primary">« Chat Server Setup</div>
				</a>
			</div>
			<div class="col-6">
				<a href="nrs-setup<?=$ext;?>" class="card p-3 text-decoration-none text-end">
					<small class="text-muted">Next</small>
					<div class="fw-bold text-primary">NRS Setup »</div>
				</a>
			</div>
		</div>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>
