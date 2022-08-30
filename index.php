<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Water~Bearer~PS BootStrap-PHP-JS</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link href="cover.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>

<body class="d-flex h-100 text-center text-white  bg-image BckGrndImg"   style="height: 100vh;">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <!-- <header class="mb-auto">
          <div>
            <h3 class="float-md-start mb-0">Water~Bearer Prepared Still</h3>
            <nav class="nav nav-masthead justify-content-center float-md-end">
              <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="#">Home</a>
              <a class="nav-link fw-bold py-1 px-0" href="#">Products</a>
              <a class="nav-link fw-bold py-1 px-0" href="#">Analysis</a>
              <a class="nav-link fw-bold py-1 px-0" href="#">Contact</a>
            </nav>
          </div>
        </header> -->
        <nav class="navbar navbar-expand-md navbar-dark bg-transparent sticky-top">
        		<div class="container-fluid">
              <!-- <img src="image\WaterBearerTransparent.png"> -->
        			<a href="#" class="navbar-brand"> Prepared Still H2O Provider<a/>
        			<button  type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
        				<span class="navbar-toggler-icon"></span>
        			</button>
        		</div>
        		<div class="collapse navbar-collapse" id="navbarResponsive">
        			<ul class="navbar-nav ml-auto">
        				<li class="nav-item">
        					<a href="#" class="nav-link menuItems indexItem active">Home</a>
        				</li>
        				<li class="nav-item">
        					<a href="#" class="nav-link menuItems indexItem">Products</a>
        				</li>
        				<li class="nav-item">
        					<a href="#" class="nav-link menuItems indexItem">Analysis</a>
        				</li>
        				<li class="nav-item">
        					<a href="#" class="nav-link menuItems indexItem ">Contact</a>
        				</li>
        			</ul>
        		</div>
        	</nav>


    <!--  // Home-->
            <div  class="modal0 ">
                <div align="right">
    <!--                <img src="Image/closeModalButton.svg" alt="Close" class="closeModal ">-->
                </div>
                <br>
                    <div align="center">
                </div>
                <br>
            </div>

            <!--        // Products-->
            <!-- Removed modalOverlay -->
            <div class="modal0  hidden">
              <!-- Carousel -->
              <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <!-- <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button> -->
                </div>
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <!-- <img src="pic_trulli.jpg" alt="Italian Trulli"> -->
                    <img src="image/10LiterQuickserver500x500.jpeg" alt="Italian Trulli">

                    <div class="container">
                      <div class="carousel-caption">
                        <h1>10 Liter re-fill bottles</h1>
                        <p>'High quality and light weight 10 liter water bottles filled with pure prepared still water for only R160 '.</p>
                        <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                    <img src="image/20LiterQuickserver500x500.png" alt="Italian Trulli">

                    <div class="container">
                      <div class="carousel-caption">
                        <h1>20 Liter re-fill bottles</h1>
                        <p>High quality and light weight 20 liter water bottles filled with pure prepared still water for only R200</p>
                        <!-- <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
                      <img src="image/WaterDeliveriesWBNoLogoTransparentGimp.png" alt="Water Bottles">

                    <div class="container">
                      <div class="carousel-caption">
                        <h1>Deliveries</h1>
                        <p>Prepared refill water delivered to your door</p>
                        <!-- <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p> -->
                      </div>
                    </div>
                  </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div> <!-- //Carousel -->
            </div>


            <!--        // Analysis-->
            <!-- Removed modalOverlay -->

            <div class="modal0  hidden">

              <br>
              <br>
              <div align="center">
                <?php include 'phpDocs/analysis.php';?>
              </div>
            </div>

    <!--        //Contacts-->
    <!-- Removed modalOverlay -->
            <div class="modal0  hidden">
                <br>
                <div align="center" class = "modalHeader text-white">
                    <H2>Contact</H2>
                </div>
                <br>

                <div align="center"  top="50%" class = "modalHeader text-white">
                    <!--                <H1>SITE UNDER CONSTRUCTION</H1>-->
                    <h3><a href="mailto:water@water-bearer.co.za">Email : water@water-bearer.co.za</a></h3><br>
                    <h3><a href="tel:0836568563" >Phone or SMS : 0836568563</a></h3><br>
                    <h3>Whatsapp~Signal~Telegram : 0677756030</h3><br>
                    <br><br><br><br>
                </div>
            </div>


        <footer class="mt-auto text-white-50">
          <p>Website for Water~Bearer PS, by <a href="#" class="text-white">AG</a>.</p>
        </footer>
    </div>

  </body>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="assets/dist/js/bootstrap.bundle.min.js"></script> -->
</html>
