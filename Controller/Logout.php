<?php

namespace Controller;

session_start();
session_destroy();
require(ROOT.'index.php');

?>