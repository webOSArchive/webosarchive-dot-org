<?php
//Figure out what protocol the client wanted
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    header("https://podcasts.webosarchive.com/");
else
    header("http://podcasts.webosarchive.com/");
?>