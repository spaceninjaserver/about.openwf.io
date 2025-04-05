<?php
require "_components/loc.php";
$dll_version = @file_get_contents("supplementals/client drop-in/latest.txt");
$version = ""; //json_decode(file_get_contents("supplementals/static data/buildConfig.json"), true)["version"];
?>
<!DOCTYPE html>
<html>
<head>
	<title><?=loc("setup.title");?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<h2><?=loc("setup.c.title");?></h3>
		<p><?=str_replace("|DLL|", '<a href="/supplementals/client%20drop-in/'.$dll_version.'/dwmapi.dll" download>dwmapi.dll</a>', loc("setup.c.simple"));?></p>
		<ul>
			<li><?=loc("setup.c.dblclk");?></li>
			<li><?=loc("setup.c.laurvt");?></li>
		</ul>
		<p><?=loc("setup.c.docshttp");?></p>
		<p><?=loc("setup.c.next");?></p>
		<h2><?=loc("setup.s.prereq");?></h2>
		<ul>
			<li>Git (<a href="https://git-scm.com/downloads" target="_blank"><?=loc("download");?></a>)</li>
			<li>Node.js (<a href="https://nodejs.org/en/download" target="_blank"><?=loc("download");?></a></a>)</li>
			<li>MongoDB (<a href="https://www.mongodb.com/try/download/community" target="_blank"><?=loc("download");?></a></a>)</li>
		</ul>
		<h2><?=loc("setup.s.install");?></h2>
		<ol>
			<li><?=loc("setup.s.install.1");?></li>
			<li><?=loc("setup.s.install.2");?></li>
			<li><?=loc("setup.s.install.3");?></li>
			<li><?=loc("setup.s.install.4");?></li>
			<li><?=loc("setup.s.install.5");?></li>
			<li><?=loc("setup.s.install.6");?></li>
			<li><?=loc("setup.s.install.7");?></li>
			<li><?=loc("setup.s.install.8");?></li>
		</ol>
		<h2><?=loc("setup.s.update");?></h2>
		<p><?=loc("setup.s.update.wineasy");?></p>
		<ol>
			<li><?=loc("setup.s.update.1");?></li>
			<li><?=loc("setup.s.update.2");?></li>
			<li><?=loc("setup.s.update.3");?></li>
			<li><?=loc("setup.s.install.7");?></li>
			<li><?=loc("setup.s.update.5");?></li>
		</ol>
		<h2><?=loc("setup.irc");?></h2>
		<p><?=loc("setup.irc.leadin");?></p>
		<ul>
			<li><?=loc("setup.irc.wheel");?></li>
			<li><?=loc("setup.irc.inspircd");?></li>
		</ul>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
