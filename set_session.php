<?php

session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["name"] = "Kirill";
echo "Session variables are set.";
?>
</body>
</html>
