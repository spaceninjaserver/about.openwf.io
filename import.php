<!DOCTYPE html>
<html>
<head>
	<title>Importing Guide | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>This guide will go over how to get your inventory data from live servers and import it in SpaceNinjaServer.</p>
		<h2>Export via AlecaFrame</h2>
		<p>If you use AlecaFrame, you already have an encrypted version of your inventory. You can use <a href="https://sainan.github.io/alecaframe-inventory-parser/" target="_blank">this tool</a> to help you locate and decrypt it.</p>
		<h2>Export via warframe-api-helper</h2>
		<p>You can use <a href="https://github.com/Sainan/warframe-api-helper/releases/latest">warframe-api-helper</a> to get your credentials while the game is running & logged in on live. It will download your inventory for you and store it in <code>inventory.json</code>.</p>
		<p>However, using the credentials (<code>?accountId=...&nonce=...</code>), it is also possible to get your personal rooms: <code>https://api.warframe.com/api/getShip.php?accountId=...&nonce=...</code></p>
		<h2>Import to SpaceNinjaServer</h2>
		<p>Now that you have your inventory, open the SpaceNinjaServer WebUI and select the Import tab. You can simply paste the entire thing in the textbox and press the Submit button.</p>
		<p>If you have a getShip response, you can import it the same way. Otherwise, you are advised to use Unlock All Ship Features in the Cheats tab to avoid being locked out of most things.</p>

		<div class="row g-3 my-4">
			<div class="col-6">
				<a href="web-server-setup<?=$ext;?>" class="card p-3 text-decoration-none">
					<small class="text-muted">Previous</small>
					<div class="fw-bold text-primary">« Web Server Setup</div>
				</a>
			</div>
			<div class="col-6">
				<a href="chat-server-setup<?=$ext;?>" class="card p-3 text-decoration-none text-end">
					<small class="text-muted">Next</small>
					<div class="fw-bold text-primary">Chat Server Setup »</div>
				</a>
			</div>
		</div>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>
