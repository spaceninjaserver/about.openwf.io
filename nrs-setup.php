<!DOCTYPE html>
<html>
<head>
	<title>NRS Setup | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p><abbr title="NAT Relay Server">NRS</abbr> is used to exchange presence and session information, which is needed to establish squads. Because we don't want people spinning up "private servers" in the sense of being an alternative to the MMO experience that is offered on the live servers (especially where the server operator could add monetization), all options here have some trade-offs.</p>
		<h3>e-nrs</h3>
		<p>This instance runs an implementation supporting 7.3.0 - 43.5.4 and <abbr title="Proxying allows people behind strict NAT to establish indirect connections to each other.">proxying</abbr>. You can configure SpaceNinjaServer to instruct your clients to connect to it like so:</p>
		<ul>
			<li>Set <code>"nrsAddresses"</code> to <code>["e-nrs.source.wf"]</code></li>
			<li>Set <code>"dtls"</code> to <code>99</code></li>
		</ul>
		<h3>o-nrs</h3> <!-- will be discontinued in Jan 2027 -->
		<p>This instance runs an implementation supporting 35.5.0 - 40.0.5.1. You can configure SpaceNinjaServer to instruct your clients to connect to it like so:</p>
		<ul>
			<li>Set <code>"nrsAddresses"</code> to <code>["o-nrs.source.wf"]</code></li>
			<li>Set <code>"dtls"</code> to <code>99</code></li>
		</ul>
		<h3>lan-nrs</h3>
		<p>This implementation supports 7.3.0 - 10.8.0 for up to 4 players in the same LAN. The latest release can be downloaded <a href="https://openwf.io/supplementals/lan-nrs-1.0.0.zip" download>here</a>. Take note of the README and on-screen instructions.</p>

		<div class="row g-3 my-4">
			<div class="col-6">
				<a href="hub-server-setup<?=$ext;?>" class="card p-3 text-decoration-none">
					<small class="text-muted">Previous Guide</small>
					<div class="fw-bold text-primary">« Hub Server Setup</div>
				</a>
			</div>
		</div>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
</body>
</html>
