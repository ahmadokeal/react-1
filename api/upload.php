<?php
if ($_SERVER['REQUEST_METHOD'] == 'post') {
  $img = $_FILES['img'];
  if (move_uploaded_file($img['tmp_name'], __DIR__)) {
    echo 'img uploaded';
  }
  print_r($img);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>upload</title>
</head>

<body>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
    <input type="file" name="img">
    <button>sub</button>
  </form>
</body>

</html>
