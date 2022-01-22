<?php
//Figure out what protocol the client wanted
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    header("https://maps.webosarchive.com/");
else
    header("http://maps.webosarchive.com/");
?>