<?php
header('Access-Control-Allow-Origin: *');
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo file_get_contents(__DIR__ . '/MOCK_DATA.json');
}
