<?php
//Figure out what protocol the client wanted
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    header("Location: https://appcatalog.webosarchive.org/");
else
    header("Location: http://appcatalog.webosarchive.org/");
?>