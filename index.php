<!DOCTYPE html>
<html lang="en" dir="ltr">

<body>

  <!-- Navbar------------------------------------------------------------------------------------  -->
  <?php
      require "./navbar.php"
  ?>

  <!-- Carousel------------------------------------------------------------------------------------  -->
  <div id="Caurosel">
    <div id="skill-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active caurosel-bg carousel1">
          <div class="text">
            <h5>Lets root for each other<br>
              and watch each other grow.</h5><br>
            <button class="Btn" type="button" name="button"><a href="./products/fruits.php"> Order Fruit Plants</a></button>
          </div>
        </div>
        <div class="carousel-item caurosel-bg carousel2">
          <div class="text">
            <h5>If you’ve never experienced the joy of accomplishing more than you can imagine, plant a garden.</h5><br>
            <button class="Btn" type="button" name="button"><a href="./products/flowers.php"> Order flower Plants</a></button>
          </div>
        </div>
        <div class="carousel-item caurosel-bg carousel3">
          <div class="text">
            <h5>The garden is a love song, a duet between a human being and Mother Nature.</h5><br>
            <button class="Btn" type="button" name="button"><a href="./products/seeds.php">Order seeds</a></button>
          </div>
        </div>
        <div class="carousel-item caurosel-bg carousel4">
          <div class="text">
            <h5>To Plant a garden is to <br>
              believe in tomorrow.</h5><br>

          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#skill-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#skill-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <!-- Website add------------------------------------------------------------------------------------  -->
  <div id="Ratings">
    <div class="row">
      <div class="col-lg-4">
        <img class="rating-img" src="./images/cash-on-delivery.png" alt="Error"><br><br>
        <h6>Cash On Delivery Available</h6>
        <p>Pay only When Product Delivered.</p>
      </div>
      <div class="col-lg-4">
        <img class="rating-img" src="./images/secure.png" alt="Error"><br><br>
        <h6>Secure Shipping</h6>
        <p>Dilignent Care taken to secure plants.</p>
      </div>
      <div class="col-lg-4">
        <img class="rating-img" src="./images/chatbot.png" alt="Error"><br><br>
        <h6>Bot Support</h6>
        <p>We help you grow your garden for lifetime</p>
      </div>
    </div>
  </div>

  <!-- Advertising  products------------------------------------------------------------------------------------  -->
  <div id="Products">
    <h3 style="color: green;">Best Selling Plants</h3><br>
    <div class="row row1">
      <div class="card-col col-lg-3 C">
        <div class="card">
          <div class="card-body">
            <img class="deckpic" src="./images/hibiscusorange.jpg" alt="Error">
            <p class="Strikeprice">₹499</p>
            <h4>₹309</h4>
            <h7><a href="./products/items/hibiscusorange.php">Hibiscus(Orange) Plant</a></h7>
          </div>
        </div>
      </div>


      <div class="card-col col-lg-3 C">
        <div class="card">
          <div class="card-body">
            <img class="deckpic" src="./images/pomegranate.jpg" alt="Error">
            <p class="Strikeprice">₹599</p>
            <h4>₹329</h4>
            <h7><a href="./products/items/pomegranate.php"> Pomegranate Plant</a></h7>
          </div>
        </div>
      </div>


      <div class="card-col col-lg-3 C">
        <div class="card">
          <div class="card-body">
            <img class="deckpic" src="./images/kalanchoe.jpg" alt="Error">
            <p class="Strikeprice">₹849</p>
            <h4>₹449</h4>
            <h7><a href="./products/items/kalanchoe.php"> Kalanchoe(Red) Plant</a></h7>
          </div>
        </div>
      </div>

      <div class="card-col col-lg-3 C">
        <div class="card">
          <div class="card-body">
            <img class="deckpic" src="./images/mango.jpg" alt="Error">
            <p class="Strikeprice">₹1299</p>
            <h4>₹329</h4>
            <h7><a href="./products/items/mango.php"> Mango Plant</a></h7>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Trending products------------------------------------------------------------------------------------  -->
  <div id="trending">
    <h3 style="color: green;">Our Products</h3><br>
    <div class="row">

      <div class="col-lg-3 col-md-6">
        <img src="http://cdn.shopify.com/s/files/1/0047/9730/0847/products/nurserylive-combo-packs-plants-5-best-indoor-plants-pack-16968508997772.jpg?v=1601348243" alt="">
        <p>Domesticated Plants</p>
      </div>

      <div class="col-lg-3 col-md-6">
        <img src="./images/trendingimg2.jpeg" alt="">
        <p>Seeds</p>
      </div>

      <div class="col-lg-3 col-md-6">
        <img src="./images/trendingimg3.jpeg" alt="">
        <p>Gardening Tools</p>
      </div>

      <div class="col-lg-3 col-md-6">
        <img src="./images/trendingimg4.jpeg" alt="">
        <p>Clay Acceceries</p>
      </div>

    </div>
  </div>

  <div id="GardenDecor">
    <h3 style="color: green;">Inspired from us</h3><br><br>
    <div class="row">

      <div class="col-lg-4">
        <div class="info">
          <img src="./images/plant-adv1.png" alt="Error">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="info">
          <img src="./images/plant-adv2.png" alt="Error">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="info">
          <img src="./images/plant-adv3.png" alt="Error">
        </div>
      </div>


    </div>
    <br><br>

  </div>

    <!-- Footer------------------------------------------------------------------------------------  -->
  <?php
    require "./footer.php";
  ?>

</body>

</html>