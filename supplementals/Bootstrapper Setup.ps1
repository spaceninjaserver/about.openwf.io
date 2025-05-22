if (Test-Path "Warframe.x64.exe") {
    if (!(Test-Path "OpenWF/Download Latest DLL.ps1")) {
        [System.IO.Directory]::CreateDirectory("OpenWF") | Out-Null
        Invoke-WebRequest -Uri "https://openwf.io/supplementals/Download%20Latest%20DLL.ps1" -OutFile "OpenWF/Download Latest DLL.ps1"
    }
    Set-Location -Path OpenWF
    & "$PSScriptRoot\OpenWF\Download Latest DLL.ps1"
}
else {
    Write-Host "Please put this script into your Warframe installation folder (the one where Warframe.x64.exe is in) before running it."
    Start-Sleep -Seconds 864000
}
