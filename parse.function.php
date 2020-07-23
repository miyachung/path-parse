<?php
 /*
@ URL/Path Parser function
@ by miyachung
@ usage -> echo getURL("http://www.example.com/path1/index.php");
@ output -> http://www.example.com/path1
*/
 function getURL($site)
{$parsed = parse_url($site);$path  = $parsed['path'];$path  = explode("/",$path);$path    = array_filter($path);$path    = array_values($path);$count  = count($path)-1;
unset($path[$count]);
 $url  = "http://".$parsed['host'];
for($i=0;$i<count($path);$i++)
{$url .= "/$path[$i]";
}
return $url;
}
