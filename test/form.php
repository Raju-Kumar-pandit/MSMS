<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid bg-primary text-center text-white">
        <h1>Fassion Wear</h1>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <a class="navbar-brand" href="#">Logo</a>

  
  <ul class="navbar-nav text-center">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>

    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Clothes
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Short</a>
        <a class="dropdown-item" href="#">T-Sirt</a>
        <a class="dropdown-item" href="#">Paints</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Smart Phone
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Samsung</a>
        <a class="dropdown-item" href="#">Oppo</a>
        <a class="dropdown-item" href="#">Vivo</a>
      </div>
    </li>
  </ul>
  <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-success" type="submit">Search</button>
  </form>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active bg-success text-center">
    <div class="col-sm-4">
      <h3>Samsung</h3>
      <h3>Up to 90% Off</h3>
      <h4>New lonch phone with feature</h4>
    </div>
    </div>
    <div class="carousel-item bg-primary text-center">
    <div class="col-sm-4">
      <h3 class="text-danger">Realme</h3>
      <h3>Rs 9999</h3>
      <h4>Power Full Batry BackUp</h4>
    </div>
    </div>
    <div class="carousel-item bg-danger text-center">
    <div class="col-sm-4">
      <h3>Joky T-shirt </h3>
      <h3>Up to 50% OFF</h3>
      <h4>Delivary free</h4>
      
    </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<div class="conttainer-fluid">
    
  <div class="card-deck">
  <div class="card bg-primary">
    <div class="card-body text-center">
      <h1 class="card-text">Realme</h1>
      <img src="image/shirt.jpg" alt="">
    </div>
  </div>
  <div class="card bg-warning">
    <div class="card-body text-center">
      <h1 class="card-text">Realme12</h1>
    </div>
  </div>
  <div class="card bg-success">
    <div class="card-body text-center">
      <h1 class="card-text">OPPO A7</h1>
    </div>
  </div>
  <div class="card bg-danger">
    <div class="card-body text-center">
      <h1 class="card-text">VIVO Pro</h1>
    </div>
  </div>
</div>
</div>

<div class="container">
  <h2>Stretched Link in Card</h2>
  <p>Add the .stretched-link class to a link inside the card, and it will make the whole card clickable (the card will act as a link):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary stretched-link">See Profile</a>
    </div>
  </div>
</div>

<div class="container">
  <h2>Stretched Link in Card</h2>
  <p>Add the .stretched-link class to a link inside the card, and it will make the whole card clickable (the card will act as a link):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary stretched-link">See Profile</a>
    </div>
  </div>
</div>

<div class="container">
  <h2>Thumbnail</h2>
  <p>The .img-thumbnail class creates a thumbnail of the image:</p>            
  <img src="cinqueterre.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
</div>

<div class="container">
  <h2>Thumbnail</h2>
  <p>The .img-thumbnail class creates a thumbnail of the image:</p>            
  <img src="image/shirt.jpg" class="img-thumbnail" alt="" width="304" height="236"> 
</div>
</body>
</html>