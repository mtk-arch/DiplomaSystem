<?php
setcookie("user_key", "", time() - (86400*30), "/");
header("Location: ../index.php")
?>