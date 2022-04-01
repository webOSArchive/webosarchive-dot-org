<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>webOS Archive</title>

<link rel="stylesheet" href="wosa.css">
<link rel="shortcut icon" href="favicon.ico">
</head>
<body style="margin:0px;" height="100%">

<?php include('menu.php')?>

<div id="container">

<div class="wosaTitle">
  <img src="museum.png" alt="webOS Archive" title="webOS Archive">
</div>
<?php
//Figure out what protocol the client wanted
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
  $protocol = "https";
else
  $protocol = "http";
?>
<table width="100%" height="90%" class="table" border="0"><tr><td width="100%" align="center">
<div class="row" >
  <div class="column" style="background-color:#aaa;">
   <div class="content" style="align-content: center;  text-align: center;">
   <h3>webOS SDK/PDK</h3><br>
   <a href="<?php echo $protocol; ?>://sdk.webosarchive.com"><img src="sdk.png"/></a>
   <p style="margin:30px;">The restored SDK includes documentation, tools and emulators for developing in the Palm/HP webOS Javascript frameworks and platform services.</p>
   </div>
  </div>
  <div class="column" style="background-color:#bbb;">
   <div class="content" style="align-content: center;  text-align: center;">
   <h3>App Catalog Museum</h3><br>
   <a href="<?php echo $protocol; ?>://appcatalog.webosarchive.com"><img src="catalog.png" style="margin-top:-10px"></a>
   <p style="margin:30px;">The partially restored App Catalog contains metadata, images and packages for apps released for the platform as part of a historical digital archive.</p>
   </div>
  </div>
  <div class="column" style="background-color:#ccc;">
   <div class="content" style="align-content: center;  text-align: center;">
   <h3>Help &amp; Documentation</h3><br>
   <a href="<?php echo $protocol; ?>://www.webosarchive.com/docs/"><img src="help.png" style="margin-top:-10px"/></a>
   <p style="margin:30px;">Instructions on activating a device, now that its servers are offline, as well as an ongoing project to <a href="http://help.webosarchive.com/HowToUse.php">restore on-device Help</a> and User documentation.</p>
   </div>
  </div>
</div>
</td></tr>
</table>
&nbsp;<br>
&nbsp;<br>
<footer>
webOS Archive is an archival project that serves the public interest in preservation, access and research, and is protected by Fair Use provisions of US copyright law.
</footer>
</div>
</body>
</html>
