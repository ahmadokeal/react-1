<?php
header('Access-Control-Allow-Origin: https://react-1-plum-nine.vercel.app');
// if($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo file_get_contents('./MOCK_DATA.json');
// }
