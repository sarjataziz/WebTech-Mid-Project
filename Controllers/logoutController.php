<?php
session_start();
session_destroy();
setcookie('username', '', time() - 60 * 60 * 24 * 7);
header('Location: ../Views/login.php');
