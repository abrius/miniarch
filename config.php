<?php
$krn     = shell_exec('uname -r');
$uptime  = shell_exec('uptime -p');
$hdd     = shell_exec('df / -h');
$lsblk   = shell_exec('lsblk');
$mem     = shell_exec('free -h');
$cpu     = shell_exec("top -n 1 -b | awk '/^%Cpu/{print $2}'");
$corenum = shell_exec("nproc");
$wifi    = shell_exec('nmcli dev wifi');
?>
