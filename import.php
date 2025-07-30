<!DOCTYPE html>
<html>
<head>
	<title>Importing Guide | OpenWF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>This guide will go over how to get your inventory data from live servers and import it in SpaceNinjaServer.</p>
		<h2>Exporting Your Inventory From Live</h2>
		<ul>
			<li>If you use AlecaFrame, you already have an encrypted version of your inventory. You can use <a href="https://sainan.github.io/alecaframe-inventory-parser/" target="_blank">this tool</a> to help you locate and decrypt it.</li>
			<li>Alternatively, you can use <a href="https://github.com/Sainan/warframe-api-helper/releases/latest">warframe-api-helper</a> to get a fresh copy by running it while the game is running & logged in on live. It will store it in <code>inventory.json</code>.</li>
		</ul>
		<h2>Importing Your Inventory To SpaceNinjaServer</h2>
		<p>Now that you have your inventory, open the SpaceNinjaServer WebUI and locate the "Import" tab. You can simply paste the entire thing in the textbox and press the "Submit" button.</p>
		<p>Note that ship features are not part of the inventory so you may want to enable the "unlock all ship features" cheat or manually populate them in the MongoDB <code>personalrooms</code> collection.</p>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
