<?php
$docRoot = "./";
if (isset($_GET["docRoot"])) {
    $docRoot = $_GET["docRoot"];
}
$appTitle = "";
if (isset($_GET["appTitle"])) {
    $appTitle = $_GET["appTitle"];
}
$REQUEST_PROTOCOL = "http";
if (isset($_GET["protocol"])) {
    $REQUEST_PROTOCOL = $_GET["protocol"];
}
echo "<!-- docRoot:" . $docRoot . ",appTitle:" . $appTitle . ",protocol:". $REQUEST_PROTOCOL . "-->";
?>
<html>
<head>
<link rel="shortcut icon" sizes="256x256" href="<?php echo $docRoot ?>assets/icon-256.png">
<link rel="shortcut icon" sizes="192x192" href="<?php echo $docRoot ?>assets/icon-192.png">
<link rel="shortcut icon" sizes="128x128" href="<?php echo $docRoot ?>assets/icon-128.png">
<link rel="shortcut icon" href="<?php echo $docRoot ?>favicon.ico">
<link rel="icon" type="image/png" href="<?php echo $docRoot ?>assets/icon.png" >
<link rel="apple-touch-icon" href="<?php echo $docRoot ?>assets/icon.png"/>
<link rel="apple-touch-startup-image" href="<?php echo $docRoot ?>assets/icon-256.png">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="white" />
<link rel="stylesheet" href="<?php echo $REQUEST_PROTOCOL ?>://www.webosarchive.org/app-template/style.css">
<link rel="stylesheet" href="<?php echo $docRoot ?>style.css">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1" />
<title><?php echo $appTitle;?></title>
</head>
<body>
<?php echo file_get_contents("https://www.webosarchive.org/menu.php?content=" . $appTitle); ?>
<div class="content">
<p align='middle' style='margin-top:50px;'><a href="./"><img src='<?php echo $docRoot ?>assets/icon-128.png' style="width:128px; height: 128px;" border="0"></a><br>
    <strong><?php echo $appTitle;?></strong><br/>
    <small>A project of <a href="<?php echo $REQUEST_PROTOCOL ?>://www.webosarchive.org">webOS Archive</a></small><br>
    <br/>
</p>

