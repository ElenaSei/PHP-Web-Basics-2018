<?php

session_start();//защо трябва да я стартираме пак?
session_destroy();
header("Location: login.php");
