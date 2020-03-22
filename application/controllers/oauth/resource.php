<?php
require_once __DIR__ . '/server.php';

if (!$server->verifyResourceRequest(OAuth2\Request::createFromGlobals())) {
  $server->getResponse()->send();
  die;
}

echo json_encode([
  'success' => true,
  'message' => 'You accessed my APIs'
]);
