<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('id_ID');

// for ($i = 0; $i < 20; $i++) {
//   echo $faker->name . "<br>";
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Daftar Penduduk</h1>


  <?php for ($i = 0; $i < 10; $i++) : ?>
    <ul>
      <li><?= $faker->name; ?></li>
      <li><?= $faker->address; ?></li>
      <li><?= $faker->email; ?></li>
    </ul>

  <?php endfor; ?>
</body>

</html>