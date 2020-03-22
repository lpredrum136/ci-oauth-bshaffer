<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('application/third_party/Oauth2/src/OAuth2/Autoloader.php');
OAuth2\Autoloader::register();

$users = [
  'Henry2' => [
    'password' => '1234',
    'first_name' => 'Henry',
    'last_name' => 'Nguyen'
  ]
];

$storage = new OAuth2\Storage\Pdo([
  'dsn' => 'mysql:dbname=ci-oauth-bshaffer;host=localhost',
  'username' => 'root',
  'password' => 'legolas136'
]);

// $storage = new OAuth2\Storage\Memory(['user_credentials' => $users]);

$server = new OAuth2\Server($storage);

$server->addGrantType(new OAuth2\GrantType\UserCredentials($storage));
