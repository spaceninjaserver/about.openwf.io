<!DOCTYPE html>
<html>
<head>
	<title>Chat Server Setup | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<h2>Chat Servers</h2>
		<p>Warframe uses <abbr title="Internet Relay Chat">IRC</abbr> for its in-game chat, so you have some options:</p>
		<ul>
			<li><a href="https://github.com/Sainan/warframe-irc-server/releases" target="_blank">warframe-irc-server</a> — an IRC server specifically made for OpenWF. Talks to SpaceNinjaServer to give "chat moderator" permissions and report dropped connections.</li>
			<li>InspIRCd — a well-known IRC server implementation used by DE themselves (albeit with unknown modifications). A pre-configured Windows copy of it can be downloaded <a href="https://openwf.io/supplementals/IRC.zip" download>here</a>.</li>
		</ul>
		<h2>Auto-Starting</h2>
		<ul>
			<li>You can provide a relative path to the IRC executable in SpaceNinjaServer's config.json under <code>ircExecutable</code> to have SpaceNinjaServer run it as a child process.</li>
			<li>On Windows, you can put a shortcut to the executable in <code>%appdata%\Microsoft\Windows\Start Menu\Programs\Startup</code> to have it start when you log into Windows.</li>
		</ul>

		<div class="row g-3 my-4">
			<div class="col-6">
				<a href="import<?=$ext;?>" class="card p-3 text-decoration-none">
					<small class="text-muted">Previous</small>
					<div class="fw-bold text-primary">« Importing</div>
				</a>
			</div>
		</div>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>
