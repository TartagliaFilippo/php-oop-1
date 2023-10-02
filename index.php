<?php

include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oop</title>
</head>

<body>
  <h1>Films</h1>

  <ul>
    <li>
      <?php echo $production_test->getDetails() ?>
    </li>
    <li>
      <?php echo $tv_series_test->getDetails() ?>
    </li>
    <li>
      <?php echo $movie_test->getDetails() ?>
    </li>
  </ul>
</body>

</html>