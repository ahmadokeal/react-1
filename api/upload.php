<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $img = $_FILES['img'];
  chmod($img['tmp_name'], 0777)
  if (move_uploaded_file($img['tmp_name'], __DIR__ . "/" . rand(0, 1000000) . '.png')) {
    echo 'img uploaded';
  }
  echo 'hello';
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
  <?php echo __DIR__;?>
  <?php print_r($_FILES); ?>
  <form action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
    <input type="file" name="img">
    <button>sub</button>
  </form>
</body>

</html>
