<?php
    setcookie ("uniqueID", $array['uniqueID'], time() - 360000, '/');
    header('Location: /index.php');