<?php

/*
 * Copyright (C) 2016 Emailinvest API.
 * 
 * Return your account data
 */

include '../LatestApi/Emailinvest.php';

use api;

$ei = new api\emailinvest("your_api_key", "your_username", true);
$ei->Host = "app1.emailinvest.com/api";

$result = $ei->me();
var_dump($result);
