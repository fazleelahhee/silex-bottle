<?php
define('APPLICATION_ENV', 'development');

$app = (require_once __DIR__.'/../app/config/Bootstrap.php');
$app->run();
