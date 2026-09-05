<?php
if(!preg_match("@^https?://@", $_SERVER['REQUEST_URI'])) {
        header('Location: https://discord.gg/5VesdQpKFk');
} else {
        header('Location: https://appcatalog.webosarchive.org/app/webOSSimpleChat');
}
?>