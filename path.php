<?php
$http = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'] === "localhost" ? $_SERVER['HTTP_HOST'] . '/agoc' : $_SERVER['HTTP_HOST'];

define("DEFAULT_URL", $http . "://" . $host);
