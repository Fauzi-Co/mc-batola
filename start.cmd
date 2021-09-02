@ECHO OFF
Set WshShell = Nothing
TITLE McBatola Server
ECHO Please wait... Gathering system information.

ECHO =========================

ECHO OPERATING SYSTEM

systeminfo | findstr /c:"OS Name"

systeminfo | findstr /c:"OS Version"

ECHO =========================

ECHO BIOS

systeminfo | findstr /c:"System Type"

ECHO =========================

ECHO MEMORY

systeminfo | findstr /c:"Total Physical Memory"

ECHO =========================

ECHO CPU

wmic cpu get name

ECHO =========================

ECHO NETWORK ADDRESS

ipconfig | findstr IPv4

ipconfig | findstr IPv6

ECHO =========================

ECHO Path McBatola

set path_dir=%cd%
echo McBatola = %path_dir%

ECHO =========================

set path_php=\php\php.exe
php spark serve --host mc-batola.act:8081 --php %path_dir%%path_php%
