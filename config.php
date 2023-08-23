<?php
$krn      = shell_exec('uname -r');   // Linux kernel info
$uptime   = shell_exec('uptime -p');  // System uptime info
$hdd      = shell_exec('df / -h');    // Partition info
$cputemp0 = shell_exec("sensors | grep -A 0 'Core 0' | cut -c1-25"); // cpu core 0 temperature
$cputemp1 = shell_exec("sensors | grep -A 0 'Core 1' | cut -c1-25"); // cpu core 1 temperature

$lsblk    = shell_exec('lsblk');      // Disks and partitions info
$mem      = shell_exec('free -h');    // Memory RAM info
$cpu      = shell_exec("top -n 1 -b | awk '/^%Cpu/{print $2}'"); // CPU info
$corenum  = shell_exec("nproc");      // Count cores
$wifi     = shell_exec('nmcli dev wifi');  // Wifi info, available networks
?>
