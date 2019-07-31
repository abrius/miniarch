<?php
$cpu     = shell_exec("top -n 1 -b | awk '/^%Cpu/{print $2}'");
$corenum = shell_exec("nproc");
echo "CPU cores: $corenum<br>";
echo "Use: $cpu %";
?>
