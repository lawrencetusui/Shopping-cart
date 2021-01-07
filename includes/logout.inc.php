<?php
session_start();
session_unset();
session_destroy();
header("Location:../html/Member/member.php?login=success");
?>
