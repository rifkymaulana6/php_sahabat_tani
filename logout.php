<?php

session_start();
session_destroy();
ob_start();
echo '
    <script>
    window.location.href="index.php";
    </script>
';
