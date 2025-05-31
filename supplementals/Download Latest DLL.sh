#!/bin/bash

echo "Fetching latest version..."
latest_version=$(curl -s "https://openwf.io/supplementals/client%20drop-in/latest.txt")
latest_hotfix=$(curl -s "https://openwf.io/supplementals/client%20drop-in/latest_hotfix.txt")
latest_sha256=$(curl -s "https://openwf.io/supplementals/client%20drop-in/sha256.txt")
latest_hotfix_sha256=$(curl -s "https://openwf.io/supplementals/client%20drop-in/sha256_hotfix.txt")

sha256=""
hotfix_sha256=""
if [[ -f "../dwmapi.dll" ]]; then
	sha256=$(sha256sum "../dwmapi.dll" | awk '{print $1}')
fi
if [[ -f "Hotfix.owf" ]]; then
	hotfix_sha256=$(sha256sum "Hotfix.owf" | awk '{print $1}')
fi

if [[ "$sha256" != "$latest_sha256" || "$hotfix_sha256" != "$latest_hotfix_sha256" ]]; then
	if [[ -n "$latest_hotfix" ]]; then
		echo "Downloading OpenWF Bootstrapper v$latest_version $latest_hotfix..."
	else
		echo "Downloading OpenWF Bootstrapper v$latest_version..."
	fi

	if [[ "$sha256" != "$latest_sha256" ]]; then
		curl -L "https://openwf.io/supplementals/client%20drop-in/$latest_version/dwmapi.dll" -o "../dwmapi.dll"
	fi

	if [[ "$hotfix_sha256" != "$latest_hotfix_sha256" ]]; then
		if [[ -n "$latest_hotfix" ]]; then
			curl -L "https://openwf.io/supplementals/client%20drop-in/$latest_version/${latest_hotfix// /%20}/Hotfix.owf" -o "Hotfix.owf"
		else
			rm -f "Hotfix.owf"
		fi
	fi
else
	echo "Your OpenWF Bootstrapper is up-to-date."
fi
