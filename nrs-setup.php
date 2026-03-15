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
		<p><abbr title="NAT Relay Server">NRS</abbr> is used to exchange presence and session information, which is needed to establish squads. Unlike other server infrastructure, there is currently no self-hostable NRS server due to abuse concerns. However, <abbr title="Proxying is currently not implemented, so people behind strict NAT will not be able to establish peer-to-peer connections with each other.">partial</abbr> NRS reimplementations are hosted publicly.</p>
		<h3>o-nrs</h3>
		<p>This instance supports 35.5.0 - 40.0.5.1. You can configure SpaceNinjaServer to instruct your clients to connect to it like so:</p>
		<ul>
			<li>Set <code>"nrsAddress"</code> to <code>"o-nrs.source.wf"</code></li>
			<li>Set <code>"dtls"</code> to <code>99</code></li>
		</ul>
		<h3>c-nrs</h3>
		<p>This instance supports 41.0.x. You can configure SpaceNinjaServer to instruct your clients to connect to it like so:</p>
		<ul>
			<li>Set <code>"nrsAddress"</code> to <code>"c-nrs.source.wf:6500"</code></li>
			<li>Set <code>"dtls"</code> to <code>99</code></li>
		</ul>
		<h3>e-nrs</h3>
		<p>This instance supports 15.0.0 - 29.10.0. You can configure SpaceNinjaServer to instruct your clients to connect to it like so:</p>
		<ul>
			<li>Set <code>"nrsAddress"</code> to <code>"e-nrs.source.wf"</code></li>
			<li>Set <code>"dtls"</code> to <code>99</code></li>
		</ul>

		<div class="row g-3 my-4">
			<div class="col-6">
				<a href="hub-server-setup<?=$ext;?>" class="card p-3 text-decoration-none">
					<small class="text-muted">Previous</small>
					<div class="fw-bold text-primary">« Hub Server Setup</div>
				</a>
			</div>
		</div>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>
