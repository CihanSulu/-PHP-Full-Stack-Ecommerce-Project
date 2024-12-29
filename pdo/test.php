<?php 

function getStringBetween($str,$from,$to){
    @$sub = substr($str, strpos($str,$from)+strlen($from),strlen($str));
    return substr($sub,0,strpos($sub,$to));
}

$str = "cihan";
$from="";
$to = "n";

echo getStringBetween($str,$from,$to);

?>