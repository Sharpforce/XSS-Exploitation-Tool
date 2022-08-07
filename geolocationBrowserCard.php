<?php
    include_once('inc/browserGeo.inc.php');
    
    $geoloc = getGeoloc($_GET['browserId'], $hookedBrowserDetails[0]['publicIP']);
?>

<?php
    foreach ($geoloc as $row) {   
        echo '<ul class="list-group">';
            echo '<li class="list-group-item">Country : ' . htmlspecialchars($row['country']) . '</li>';
            echo '<li class="list-group-item">Region Name : ' . htmlspecialchars($row['regionName']) . '</li>';
            echo '<li class="list-group-item">City : ' . htmlspecialchars($row['city']) . '</li>';
            echo '<li class="list-group-item">District : ' . htmlspecialchars($row['district']) . '</li>';
            echo '<li class="list-group-item">Zip : ' . htmlspecialchars($row['zip']) . '</li>';
            echo '<li class="list-group-item">Lat : <span id="lat">' . htmlspecialchars($row['lat']) . '</span></li>';
            echo '<li class="list-group-item">Long : <span id="lon">' . htmlspecialchars($row['lon']) . '</span></li>';
            echo '<li class="list-group-item">ISP : ' . htmlspecialchars($row['isp']) . '</li>';
        echo '</ul>';
    }                                        
?>