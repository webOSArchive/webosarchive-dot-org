<?php
//Figure out what protocol the client wanted
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    header("Location: http://www.webosarchive.org/docs/proxysetup");
else
    header("Location: http://www.webosarchive.org/docs/proxysetup");
?>