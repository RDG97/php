<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryan's Resume</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div id="app" class="text-center"></div>

    <?php echo '<p>Hello World</p>'; 
    ?>
    <?php require 'vehicle.php';
    
    echo count($cars);
    $carnum = count($cars);
    echo "<br>";
    echo $cars[2]->name;
    echo "<br>";
for ($x = 0; $x < $carnum; $x++) {
        foreach ($cars[$x] as $z) {
  echo "$z <br>";
}
}

    foreach ($cars[1] as $z) {
  echo "$z <br>";
}
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>