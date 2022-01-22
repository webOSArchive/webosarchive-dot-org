<?php
//Figure out what protocol the client wanted
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    header("https://appcatalog.webosarchive.com/");
else
    header("http://appcatalog.webosarchive.com/");
?>