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
          <a class="nav-link active" aria-current="page" href="#">Home/About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jobpage.php">Job History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projects.php">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Me</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container-fluid text-center">
    <?php 
    echo '<p>This is my resume as a Simple website using Bootstrap for shape, form, and scalability.  While using PHP OOP to display info. A link to the GitHub repository can be found <a href="https://github.com/RDG97/php">here.</a>
    </p>  <p>This website was built as a small display of ability for my interview with eLink Design.</p>';
    echo "<br>";

    ?>
</div>
<div class="container-md text-center">
    <img src="img\meandmylady.jpg" class="img-fluid rounded" alt="My wonderful Girlfriend and I" style="max-width: 50%; max-height: 50%">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>