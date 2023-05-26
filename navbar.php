<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>TinyGrow</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles.css">

</head>

<body>

  <div class="Main">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="./index.php" style="font-size: 2rem;"><strong style="margin-left: 5%; letter-spacing : 3px;">TinyGrow</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link" href="./index.php"> <strong >HOME</strong></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <strong >PRODUCTS</strong>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./products/fruits.php">Fruit Plants</a>
              <a class="dropdown-item" href="./products/flowers.php">Flower Plants</a>
              <a class="dropdown-item" href="./products/seeds.php">Seeds</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer"> <strong >CONTACT US</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./login.php"> <strong >Log-in</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./signup.php"> <strong >Sign-up</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./cart.php"> <img class="nav-image" src="./images/cart.png" alt="Error Loading img"> </a>
          </li>
        </ul>
      </div>
    </nav>
  </div> <br><br>
    

</body>

</html>
