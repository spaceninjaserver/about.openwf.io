<?php
header("Content-Type: text/xml");
?>
<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0">
	<channel>
		<title>OpenWF Version Archive Torrents</title>
		<?php
		preg_match_all('/(data-[a-z\-]+)="(magnet?:[^"]+)"/', file_get_contents(__DIR__."/../versions.php"), $matches, PREG_SET_ORDER, 0);
		foreach ($matches as $match)
		{
			$magnet = $match[2];

			parse_str(parse_url($magnet)["query"], $queryParams);
			$torrentName = $queryParams["dn"] ?? null;

			$has_torrent_file = file_exists(__DIR__."/torrents/$torrentName.torrent");

			if ($has_torrent_file)
			{
				if (str_starts_with($torrentName, "Warframe."))
				{
					$type = "cafe release";
				}
				else
				{
					$type = "user install";
				}
			}
			else
			{
				if (str_starts_with($torrentName, "cat labels for "))
				{
					$type = "cat labels";
				}
				else
				{
					$type = "update patch";
				}
			}
			?>
			<item>
				<title>[<?=$type;?>] <?=$torrentName;?></title>
				<guid><?=$queryParams["xt"];?></guid>
				<enclosure url="<?=str_replace("&", "&amp;", $magnet);?>" type="application/x-bittorrent" />
			</item>
			<?php
		}
		?>
	</channel>
</rss>