<?php
include_once('vendor/autoload.php');

use Curl\Curl;
use josegonzalez\Dotenv\Loader;

try {
    $env = new Loader('.env');

} catch (Exception $e) {
    print $e->getMessage();
    exit;
}
$env->parse();
$blah = $env->toArray();

print_r($blah);

