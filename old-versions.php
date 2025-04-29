<!DOCTYPE html>
<html>
<head>
	<title>Old Versions | OpenWF</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<h3>Recent Versions</h3>
		<p>While the Bootstrapper and SpaceNinjaServer do stay up-to-date, they are still compatible with previous versions and should at least allow you to login and play:</p>
		<table class="table">
			<thead>
				<tr>
					<th>Code Version</th>
					<th>Title</th>
					<th>Steam Manifest ID</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><code>2024.10.11.10.06</code></td>
					<td>Koumei & the Five Fates: Hotfix 37.0.6</td>
					<td>513490184226321110</td>
				</tr>
				<tr>
					<td><code>2024.09.30.16.56</code></td>
					<td>Early build of Koumei & the Five Fates</td>
					<td>2655930801276651913</td>
				</tr>
			</tbody>
		</table>
		<p>To download an old version, you can use <a href="https://github.com/SteamRE/DepotDownloader/releases">DepotDownloader</a> like so: <code>DepotDownloader.exe -app 230410 -depot 230411 -manifest &lt;manifest id&gt; -username &lt;your steam username&gt;</code></p>
		<h3>2013 Warframe</h3>
		<p>There is a DLL + fork of SpaceNinjaServer that can be used to revisit 2013 Warframe. More information about this can be found <a href="https://discord.gg/PNNZ3asUuY">on our Discord</a>, specifically <a href="https://discord.com/channels/1108159019635462206/1280628166825873510/1280628233355923497">in this thread</a>.</p>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
