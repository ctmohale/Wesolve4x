<?php include '../assests/php/processing.php'; ?>
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
    <!--Jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Style animation-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!--CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="mainLoadingSpin">
      <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
        <img src="../assests/IMG/support_graphic-removebg-preview.png" width="50" alt="">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    <div class="mainBodyShow">
      <!--Nav-->
      <nav class="navbar navbar-expand-lg navbar-light sticky-lg-top">
          <div class="container-fluid">
            <a class="navbar-brand mt-2"  href="../index.php"><img src="../assests/IMG/logo.png" width="270" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav me-auto mb-1 mb-lg-0">
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

      <!--Img -->
      <img class="animate__animated animate__fadeInLeft" src="../assests/IMG/path8998.png" width="100%" alt="">
      <div class="alert alert-success alert-dismissible fade show m-0" style="border-radius: 0;" role="alert">
          <strong>Personal Information completed!</strong> Proceed by compliting  contact information.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <!--Main show -->
      <section class="mainShow">
          <div class="showCase">
              <div class="regTitle p-5">
                  <h1>Personal Information</h1>
                  <hr>
                  <div class="mainInfoAppProcess text-dark">
                  Applications process
                      <small class="infoProcessing text-warning bg-white" style="background-color: white; border-radius: 100px; padding: 5px;"><i class="fas fa-user-edit"></i> Personal information <div class="spinner-grow spinner-grow-sm" role="status">
                          <span class="visually-hidden">Loading...</span>
                        </div>
                      </small>
                      <small class="infoProcessing"><i class="fas fa-address-book"></i> Contact information</small>
                      <small class="infoProcessing bg-white" style="background-color: white; border-radius: 100px; padding: 5px;"><i class="fas fa-user-edit"></i> Personal information</small>
                  </div>
              </div>
              <div class="row bg-white m-0 p-0">
                  <!--Personal infromation -->
                  <?php include './personal_info_form.php'; ?>

                  <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body mt-3" style="width: 100%;">
                          <img src="../assests/IMG/support_graphic-removebg-preview.png" width="120%" alt="">
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>

      <!--Footer section -->
      <?php include './footer.php'; ?>
    </div>
    <!--Load Jquery loading script -->
    <script src="../assests/js/loading.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
