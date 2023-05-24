<!DOCTYPE html>
<html lang="en-US">
<head>
<title>System</title>
<style>
body      { margin:    auto; width:   60%;}
.p1       { display: inline; padding: 2px; margin:      0;}
pre       { display: inline; margin:    0; font-family: monospace; font-size: 13px;}
h1        { display: inline; margin:    0; font-family: Sans;      font-size: 20px; color: #FFDE00;}
a:link    { color:     #999; text-decoration:none; font-weight: bold; font-family: Sans; font-size: 14px;}
a:visited { color:     #999; text-decoration:none; font-weight: bold; font-family: Sans; font-size: 14px;}
a:active  { color:     #fff; text-decoration:none; font-weight: bold; font-family: Sans; font-size: 14px;}
a:hover   { color:     #fff; text-decoration:none; font-weight: bold; font-family: Sans; font-size: 14px;}

.titlediv { 
background-color: #333;
color:            #fff;
padding:           2px;
margin-bottom:       0;
margin-top:        5px;
border-style:    solid;
border-width:      1px;
border-color:     #333;
width:            100%;
font-family:      Sans;
font-size:        13px;
}

.topdiv { 
background-color: #33AADD;
color:            #ffffff;
padding:              2px;
margin-top:             0;
border-style:       solid;
border-width:         1px;
border-color:     #0088BB;
width:               100%;
font-family:    Monospace;
font-size:           13px;
}
.bdydiv { 
background-color: #ECF2F5;
color:               #000;
padding:              2px;
margin-top:           2px;
border-style:       solid;
border-width:         1px;
border-color:     #BBCCDD;
width:               100%;
font-family:    Monospace;
font-size:           13px;
overflow:            auto;
}
.newsdiv { 
background-color: #ECF2F5;
color:               #000;
padding:              2px;
margin-top:           2px;
border-style:       solid;
border-width:         1px;
border-color:     #BBCCDD;
width:               100%;
font-family:         Sans;
font-size:           15px;
overflow:            auto;
}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#memory").load('mem.php')
}, 500);
});
</script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#cpu").load('cpu.php')
}, 1000);
});
</script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#wifi").load('wifi.php')
}, 1000);
});
</script>
</head>
<body bgcolor="#F6F9FC">
<?php
$krn     = shell_exec('uname -r');
$uptime  = shell_exec('uptime -p');
$hdd     = shell_exec('df / -h');
$hdd     = str_replace("Filesystem","          ",$hdd);
$mem     = shell_exec('free -h');
$mem     = str_replace("Gi"," G",$mem);
$mem     = str_replace("Mi"," M",$mem);
$mem     = str_replace("total","Total",$mem);
$mem     = str_replace("used","Used",$mem);
$mem     = str_replace("free","Free",$mem);
$mem     = str_replace("shared","Shared",$mem);
$lsblk   = shell_exec('lsblk /dev/sda');
$lsblk   = str_replace("NAME","    ",$lsblk);
$wifi    = shell_exec('nmcli dev wifi');

?>
<div class="titlediv"><h1><img src="arch.png" width="200"></h1><br><a href="index.php?section=news">News</a> &nbsp;<a href="index.php?section=server">Sys Info</a></div>
<div class="topdiv"></div>
<?php
$section = $_SERVER["QUERY_STRING"];
if ($section == "section=server") { ?>
<div class="bdydiv"><?php echo "<pre>$uptime</pre>"; ?></div>
<div class="bdydiv"><?php echo "<pre>$krn</pre>"; ?></div>
<div class="bdydiv"><?php echo "<pre>$lsblk</pre>";?></div>
<div class="bdydiv"><?php echo "<pre>$hdd</pre>";?></div>
<div class="bdydiv" id="memory"></div>
<div class="bdydiv" id="cpu"></div>
<div class="bdydiv" id="wifi"></div>
<?php } elseif ($section == "" or $section == "section=news"){
echo "
<div class='bdydiv'>
News<br>
---------------------------------------------------------------------<br />
2023 05 24 + add wifi available networks with ajax.<br />
2019 07 31 + add cpu cores info and cpu usage in % with ajax.<br />
2019 07 27 + add ajax script to get real time info about memory usage.<br />
2019 07 25 ! project launched.<br>

</div>";
			} 

	else {echo "<div class='newsdiv'><center>Section not exist!</center></div>";}
?>
</body>
</html>
