
@extends('master')


<body style = "background-color: #ADD8E6">

  <!-- Page Content -->
  <br></br>
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Az Zanura</h1>
        <div class="list-group">
          <a href="catalog" class="list-group-item">Dress</a>
          <a href="catalog2" class="list-group-item">Pashmina</a>
          <a href="catalog3" class="list-group-item">Blouse</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/fluid1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/fluid2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/fluid3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/gamis2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Shaliha Dress</a>
                </h4>
                <h5>Rp200K</h5>
                <p class="card-text">Bahan Ity Ori jatuh dengan tali di pinggang</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/gamis1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Syakila Dress</a>
                </h4>
                <h5>Rp350K</h5>
                <p class="card-text">Adem, jatuh, tidak menerawang, dengan shabby pattern memperindah penampilan</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/gamis3.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Ethniquwy Dress</a>
                </h4>
                <h5>Rp375K</h5>
                <p class="card-text">Dress elegan dengan aksen etnik cantik</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/gamis4.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Auliya Dress</a>
                </h4>
                <h5>Rp320K</h5>
                <p class="card-text">Material ceruty baby dolls premium dengan furing dan pattern cantik</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/gamis5.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Fuschiy Dress</a>
                </h4>
                <h5>Rp360K</h5>
                <p class="card-text">Dress simple, nan manis dengan lengan terompet dan tali pinggang</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/gamis6.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Anisa Dress</a>
                </h4>
                <h5>Rp300K</h5>
                <p class="card-text">Simple nan eegan cocok untuk berbagai acara</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
