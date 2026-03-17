<?php
$ext = (!empty($_DYNSTAT) ? "" : (substr($_SERVER["SERVER_SOFTWARE"] ?? "", 0, 3) == "PHP" ? ".php" : ""));
$path = strtok(strtok($_SERVER["REQUEST_URI"], '?'), '.');
?>
<nav class="navbar navbar-expand-sm bg-body-tertiary">
	<div class="container">
		<a class="navbar-brand" href="." <?php if ($path == "/"): ?> onclick="event.preventDefault();" <?php endif; ?>>OpenWF</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar-content">
			<ul class="navbar-nav me-auto mb-0">
				<li class="nav-item"><a class="nav-link<?=($path == "/versions" ? " active" : ""); ?>" href="versions<?=$ext;?>">Version Archive</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle<?=(($path == "/client-setup" || $path == "/web-server-setup" || $path == "/import" || $path == "/chat-server-setup" || $path == "/hub-server-setup" || $path == "/nrs-setup" || $path == "/port-forwarding" || $path == "/dockerized-server-setup" || $path == "/hardening-security"  || $path == "/metadata-patching" || $path == "/asset-replacements-guide") ? " active" : ""); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Guides</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item<?=($path == "/client-setup" ? " active" : ""); ?>" href="client-setup<?=$ext;?>">Client Setup</a></li>
						<li><a class="dropdown-item<?=($path == "/web-server-setup" ? " active" : ""); ?>" href="web-server-setup<?=$ext;?>">Web Server Setup</a></li>
						<li><a class="dropdown-item<?=($path == "/import" ? " active" : ""); ?>" href="import<?=$ext;?>">Importing</a></li>
						<li><a class="dropdown-item<?=($path == "/chat-server-setup" ? " active" : ""); ?>" href="chat-server-setup<?=$ext;?>">Chat Server Setup</a></li>
						<li><a class="dropdown-item<?=($path == "/hub-server-setup" ? " active" : ""); ?>" href="hub-server-setup<?=$ext;?>">Hub Server Setup</a></li>
						<li><a class="dropdown-item<?=($path == "/nrs-setup" ? " active" : ""); ?>" href="nrs-setup<?=$ext;?>">NRS Setup</a></li>
						<li><a class="dropdown-item<?=($path == "/port-forwarding" ? " active" : ""); ?>" href="port-forwarding<?=$ext;?>">Port Forwarding</a></li>
						<li><a class="dropdown-item<?=($path == "/dockerized-server-setup" ? " active" : ""); ?>" href="dockerized-server-setup<?=$ext;?>">Dockerized Server Setup</a></li>
						<li><a class="dropdown-item<?=($path == "/hardening-security" ? " active" : ""); ?>" href="hardening-security<?=$ext;?>">Hardening Security</a></li>
						<li><a class="dropdown-item<?=($path == "/metadata-patching" ? " active" : ""); ?>" href="metadata-patching<?=$ext;?>">Metadata Patching</a></li>
						<li><a class="dropdown-item" href="https://onlyg.it/janisslsm/warframe-companion-patcher" target="_blank">Companion App</a></li>
						<li><a class="dropdown-item<?=($path == "/asset-replacements-guide" ? " active" : ""); ?>" href="asset-replacements-guide<?=$ext;?>">Asset Replacements</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link<?=($path == "/contribute" ? " active" : ""); ?>" href="contribute<?=$ext;?>">Contribute</a></li>
				<li class="nav-item"><a class="nav-link" href="https://discord.gg/PNNZ3asUuY" target="_blank">Discord</a></li>
			</ul>
		</div>
	</div>
</nav>
<script>
	// User-facing stuff really has no reason to be served over insecure HTTP.
	if (location.host == "openwf.io" && location.protocol == "http:")
	{
		location.protocol = "https:";
	}
</script>