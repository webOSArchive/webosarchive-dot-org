<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lunacy · webOS Archive</title>
<meta name="description" content="Lunacy runs legacy webOS apps on modern Android phones and tablets, inside a shell that looks and feels like webOS. A project of the webOS Archive.">
<link rel="canonical" href="https://www.webosarchive.org/lunacy/">
<link rel="icon" type="image/png" href="icon.png">
<style>
/* Styled after the pivotCE archive (www.webosarchive.org/pivot/), itself modelled on the 2011 HP webOS Developer Blog. */
* { -webkit-box-sizing: border-box; box-sizing: border-box; }
html { height: 100%; }
body {
  margin: 0; padding: 0;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13.5px; line-height: 1.62; color: #444;
  background-color: #b4b4b0;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#8d8d89), to(#d2d2cd));
  background-image: -webkit-linear-gradient(top, #8d8d89, #d2d2cd);
  background-image: linear-gradient(to bottom, #8d8d89, #d2d2cd);
  background-repeat: no-repeat; background-attachment: fixed;
}
a, a:visited { color: #2e9cba; text-decoration: none; }
a:hover { color: #1d7d97; text-decoration: underline; }
img { border: 0; }
.shell { max-width: 1000px; margin: 0 auto; padding: 0 14px; }
.row:after { content: ""; display: table; clear: both; }
.col-main { float: left; width: 75.5%; }
.col-side { float: right; width: 22.5%; }
.card {
  background-color: #fff; padding: 26px 30px 34px 30px; margin-bottom: 26px;
  -webkit-border-radius: 9px; border-radius: 9px;
  -webkit-box-shadow: 0 1px 4px rgba(0,0,0,.28); box-shadow: 0 1px 4px rgba(0,0,0,.28);
}
.col-side .card { padding: 20px 20px 24px 20px; }
.masthead { padding: 16px 0 24px 0; }
.crumbs { margin: 0 0 14px 0; font-size: 12px; color: #333; }
.crumbs a, .crumbs a:visited { color: #333; }
.crumbs a:hover { color: #000; }
.crumbs .sep { color: #d6d6d2; padding: 0 7px; }
.masthead h1 { margin: 0; font-size: 34px; font-weight: 300; line-height: 1.1; color: #fff; text-shadow: 0 1px 1px rgba(0,0,0,.22); }
.masthead h1 img { width: 46px; height: 46px; vertical-align: middle; margin-right: 12px; }
.masthead p.tagline { margin: 12px 0 0 0; color: #fff; font-size: 21px; font-weight: 300; line-height: 1.2; text-shadow: 0 1px 1px rgba(0,0,0,.22); }
.post-title { font-size: 30px; font-weight: 300; line-height: 1.15; margin: 0 0 8px 0; color: #f2761b; }
.post-meta { font-size: 11px; font-weight: bold; text-transform: uppercase; letter-spacing: .04em; color: #6b6b6b; margin: 0 0 20px 0; padding-bottom: 12px; border-bottom: 1px solid #e3e3e3; }
.post-body p { margin: 0 0 16px 0; }
.post-body h2 { font-size: 22px; font-weight: 300; color: #555; margin: 1.7em 0 .5em 0; line-height: 1.25; }
.post-body h3 { font-size: 15px; font-weight: bold; color: #555; margin: 1.4em 0 .4em 0; }
.post-body ul, .post-body ol { margin: 0 0 16px 0; padding-left: 22px; }
.post-body li { margin-bottom: 6px; }
.post-body table { border-collapse: collapse; width: 100%; margin: 16px 0; }
.post-body th, .post-body td { border: 1px solid #e3e3e3; padding: 6px 9px; text-align: left; vertical-align: top; }
.post-body th { background-color: #f7f7f5; }
.post-body code { background-color: #f7f7f5; padding: 1px 4px; font-size: 12px; color: #333; }
.flow { margin: 16px 0; padding: 12px 18px; background-color: #f7f7f5; border: 1px solid #e3e3e3; }
.flow ol { margin: 0; }
.callout { margin: 18px 0; padding: 10px 18px; border-left: 3px solid #f2761b; background-color: #f7f7f5; color: #5c5c5c; }
.side-block { margin-bottom: 22px; }
.side-block:last-child { margin-bottom: 0; }
.side-block h2 { margin: 0 0 8px 0; font-size: 20px; font-weight: 300; color: #555; line-height: 1.2; }
.side-block ul { list-style: none; margin: 0; padding: 0; }
.side-block li { font-size: 12px; line-height: 1.45; margin: 0 0 5px 0; color: #888; }
footer.site { border-top: 1px solid rgba(255,255,255,.35); text-align: center; color: #f2f2f0; font-size: 11px; padding: 16px 10px 26px 10px; margin-top: 6px; }
footer.site p { margin: 0; }
footer.site a, footer.site a:visited { color: #fff; text-decoration: underline; }
@media screen and (max-width: 760px) {
  .col-main, .col-side { float: none; width: auto; }
  .card { padding: 20px 18px 24px 18px; }
  .post-title { font-size: 24px; }
  .masthead h1 { font-size: 26px; }
  .masthead p.tagline { font-size: 17px; }
}
</style>
</head>
<body>
<?php include("../menu.php") ?>

<div class="masthead">
  <div class="shell">
    <div class="crumbs"><a href="https://www.webosarchive.org">webOS Archive</a><span class="sep">›</span>Lunacy</div>
    <h1><img src="icon.png" alt="" width="42" height="46" style="width:42px">Lunacy</h1>
    <p class="tagline">webOS apps on the Android you already have</p>
  </div>
</div>

<div class="shell row">
  <div class="col-main">
    <div class="card">
      <article>
        <p class="post-meta">A project of the webOS Archive · Last updated November 9, 2026</p>

        <div class="post-body">

          <h2>What is Lunacy?</h2>
          <p><img src="icon.png" alt="Lunacy's icon: the Android robot with a door open on the night sky and the moon" width="117" height="128" style="float:right; margin: 0 0 10px 16px"><strong>Lunacy</strong> runs legacy webOS apps on modern Android phones and tablets, inside a shell that looks and feels like webOS. It is developed by the <a href="https://www.webosarchive.org">webOS Archive</a>, a volunteer, non-profit preservation project.</p>
          <p>webOS apps were HTML and JavaScript. They loaded their framework (Enyo or Mojo) from the OS, ran as cards in the Luna system shell, and talked to the system over the Luna service bus. The devices are more than a decade old, but the apps are still good. Most of them never needed Palm&rsquo;s hardware. They needed Palm&rsquo;s <em>contract</em>. Lunacy provides that contract on Android.</p>

          <h2>How it works</h2>
          <p>Lunacy re-implements the contract, not the OS:</p>
          <ul>
            <li><strong>A simulated Luna shell.</strong> A native Android UI that recreates the webOS experience: card view, gestures, launcher, notification banners and dashboard. None of Palm&rsquo;s code runs. It looks and behaves like webOS, and it has to feel right.</li>
            <li><strong>Modernized frameworks.</strong> Lunacy supplies the TouchPad&rsquo;s own <a href="https://github.com/enyojs/enyo-1.0">Enyo 1.0</a>, fixed to run on a modern Chromium renderer. Fixes in the library cover every app built on it.</li>
            <li><strong>Apps as cards.</strong> Each app runs unmodified in its own WebView card.</li>
            <li><strong>A simulated service bus.</strong> <code>palm://</code> calls are routed either to Lunacy itself (app manager, db8, shell services) or to the equivalent Android feature (connectivity, power, locale, notifications, intents).</li>
          </ul>
          <p>Enyo was designed to scale from phone to tablet, so most apps run at the device&rsquo;s real size, on both phones and tablets.</p>

          <div class="callout">Fidelity is the project&rsquo;s first rule, ahead of speed or simplicity. The look and feel of the TouchPad (or Pre3) is measured on an original device: how a card opens, how the launcher moves, where every pixel of the shell sits.</div>

          <h2>What it is not</h2>
          <ul>
            <li><strong>Not a TouchPad emulator.</strong> There is no system image and no virtual device: web apps run in Android&rsquo;s own WebView.</li>
            <li><strong>Not a per-app porting kit.</strong> No app is patched. Every fix goes into the frameworks or a compatibility layer that treats all apps alike.</li>
            <li><strong>Not LuneOS.</strong> <a href="https://github.com/webOS-ports">LuneOS</a> is a full OS. Lunacy is an app on the Android you already have.</li>
          </ul>

          <h2>What runs</h2>
          <table>
            <tr><th>App type</th><th>Era</th></tr>
            <tr><td>Enyo 1 apps</td><td>webOS 3.x, the TouchPad era. Enyo 2 apps bundle their own framework and feel at home too.</td></tr>
            <tr><td>Mojo apps</td><td>webOS 1.x&ndash;2.x, the Pre and Pixi era.</td></tr>
            <tr><td>JS (Node) services</td><td>The background services that ship with apps.</td></tr>
            <tr><td>PDK native apps</td><td>Native games and apps, run as shipped on a glibc runtime.</td></tr>
            <tr><td>Hybrid apps</td><td>Web apps that interact with a PDK plug-in.</td></tr>
          </table>
          <p>Apps come from the webOS Archive <a href="https://appcatalog.webosarchive.org">Museum</a>, through the TouchPad&rsquo;s own App Catalog, which Lunacy bundles and runs like any other card.</p>

          <h2>Getting it</h2>
          <p>Lunacy is sideloaded: there is no store listing for now. It supports Android 5.0.1 through Android 17. Tablets are fully supported; phones are partially supported through light adaptation or zooming.</p>
          <div class="flow">
            <ol>
              <li><strong>Allow unknown sources.</strong> Settings &rarr; Security &rarr; Unknown sources. (On Android 8 and later this is asked for per app, when you open the APK.)</li>
              <li><strong>Install the APK for your device</strong> from the <a href="https://github.com/webOSArchive/Lunacy/releases">releases page</a>: <code>AndroidLuna-arm64.apk</code> for a 64-bit device, <code>AndroidLuna-arm32.apk</code> for a 32-bit one. If unsure, try the 64-bit one first.</li>
              <li><strong>Open Lunacy</strong> from the Android launcher. The App Catalog is on the launcher&rsquo;s Downloads tab.</li>
              <li><strong>Optional:</strong> install <code>LunaKeyboard.apk</code> for a TouchPad-style keyboard, and choose <em>Lunacy Exhibition</em> as your Android screen saver.</li>
            </ol>
          </div>

          <h2>Living with Android</h2>
          <ul>
            <li><strong>Lunacy as launcher.</strong> Lunacy works best as the default Android launcher, and can launch both webOS and Android apps. Common Android apps get webOS icons, and you choose how much Android appears in <strong>Software Manager</strong>.</li>
            <li><strong>Or alongside another launcher.</strong> webOS apps can be pinned to any Android launcher, and webOS notification sounds and wallpapers are added to Android.</li>
            <li><strong>Your files.</strong> Android&rsquo;s Downloads, Pictures, Camera, Music, Movies and Documents appear as webOS&rsquo;s <code>/media/internal</code>, so Photos &amp; Videos and Music see what you already have.</li>
            <li><strong>Media controls.</strong> webOS media apps show up in Android media controls, and Android media apps get a webOS dashboard.</li>
            <li><strong>Calendar and contacts.</strong> Android data can be mirrored into the webOS Calendar and Contacts apps, with your permission.</li>
            <li><strong>Exhibition.</strong> webOS&rsquo;s Exhibition mode becomes your Android screen saver.</li>
            <li><strong>Notifications.</strong> webOS notifications can pulse your device&rsquo;s notification light.</li>
          </ul>

          <h3>Tuning the look</h3>
          <p>Android devices come in every shape, so Lunacy maps yours to a webOS form factor, simulating either a TouchPad or a Pre3. <strong>Screen &amp; Lock</strong> sets the system-wide choice, and <strong>Device Info</strong> shows what was detected and lets you override it for each app, including Phone Zoom for tablet apps that don&rsquo;t adapt to a small screen.</p>

          <h2>Who we are</h2>
          <p>Lunacy is developed by the <a href="https://www.webosarchive.org">webOS Archive</a>, a community project dedicated to keeping webOS useful. Lunacy&rsquo;s own code is open source under the Apache License 2.0, and is on <a href="https://github.com/webOSArchive/Lunacy">GitHub</a>; the webOS frameworks, apps and fonts it carries stay under their own terms. Questions or problems: <a href="https://github.com/webOSArchive/Lunacy/issues">GitHub Issues</a>.</p>
        </div>
      </article>
    </div>
  </div>

  <div class="col-side">
    <div class="card">
      <div class="side-block">
        <h2>Download</h2>
        <ul>
          <li><a href="https://github.com/webOSArchive/Lunacy/releases">Latest release</a></li>
          <li>Android 5.0.1 to 17</li>
          <li>32-bit and 64-bit ARM</li>
        </ul>
      </div>
      <div class="side-block">
        <h2>Companions</h2>
        <ul>
          <li><a href="https://github.com/webOSArchive/Lunacy/releases">LunaKeyboard</a>, the TouchPad keyboard</li>
          <li><a href="https://github.com/alan-morford/prekeyboard">PreKeyboard</a>, the Pre keyboard</li>
          <li><a href="https://www.webosarchive.org/mail/">webOS Email</a></li>
          <li><a href="https://appcatalog.webosarchive.org">App Museum</a></li>
        </ul>
      </div>
      <div class="side-block">
        <h2>Links</h2>
        <ul>
          <li><a href="https://github.com/webOSArchive/Lunacy">Source code</a></li>
          <li><a href="https://www.webosarchive.org/pivot/2026/09/20/lunacy-a-new-child-of-webos/">Announcement</a></li>
          <li><a href="https://www.webosarchive.org/pivot/">Latest News</a></li>
          <li><a href="https://www.webosarchive.org">webOS Archive</a></li>
          <li><a href="mailto:webosarchive@gmail.com">Contact us</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<footer class="site">
  <p>
    Lunacy, a project of the <a href="https://www.webosarchive.org">webOS Archive</a>. ·
    <a href="https://www.webosarchive.org/privacy.html">Privacy Policy</a> ·
    <a href="https://www.webosarchive.org/tos.html">Terms of Service</a>
  </p>
</footer>

</body>
</html>
