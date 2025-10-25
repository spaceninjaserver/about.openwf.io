<?php
$ext = (!empty($_DYNSTAT) ? ".html" : (substr($_SERVER["SERVER_SOFTWARE"] ?? "", 0, 3) == "PHP" ? ".php" : ""));
$path = strtok($_SERVER["REQUEST_URI"], '?');
?>
<nav class="navbar navbar-expand-sm bg-body-tertiary">
	<div class="container">
		<a class="navbar-brand" href="." <?php if ($path == "/"): ?> onclick="event.preventDefault();" <?php endif; ?>>OpenWF</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar-content">
			<ul class="navbar-nav me-auto mb-0">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle<?=((substr($path, 0, 6) == "/guide" || substr($path, 0, 7) == "/import" || substr($path, 0, 25) == "/asset-replacements-guide" || substr($path, 0, 13) == "/old-versions") ? " active" : ""); ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Guides</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item<?=(substr($path, 0, 6) == "/guide" ? " active" : ""); ?>" href="guide<?=$ext;?>">Setup</a></li>
						<li><a class="dropdown-item<?=(substr($path, 0, 7) == "/import" ? " active" : ""); ?>" href="import<?=$ext;?>">Importing</a></li>
						<li><a class="dropdown-item<?=(substr($path, 0, 25) == "/asset-replacements-guide" ? " active" : ""); ?>" href="asset-replacements-guide<?=$ext;?>">Asset Replacements</a></li>
						<li><a class="dropdown-item<?=(substr($path, 0, 13) == "/old-versions" ? " active" : ""); ?>" href="old-versions<?=$ext;?>">Old Versions</a></li>
					</ul>
				</li>
				<li class="nav-item"><a class="nav-link<?=(substr($path, 0, 11) == "/contribute" ? " active" : ""); ?>" href="contribute<?=$ext;?>">Contribute</a></li>
				<li class="nav-item"><a class="nav-link" href="https://discord.gg/PNNZ3asUuY" target="_blank">Discord</a></li>
			</ul>
		</div>
	</div>
</nav>
<script>
	// Disable navbar links that point back to this page.
	document.querySelectorAll(".navbar-nav .nav-link.active, .navbar-nav .dropdown-item.active").forEach(elm =>
	{
		elm.onclick = (event) => { event.preventDefault() };
	});

	// User-facing stuff really has no reason to be served over insecure HTTP.
	if (location.host == "openwf.io" && location.protocol == "http:")
	{
		location.protocol = "https:";
	}
</script>