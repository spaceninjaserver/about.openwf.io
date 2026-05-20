<!DOCTYPE html>
<html>
<head>
	<title>Metadata Patching | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>Warframe uses metadata (or "property text") for many game design-related configurations, e.g. what <i>upgrades</i> a mod gives, what abilities a warframe has, what enemy types spawn for a given <i>enemy spec</i>, etc. For this guide, we will be creating a metadata patch for a mod from scratch, as it is the easiest kind of metadata patch.</p>
		<h2>Finding The Internal Path</h2>
		<p class="mb-1">Typically, the fastest way to find the internal path (or <code>uniqueName</code>) for a given <i>object</i> is by searching in <a href="https://github.com/calamity-inc/warframe-public-export" target="_blank">the Public Export</a>, <a href="https://github.com/calamity-inc/warframe-public-export-plus" target="_blank"><abbr title="Public Export Plus">PE+</abbr></a>, or on <a href="https://browse.wf" target="_blank">browse.wf</a>.</p>
		<p>As you become more acquainted with metadata, you may also find the EE.log and the Bootstrapper's <code>write_all_metadata_reads</code> configs to be useful.</p>
		<p>For this guide, we will be patching the Fever Strike mod, which is <code>/Lotus/Upgrades/Mods/Melee/WeaponToxinDamageMod</code>.</p>
		<h2>Reading Metadata</h2>
		<p>In order to read metadata, we first need to ask the Bootstrapper to hold onto it for us. Creating an empty patch would work, but enabling the <code>save_all_metadata</code> config is far less of a hassle. Afterwards, (re)start the game.</p>
		<p>Now, to query it, simply add the internal path from above at the end of <code>http://localhost:6155/get_effective_metadata?</code> and navigate to it. So, that makes <a href="http://localhost:6155/get_effective_metadata?/Lotus/Upgrades/Mods/Melee/WeaponToxinDamageMod" target="_blank">http://localhost:6155/get_effective_metadata?/Lotus/Upgrades/Mods/Melee/WeaponToxinDamageMod</a> for Fever Strike.</p>
		<p>You may see <code>no such patch</code> or <code>patch not applied (yet)</code>, in which case you'll need to do something to cause the game to load that <i>object</i>, but mods should be loaded by the time you're logged in.</p>
		<h2>Patching Metadata</h2>
		<p>The Bootstrapper provides a domain-specific language for performing text replacements on metadata, which may sound complicated, but it's actually really simple:</p>
		<ul>
			<li>Let's start by simply creating a new .txt file in the <code>OpenWF/Metadata Patches</code> folder, e.g. <code>Saryn Strike.txt</code>.</li>
			<li>Every metadata patch starts by declaring which path(s) it modifies, so we'll just put <code>/Lotus/Upgrades/Mods/Melee/WeaponToxinDamageMod</code> on the first line.</li>
			<li>If we want to add or replace a top-level property such as <code>LocalizeTag</code>, we write that verbatim, so <code>LocalizeTag=Saryn Strike</code> on the second line would rename the mod to Saryn Strike.</li>
			<li>Next, we'll tell the Bootstrapper to find-and-replace <code>DT_POISON</code> with <code>DT_CORROSIVE</code> by writing <code>r|DT_POISON|DT_CORROSIVE</code> on line three.</li>
			<li>Finally, we use a query replacement to change the <code>LocTag</code> property of the first <i>upgrade</i> by writing <code>q|Upgrades.0.LocTag|/Lotus/Language/Upgrades/WeaponCorrosiveDamage</code> on line four. Note that we start counting at 0.</li>
		</ul>
		<p>After saving this file, you can (re)start the game, and you should see the mod renamed and with the new effect of adding corrosive instead of toxin damage.</p>
		<p>For more details, consult the Bootstrapper's manual, which fully documents the syntax for Metadata Patches.</p>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
</body>
</html>
