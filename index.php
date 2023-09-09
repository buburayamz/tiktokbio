<?php
$xRequestedWith = isset($_SERVER["HTTP_X_REQUESTED_WITH"]) ? $_SERVER["HTTP_X_REQUESTED_WITH"] : "KOSONG";
echo "<script>alert('$xRequestedWith');</script>";
?>
