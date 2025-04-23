<!DOCTYPE html>
<html>
<head>
	<title>Asset Replacements Guide | OpenWF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>This guide will go through the steps to modify a texture used by Warframe via the OpenWF Bootstrapper.</p>
		<p>
			Before we start: <b>know what you're replacing</b>. I am going to be using <code>/Lotus/Interface/PolarityPoint.png</code> as an example, which is the icon for the Vazarin polarity.<br/>
			To explore textures, I can recommend using the GUI of <a href="https://github.com/Puxtril/Warframe-Exporter" target="_blank">Puxtril's Warframe Exporter</a>.		</p>
		<ol>
			<li>Clone <a href="https://github.com/Sainan/warframe-cache-tools" target="_blank">warframe-cache-tools</a>.</li>
			<li>Within your copy of warframe-cache-tools, you can now run <code>pluto extract.pluto /Lotus/Interface/PolarityPoint.png</code> to download & export the texture to the <code>assets</code> folder.</li>
			<li>Head inside of the <code>assets</code> folder until you find <code>PolarityPoint.png.dds</code>.</li>
			<li>Open the DDS file inside of a hex editor like <a href="https://hexed.it/" target="_blank">HexEd.it</a> or <a href="https://mh-nexus.de/en/hxd/" target="_blank">HxD</a> and take note of the format, e.g. you will see the string <code>DXT1</code> or <code>DXT5</code> in the 6th row.</li>
			<li>You are now free to modify the image however you want. Just take care that the file has the same name, dimensions/resolution, and format/encoding as seen before.</li>
			<li>To build your assets, run <code>pluto build.pluto</code> within the warframe-cache-tools directory.</li>
			<li>Finally, to get the assets into the game, you can copy the <code>content (managed)</code> folder from warframe-cache-tools into the OpenWF folder of your client. The Bootstrapper will automatically patch the game to use your modified content, and if you ever wanna stop using it, you can simply remove the client's <code>content (managed)</code> folder.</li>
		</ol>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
