<?php
    include_once('inc/browsers.inc.php');
    include_once('inc/browserHistory.inc.php');
    $browserHistory = getBrowserHistory($_GET['browserId']);
?>

<table class="table table-bordered table-striped table-condensed table-hover">
    <thead>
        <tr>
            <th class="text-center col-lg-2">Date</th>
            <th class="text-center col-lg-1">Type</th>
            <th class="text-center col-lg-1">Module</th>
            <th class="text-center col-lg-8">Event</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($browserHistory as $row) {                                            
        ?>
                <tr>
                    <?php
                        echo '<td class="text-center">' . htmlspecialchars($row['date']) . '</td>';
                        echo '<td class="text-center">' . htmlspecialchars($row['type']) . '</td>';
                        echo '<td class="text-center">' . htmlspecialchars($row['module']) . '</td>';
                        echo '<td><pre class="is-breakable">' . htmlspecialchars(decodeJsonOrRaw($row['event'])) . '</pre></td>';                        
                    ?>
                </tr>
        <?php
            }
        ?>
    </tbody>
</table>