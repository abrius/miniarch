<?php
$cpu      = shell_exec("top -n 1 -b | awk '/^%Cpu/{print $2}'");
$corenum  = shell_exec("nproc");
$cputemp0 = shell_exec("sensors | grep -A 0 'Core 0' | cut -c1-25");
$cputemp1 = shell_exec("sensors | grep -A 0 'Core 1' | cut -c1-25");
echo "CPU cores: $corenum<br>";
echo "Use: $cpu %<br>";
echo "$cputemp0<br>";
echo "$cputemp1";
?>
