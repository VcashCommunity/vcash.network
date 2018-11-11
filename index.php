<?php
$page = [
  'name' => 'Home',
  'id' => 'home'
];

require 'global.inc.php';

$peers = $site->getPeerInfo();

var_dump($xvc->getpeerinfo());

exit;

$template->assign('peers', $peers);

$template->display('home.tpl');
