<?php
header('Access-Control-Allow-Origin: https://react-1-plum-nine.vercel.app');
// if($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo file_get_contents(__DIR__ . '/MOCK_DATA.json');
// }
