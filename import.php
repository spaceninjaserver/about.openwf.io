<!DOCTYPE html>
<html>
<head>
	<title>Importing Guide | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://censorcanary.org/censorcanary.js" defer></script>
</body>
</html>
