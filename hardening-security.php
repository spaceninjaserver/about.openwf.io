<!DOCTYPE html>
<html>
<head>
	<title>Hardening Security | OpenWF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="_assets/bootstrap.min.css">
</head>
<body data-bs-theme="dark">
	<?php require "_components/navbar.php"; ?>
	<div class="container mt-3">
		<p>It's hard to not at least have some level of security nowadays, so you don't have to worry about a passive listener seeing sensitive information, but a <a href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack" target="_blank">man-in-the-middle (MITM) attack</a> could defeat encryption, revealing your credentials, chat messages, etc. To prevent this, we can use the same security that you are already used to when browsing the web.</p>
		<h2>Prerequisites</h2>
		<p>You're going to need...</p>
		<ul>
			<li><a href="https://certbot.eff.org/">Certbot</a> (you only need the <code>certbot</code> command to work; this guide will explain the rest)</li>
			<li>A domain name that points to your server's IP address ("hostname"). For simplicity, we're going to use <a href="http://my.iptls.com/" target="_blank">x-x-x-x.iptls.com</a> for this.</li>
		</ul>
		<h2>Obtaining A Certificate</h2>
		<p>With SpaceNinjaServer (or the Dockerized Server) running:</p>
		<ul>
			<li><code>cd</code> into the "SpaceNinjaServer" or "OpenWF Dockerized Server" folder</li>
			<li>Run <code>certbot certonly --non-interactive --agree-tos --key-type rsa --webroot -w . -d $(curl http://my.iptls.com)</code></li>
		</ul>
		<p>You should now have a certificate. We're going to assume it's stored in <code>/etc/letsencrypt/live/x-x-x-x.iptls.com/</code>.</p>
		<h2>Installing The Certificate</h2>
		<p>If you're not using Docker:</p>
		<ul>
			<li>Open SpaceNinjaServer's config.json</li>
			<li>Set <code>"httpsCertFile"</code> to <code>"/etc/letsencrypt/live/x-x-x-x.iptls.com/fullchain.pem"</code> (adjust accordingly)</li>
			<li>Set <code>"httpsKeyFile"</code> to <code>"/etc/letsencrypt/live/x-x-x-x.iptls.com/privkey.pem"</code> (adjust accordingly)</li>
			<li>Replace the cert files in your IRC server with fullchain.pem for cert.pem and privkey.pem for key.pem, then restart it to apply.</li>
		</ul>
		<p>If you are using Docker:</p>
		<ul>
			<li>Open the docker-compose.yml</li>
			<li>
				Add the following to SpaceNinjaServer's volumes:
				<ul>
					<li><code>/etc/letsencrypt/live/x-x-x-x.iptls.com/fullchain.pem:/etc/letsencrypt/live/x-x-x-x.iptls.com/fullchain.pem:ro</code> (adjust accordingly)</li>
					<li><code>/etc/letsencrypt/live/x-x-x-x.iptls.com/privkey.pem:/etc/letsencrypt/live/x-x-x-x.iptls.com/privkey.pem:ro</code> (adjust accordingly)</li>
				</ul>
			</li>
			<li>
				Add the following to warframe-irc-server's volumes:
				<ul>
					<li><code>/etc/letsencrypt/live/x-x-x-x.iptls.com/fullchain.pem:/app/cert/cert.pem:ro</code> (adjust accordingly)</li>
					<li><code>/etc/letsencrypt/live/x-x-x-x.iptls.com/privkey.pem:/app/cert/key.pem:ro</code> (adjust accordingly)</li>
				</ul>
			</li>
			<li>Open SpaceNinjaServer's config.json</li>
			<li>Set <code>"httpsCertFile"</code> to <code>"/etc/letsencrypt/live/x-x-x-x.iptls.com/fullchain.pem"</code> (adjust accordingly)</li>
			<li>Set <code>"httpsKeyFile"</code> to <code>"/etc/letsencrypt/live/x-x-x-x.iptls.com/privkey.pem"</code> (adjust accordingly)</li>
			<li>Restart the dockerized server for changes to apply fully</li>
		</ul>
		<h2>Securely Connecting</h2>
		<p>The client config can now have <code>secure_connections</code> set to true, with <code>server_host</code> being the hostname we got a certificate for.</p>
		<p>With <code>secure_connections</code>, a MITM attack will now be surfaced via a connection failure and the attacker won't receive your credentials, chat messages, etc.</p>
	</div>
	<script src="_assets/bootstrap.bundle.min.js"></script>
	<script src="_assets/censorcanary.min.js" defer></script>
</body>
</html>
