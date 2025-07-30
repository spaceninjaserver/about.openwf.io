#!/usr/bin/env bash

if [[ -f "Warframe.x64.exe" ]]; then
	if [[ ! -f "OpenWF/Download Latest DLL.sh" ]]; then
		mkdir -p OpenWF
		curl -L "https://openwf.io/supplementals/Download%20Latest%20DLL.sh" -o "OpenWF/Download Latest DLL.sh"
	fi
	cd OpenWF
	chmod +x "Download Latest DLL.sh"
	./Download\ Latest\ DLL.sh
else
	echo "Please put this script into your Warframe installation folder (the one where Warframe.x64.exe is in) before running it."
fi
