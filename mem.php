<pre><?php
$mem     = shell_exec('free -h');
$mem     = str_replace("Gi"," G",$mem);
$mem     = str_replace("Mi"," M",$mem);
$mem     = str_replace("total","Total",$mem);
$mem     = str_replace("used","Used",$mem);
$mem     = str_replace("free","Free",$mem);
$mem     = str_replace("shared","Shared",$mem);
echo $mem;
?>
</pre>