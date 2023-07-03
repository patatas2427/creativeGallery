<?php

session_start();
session_unset();
session_destroy();

header('Location: /cdscdb/project/index.php');
exit();
