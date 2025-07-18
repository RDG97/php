<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryan's Resume</title>
    <link rel="icon" type="image/x-icon" href="img\favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://www.linkedin.com/in/ryangann/">Ryan Gann</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home/About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jobpage.php">Job History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projects.php">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutMe.php">About Me</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class=".container-fluid text-center">
    <div class="h3">
    <?php echo '<p>Job History</p>'; 
    ?>
    </div>
    <?php require 'resume.php';

    $jobnum = count($jobs);

            
    echo "<br>";
for ($x = 0; $x < $jobnum; $x++) {
      echo "<br>";
        foreach ($jobs[$x] as $z) {
  echo "$z <br>";

}
}



    ?>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>