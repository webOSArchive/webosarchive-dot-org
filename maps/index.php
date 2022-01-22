<?php
//Figure out what protocol the client wanted
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    header("Location: https://maps.webosarchive.com/");
else
    header("Location: http://maps.webosarchive.com/");
?>