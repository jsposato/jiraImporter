<?php
include_once('vendor/autoload.php');

use Curl\Curl;
use josegonzalez\Dotenv\Loader;

try {
    $envFile = new Loader('.env');

} catch (Exception $e) {
    print $e->getMessage();
    exit;
}
$envFile->parse();
$env = $envFile->toArray();

print_r($env);

$request = new Curl();

$request->setBasicAuthentication($env['JIRA_USERNAME'], $env['JIRA_PASSWORD']);
$request->setHeader("Content-Type", "application/json");
$request->get($env['JIRA_URL'].'/rest/api/2/issue/createmeta');

var_dump($request->response);
