<html>
    <head>
        <title>webOS Archive has Moved!</title>
        <style>
            body, h1 { font-family: Arial, Helvetica, sans-serif; font-weight: normal; }
            a { color: darkorange; text-decoration: none; }
            a:hover { text-decoration: underline;}
        </style>
        <?php
        $q = "";
        if (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] != "" && $_SERVER['QUERY_STRING'] != "/") {
            $q = $_SERVER["QUERY_STRING"];
        }
        ?>
        <script>
        var q="<?php echo $q ?>";
        q = q.replace(".", "");
        setTimeout("document.location='https://www.webosarchive.org' + q", 3500)
        </script>
    </head>
    <body>
        <table width="100%" height="100%" border="0">
            <tr><td width="100%" height="100%" align="center" valign="middle">
                <!-- Truck icon created by Freepik - Flaticon.com -->
                <img src="moving-truck.png" alt="This domain expires in 2024 and will not be renewed. Update your bookmarks to the new .org domain" title="This domain expires in 2024 and will not be renewed. Update your bookmarks to the new .org domain">
                <h1>webOSArchive.com is now <a href="https://www.webosarchive.org">webOSArchive<b>.org</b></a></h1>
                Please update your bookmarks!
            </td></tr>
        </table>
    </body>
</html>