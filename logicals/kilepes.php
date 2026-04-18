<?php
$data = $_SESSION;
unset($_SESSION["csn"]);
unset($_SESSION["un"]);
unset($_SESSION["login"]);
session_destroy();
?>