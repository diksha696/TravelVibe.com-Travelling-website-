<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TravelVibe.com</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript:void(0)">TravelVibe.com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Type here to Search">
          <button class="btn btn-success" type="button">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="cards/amsterdamnight.jpg" alt="Los Angeles" width="1500" height="500">
        <div class="carousel-caption">
          <h3>Amsterdam - Netherlands</h3>
          <p> Here you can Visit Hague, Utrecht too</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="cards/milano.jpg" alt="Chicago" width="1500" height="500">
        <div class="carousel-caption">
          <h3>Milan - Italy</h3>
          <p> Here you can Visit Turin ,Verona too</p>

          <!-- <h3>Bangkok - Thailand</h3>  
        <p> Here you can Visit Koh Si Changmor Sichang too</p>  -->

        </div>
      </div>

      <div class="carousel-item">
        <img src="3.webp" alt="New York" width="1500" height="500">
        <div class="carousel-caption">
          <h3>Manali - Himachal Pradesh</h3>
          <p>Here you can visit Kullu , Rohtang too</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <section class="my-3">
    <div class="py-5">
      <h3 class="text-center abouttag">About us</h3>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="cards/france.jpg" class="img-fluid aboutimg">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <h3 class="display-8">Welcome to TravelVibe.com </h3>
          <p class="py-3">
            Sample text .
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
            veniam, quis nostrud exerci
            tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem
            vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum
            dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim
            qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
            Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming
            id quod mazim placerat facer possim assum. Nam liber tempor cum soluta nobis
            eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
          </p>
          <a href="about.php" class="btn btn-success">Check More</a>
        </div>
      </div>
    </div>
  </section>

  <section class="my-3">
    <div class="py-5">
      <h3 class="text-center abouttag">Our Services</h3>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="cards/1.jpeg" alt="beachimage">

            <div class="card-body">
              <h4 class="card-title">Bali - Sri Lanka</h4>
              <p class="card-text">Visit Bali through TravelVibe.com</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="cards/2.jpeg" alt="beachimage">

            <div class="card-body">
              <h4 class="card-title">Cocoa Island - Maldives</h4>
              <p class="card-text">Visit Cocoa Island through TravelVibe.com</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <div class="card" style="width:400px">
            <img class="card-img-top" src="cards/northindia.jpg" alt="beachimage">

            <div class="card-body">
              <h4 class="card-title">Assam - India</h4>
              <p class="card-text">Visit Assam through TravelVibe.com</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- our gallery section -->
    <section class="my-1">
      <div class="py-5">
        <h3 class="text-center abouttag">Our Gallery</h3>
      </div>

      <!-- banner section -->
      <section class="mt-1">
        <div class="py-5">
          <img src="cards/banner.PNG" alt="banner" class="bannerpic">
        </div>
      </section>

      <!-- user registeration form section -->
      <div class="container mt-1">
        <h3 class="text-center aboutthis">User Registeration Form</h3>
      </div>

      <div class="w-50 m-auto">
        <form action="connect.php" method="post">

          <div class="mb-4 mt-5">
            <label for="uname" class="form-label">Username:</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="user" required>
            </div>

          <div class="mb-4">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>

          <div class="mb-4">
            <label for="mobile">Mobile Number:</label>
            <input type="mobile" class="form-control" placeholder="Enter your Mobile number" name="mobile">
            </div>

          <button type="submit" class="btn btn-success">Submit</button>
          
              <section class="my-1">
          <div class="py-4">
              </div>
           </section>


        </form>
        </div>
      </section>

    <section class="my-1">
      <div class="py-5">

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->

      <div class="container p-4">
        <!-- Section: Social media -->

        <section class="mb-4">

          <img src="cards/icons.PNG" alt="socialmedia" class="social">

        </section>
        <!-- Section: Social media -->

        <!-- Section: Text -->
        <section class="mb-4">
          <p>
            Choose from over 1.2 million hotels in more than 200 countries,
            30 million real guest reviews. Book flights to over 5000 destinations worldwide.
          </p>
        </section>
        <!-- Section: Text -->

        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Social</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#" class="text-white">Facebook</a>
                </li>
                <li>
                  <a href="#" class="text-white">Youtube</a>
                </li>
                <li>
                  <a href="#" class="text-white">Twitter</a>
                </li>
                <li>
                  <a href="#" class="text-white">LinkedIn</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Contact Us</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#" class="text-white">Customer Support</a>
                </li>
                <li>
                  <a href="#" class="text-white">Service Guarantee</a>
                </li>
                <li>
                  <a href="#" class="text-white">Website Feedback</a>
                </li>
                <li>
                  <a href="#" class="text-white">Travelling Offers</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase"> About</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#" class="text-white">Terms & Conditions</a>
                </li>
                <li>
                  <a href="#" class="text-white">Privacy Statement</a>
                </li>
                <li>
                  <a href="#" class="text-white">About TravelVibe.com</a>
                </li>
                <li>
                  <a href="#" class="text-white">Tours & Travel Packages</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Other Services</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#" class="text-white"> Investor Relations</a>
                </li>
                <li>
                  <a href="#" class="text-white">List My Hotel</a>
                </li>
                <li>
                  <a href="#" class="text-white"> All Hotels</a>
                </li>
                <li>
                  <a href="#" class="text-white">Affiliate Program</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style= "background-color: rgba(0, 0, 0, 0.2);">
        <p> © 2022 Copyright: <span> TravelVibe.com is a tourism website made by Diksha </span> </p>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    
</body>

</html>

