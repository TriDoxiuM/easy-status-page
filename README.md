easy-status-page
================

Status page made easy


Easy Status Page was made for fun, there are much better alternatives like Micheal Ojeda's ServerStatus(http://www.mojeda.com/)




Instruction
=================
Upload "uptime.php" onto server
Edit "index.html"


Example Template:
====================
<pre><code>
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
<pre><code>
