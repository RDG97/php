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

    <div id="carouselLarge" class="carousel slide d-none d-lg-block">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselLarge" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselLarge" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselLarge" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\hike.jpg" class="mx-auto d-block w-25 p-3 text-center" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Backpacking the AT</h5>
        <p>I love backpacking and camping. I try to do a section of the appalachian trail every year.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\tank.jpg" class="mx-auto d-block w-25 p-3 text-center" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Planted Aquarium</h5>
        <p>Freshwater tanks and live plants are a huge hobby of mine. I could stare for hours!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\heep.jpg" class="mx-auto d-block w-25 p-3 text-center" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>My Jeep</h5>
        <p>Another hobby of mine is restoring cars!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselLarge" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselLarge" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div id="carouselSmall" class="carousel slide d-lg-none">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselSmall" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselSmall" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselSmall" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\hike.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
         <h5>Backpacking the AT</h5>
        <p>I love backpacking and camping. I try to do a section of the appalachian trail every year.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\tank.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h5>Planted Aquarium</h5>
        <p>Freshwater tanks and live plants are a huge hobby of mine. I could stare for hours!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img\heep.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption ">
        <h5>My Jeep</h5>
        <p>Another hobby of mine is restoring cars!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselSmall" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselSmall" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    <div class="container-fluid text-center">




    
    <?php 
    echo '<p>Hi, I’m Ryan—a 27-year-old web developer with a passion for building, whether it’s websites, engines, or aquascapes. I completed the Awesome Inc web development bootcamp in 2022, and while the job hunt initially proved challenging, 
    I shifted gears and spent time working as a mechanic. Though I enjoyed the hands-on problem solving, I realized that long term, my best life involved coding, creativity, and continuous learning. Now, I’m back and fully committed to pursuing a 
    career in web development. Outside of tech, I love hiking, gaming, working on my car, maintaining my aquariums, and experimenting with 3D printing. I bring the same curiosity and dedication to development 
    that I do to all my hobbies.</p>';
    echo "<br>";

    ?>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>