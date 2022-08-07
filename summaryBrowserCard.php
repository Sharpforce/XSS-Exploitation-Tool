<?php
    include_once('inc/browsers.inc.php');
    include_once('inc/browserSummary.inc.php');
    include_once('lib/parseUserAgentString.php');

    $hookedBrowserDetails = getHookedBrowserDetails($_GET['browserId']);
?>

<?php
    foreach ($hookedBrowserDetails as $row) {                                            
        $parser = new parseUserAgentStringClass(); // Parse User Agent https://www.toms-world.org/blog/parseuseragentstring/
        $parser->includeAndroidName = true;
        $parser->includeWindowsName = true;
        $parser->includeMacOSName = true;
        $parser->parseUserAgentString($row['userAgent']);
        $browserName = "N/A";
        $osName = "N/A";
        $browserVersion = "N/A";
        $browserType = "N/A";

        if ($parser->knownbrowser) { 
            $browserName = $parser->browsername;
            $osName = $parser->osname;
            $browserVersion = $parser->browserversion;
            $browserType = $parser->type;
        }
?>
        <tr>
            <?php
                // Process last activity as heartbeat
                if(isAlive($row['lastHeatbeat'])) {
                    echo '<td class="text-center"><img src="img/green_button.png" height="16" width="16"/></td>';
                }
                else {
                    echo '<td class="text-center"><img src="img/red_button.png" height="16" width="16"/></td>';
                }                                                   
                echo '<td><a href="browserDetails.php?browserId=' . htmlspecialchars($row['browserId']) . '" id="browserId">' . htmlspecialchars($row['browserId']) . '</a></td>';
                echo '<td>' . htmlspecialchars($osName) . '</td>';
                echo '<td>' . htmlspecialchars($browserName) . '</td>';
                echo '<td>' . htmlspecialchars($browserVersion) . '</td>';
                echo '<td>' . htmlspecialchars($browserType) . '</td>';
                echo '<td>' . htmlspecialchars($row['publicIP']) . '</td>';
                echo '<td>' . htmlspecialchars($row['hostname']) . '</td>';
                echo '<td class="text-center"><a href="index.php?delete=' . htmlspecialchars($row['browserId']) . '"><img src="img/delete.png" height="16" width="16" title="Delete"/><a></td>';
            ?>
        </tr>
<?php
    }
?>