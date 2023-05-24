<?php
$krn     = shell_exec('uname -r');   // Linux kernel info
$uptime  = shell_exec('uptime -p');  // System uptime info
$hdd     = shell_exec('df / -h');    // Partition info
$lsblk   = shell_exec('lsblk');      // Disks and partitions info
$mem     = shell_exec('free -h');    // Memory RAM info
$cpu     = shell_exec("top -n 1 -b | awk '/^%Cpu/{print $2}'"); // CPU info
$corenum = shell_exec("nproc");      // Count cores
$wifi    = shell_exec('nmcli dev wifi');  // Wifi info, available networks
?>
