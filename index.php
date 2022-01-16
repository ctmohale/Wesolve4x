<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome-->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <!-- Style animation-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!--Jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--CSS-->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="mainLoadingSpin">
      <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
        <img src="./assests/IMG/support_graphic-removebg-preview.png" width="50" alt="">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    <div class="mainBodyShow">
        <!--Nav-->
        <nav class="navbar navbar-expand-lg navbar-light sticky-lg-top">
            <div class="container-fluid">
              <a class="navbar-brand mt-2" href="./index.php"><img src="./assests/IMG/logo.png" width="270" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    
                  </li>
                  <li class="nav-item">
                  
                  </li>
                  <li class="nav-item">
                    
                  </li>
                </ul>
                <span>
                  <div class="container">
                    <a href=""><i class="fab fa-facebook-f fa-1x"></i></a>
                    <a href=""><i class="fab fa-twitter fa-1x"></i></a>
                    <a href=""><i class="fab fa-linkedin-in fa-1x"></i></a>
                    <a href=""><i class="fab fa-instagram fa-1x"></i></a>
                  </div>
                </span>
                <span>
                    <form action="">
                        <button id="loginBtn">Sign in</button>
                    </form>
                </span>
              </div>
            </div>
        </nav>
        <img class="animate__animated animate__fadeInLeft" src="./assests/IMG/path8998.png" width="100%" alt="">
        <section class="mainShow">
            <div class="showCase">
                <div class="row">
                    <div class="col-sm-9">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="animate__animated animate__fadeInLeft animate__delay-1s">WELCOME TO WESOLVEX</h4>
                            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <h1 class="mainTitle animate__animated animate__fadeInLeft animate__delay-2s">REGISTRATION <span>2022</span></h1>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <h1 class="mainTitle">REGISTRATION <span>2022</span></h1>
                                </div>
                                <div class="carousel-item">
                                    <h1 class="mainTitle">With supporting text </h1>
                                </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            
                          <p class="card-text mt-2 mb-lg-2 animate__animated animate__fadeInLeft animate__delay-3s">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="./pages/registration.php" class="btn">REGISTER NOW</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card-body" id="showDesignCard">
                            <div class="container">
                                <img class="animate__animated animate__flip animate__delay-4s" src="./assests/IMG/support_graphic-removebg-preview.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include './pages/footer.php'; ?>
    </div>
    <!--Load Jquery loading script -->
    <script src="./assests/js/loading.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
