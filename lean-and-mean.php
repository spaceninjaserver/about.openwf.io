<!DOCTYPE html>
<html>
<head>
	<title>Trimming Installs | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>This guide will share some tips to reduce the size of an install by deleting obsolete content. Keep in mind:</p>
		<ul>
			<li>The commands mentioned in this guide will permanently override/delete data. Ensure you won't be sorry!</li>
			<li>As per usual, never run Warframe.x64.exe without sideloading the Bootstrapper to avoid corrupting the install.</li>
		</ul>
		<h2>Flushing An Update Patch</h2>
		<p>Update patches work by providing (updated) content which the game can request on demand, but this means you need to have a copy of this content in <code>OpenWF/Content</code>, taking up 1.53 GiB in <abbr title="42.0.11">the worst case</abbr>. You can run the content update applet to "flush" this content into the Cache.Windows folder:</p>
		<ol>
			<li>
				<code>Warframe.x64.exe -silent -log:/Preprocess.log -graphicsDriver:dx11 -language:en -applet:/EE/Types/Framework/ContentUpdate</code>
				<ul>
					<li>Note the <code>dx11</code> and <code>en</code> in this command. For every configuration you intend to use, run the command accordingly.</li>
				</ul>
			</li>
			<li>Delete the <code>OpenWF/Content</code> folder.</li>
		</ol>
		<h2>Defragging The Cache</h2>
		<p>If you downloaded a user install or flushed an update patch, the Cache.Windows folder may contain old versions of some content, which can be cleaned up as follows:</p>
		<ul>
			<li>&gt;= U38.6: <code>Warframe.x64.exe -silent -log:/Defrag.log -applet:/EE/Types/Framework/CacheDefraggerIOCP /Tools/CachePlan.txt</code></li>
			<li>&lt; U38.6: <code>Warframe.x64.exe -silent -log:/Defrag.log -applet:/EE/Types/Framework/CacheDefraggerAsync /Tools/CachePlan.txt</code></li>
		</ul>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
</body>
</html>
