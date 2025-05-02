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
				<!-- 4212893560910494140 (38.5.0?) -->
				<tr>
					<td><code>2024.12.11.14.26</code></td>
					<td>Early build of Warframe: 1999</td>
					<td>3864063200081954630</td>
				</tr>
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
				<tr>
					<td><code>2024.08.21.20.02</code></td>
					<td>The Lotus Eaters: Hotfix 36.1.2</td>
					<td>8111233839173446959</td>
				</tr>
				<tr>
					<td><code>2024.07.17.17.07</code></td>
					<td>Jade Shadows: Hotfix 36.0.7</td>
					<td>7104716125379362906</td>
				</tr>
				<tr>
					<td><code>2024.06.25.16.44</code></td>
					<td>Jade Shadows: Hotfix 36.0.4</td>
					<td>8456987056335242580</td>
				</tr>
				<tr>
					<td><code>2024.06.12.18.42</code></td>
					<td>Early build of Jade Shadows</td>
					<td>8444137865636064549</td>
				</tr>
				<tr>
					<td><code>2024.03.24.20.00</code></td>
					<td>Update 35.5: Dante Unbound</td>
					<td>4262681179882731333</td>
				</tr>
				<tr>
					<td><code>2024.02.16.17.13</code></td>
					<td>Whispers in the Walls: Update 35.1.0</td>
					<td>3417254152679980994</td>
				</tr>
				<!-- Also verified that 34.0.8 works, but sadly there's no manifest id for any of U34.-->
				<!-- Beyond this point, there is no information to help correlate the build labels, so I'm just writing whatever title I see on the login screen. -->
				<tr>
					<td><code>2023.07.26.16.38</code></td>
					<td><!-- Update 33.6: -->Echoes of Duviri</td>
					<td>4487452668036984689</td>
				</tr>
				<tr>
					<td><code>2023.06.22.13.21</code></td>
					<td><!-- Update 33.5: -->The Seven Crimes of Kullervo</td>
					<td>7706746084885057576</td>
				</tr>
				<tr>
					<td><code>2023.06.21.07.11</code></td>
					<td><!-- Update 33.5: -->The Seven Crimes of Kullervo</td>
					<td>1040973097284770411</td>
				</tr>
				<tr>
					<td><code>2023.04.25.23.40</code></td>
					<td><!-- Update 33: -->The Duviri Paradox</td>
					<td>503269306359201928</td>
				</tr>
				<tr>
					<td><code>2023.02.13.10.22</code></td>
					<td><!-- Update 32.3: -->Citrine's Last Wish</td>
					<td>2084947150827453084</td>
				</tr>
				<!-- 1591604753021484150 -->
				<tr>
					<td><code>2022.09.06.19.24</code></td>
					<td><!-- Update 32: -->Veilbreaker</td>
					<td>2433324865707385268</td>
				</tr>
				<!-- 7280281005656793707 -->
				<!-- 8725083537193522917 -->
				<tr>
					<td><code>2022.04.29.12.53</code></td>
					<td><!-- Update 31.5: -->Angels of the Zariman</td>
					<td>4634493262513910961</td>
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
