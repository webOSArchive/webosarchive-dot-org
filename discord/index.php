<?php
if(!preg_match("@^https?://@", $_SERVER['REQUEST_URI'])) {
        header('Location: https://discord.gg/tY2cAhbXXD');
} else {
        header('Location: https://appcatalog.webosarchive.org/app/webOSSimpleChat');
}
?>