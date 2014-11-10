<!DOCTYPE HTML>
<head>
<title>Status Page</title>
</head>
<body>
<?php
function checkOnline($domain) {
   $curlInit = curl_init($domain);
   curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
   curl_setopt($curlInit,CURLOPT_HEADER,true);
   curl_setopt($curlInit,CURLOPT_NOBODY,true);
   curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

   //get answer
   $response = curl_exec($curlInit);

   curl_close($curlInit);
   if ($response) return true;
   return false;
}

if (checkOnline('yourserverip'))
{
    echo '<span style="color: green;" /><center>Your Server Name: Online</center> </span>';
    echo '<center>Info: </center>';
    $content = file_get_contents('yourserverip/uptime.php');
    print "<CENTER>$content</CENTER>"; 
}
else
{
    echo '<span style="color: red;" /><center>Your Server Name: Offline</center> </span>';
}
?>