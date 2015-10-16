<!DOCTYPE HTML>
<head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>Генератор псевдонаучных цитат.</title>
</head>
<body>

<?php

require 'vendor/autoload.php';

require 'functions.php';

$bench = new Ubench;

$bench->start();

$faker = Faker\Factory::create();

//fake quots output
fakequote();

echo '<br>';
echo '<br>';
//fake nicknames output
echo ReleaseName\Release::random();
//fake names output
echo " " . $faker->name;
echo '<br>';
echo '<br>';

$bench->end();

echo "Benchmarked:";
echo '<br>';
echo $bench->getTime();
echo '<br>';
echo $bench->getMemoryPeak();

?>

</body>
</html>

