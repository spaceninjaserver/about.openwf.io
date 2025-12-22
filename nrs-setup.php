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
		<p><abbr title="NAT Relay Server">NRS</abbr> is used to exchange presence and session information, which is needed to establish squads. Unlike other server infrastructure, there is currently no self-hostable NRS server due to abuse concerns. However, a <abbr title="Proxying is currently not implemented, so people behind strict NAT will not be able to establish peer-to-peer connections with each other.">partial</abbr> NRS reimplementation is currently hosted publicly. This guide will explain how to configure SpaceNinjaServer to instruct your clients to connect to it.</p>
		<h2>Without a Hub Server</h2>
		<p>If you don't use or care about having a <a href="hub-server-setup<?=$ext;?>">hub server</a>, the configuration is quite simple:</p>
		<ul>
			<li>Set <code>"nrsAddress"</code> to <code>"nrs.source.wf"</code></li>
			<li>Set <code>"dtls"</code> to <code>99</code></li>
		</ul>
		<h2>With a Hub Server</h2>
		<p>There is a slight complication here because we cannot configure DTLS separately for HUB and NRS: The NRS server requires DTLS, but the HUB server does not support it. To work around this, we will enable DTLS but ask the Bootstrapper to proxy HUB traffic over localhost:</p>
		<ul>
			<li>Set <code>"nrsAddress"</code> to <code>"nrs.source.wf"</code></li>
			<li>Set <code>"dtls"</code> to <code>99</code></li>
			<li>Set <code>"hubAddress"</code> to <code>"127.0.0.1:6951"</code></li>
			<li>Set <code>"udpProxyUpstream"</code> (under <code>"tunables"</code>) to the address clients can use to reach your HUB server e.g. <code>"192.168.1.2:6952"</code></li>
		</ul>
		<p>Note that <code>192.168.1.2</code> is an example IP. In the case where SpaceNinjaServer is on the same machine, you'll want this to be identical to the server host in your client config.</p>

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
