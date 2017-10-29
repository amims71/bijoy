<?php

session_start();
unset($_SESSION['localhost_app_token']);
session_destroy();

header("Location: /");
exit;


?>