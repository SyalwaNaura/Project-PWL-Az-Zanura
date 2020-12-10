@extends('master')


<body style="background-color: #ADD8E6">

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
                            <a href="#"><img class="card-img-top" src="images/hijab1.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Smoke Heavy </a>
                                </h4>
                                <h5>Rp65K</h5>
                                <p class="card-text">Pashmina flowy dan lembut, variasi warna smoke  </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/hijab2.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Emerald Heavy</a>
                                </h4>
                                <h5>Rp65K</h5>
                                <p class="card-text">Pashmina flowy dan lembut, variasi warna emerald</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/hijab3.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Army Heavy</a>
                                </h4>
                                <h5>Rp65K</h5>
                                <p class="card-text">Pashmina flowy dan lembut, variasi warna army</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/hijab4.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Burgundy Heavy</a>
                                </h4>
                                <h5>Rp65K</h5>
                                <p class="card-text">Pashmina flowy dan lembut, variasi warna burgundy</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/hijab5.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Brunette Heavy</a>
                                </h4>
                                <h5>Rp65K</h5>
                                <p class="card-text">Pashmina flowy dan lembut, variasi warna brunette</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="images/hijab6.jpg" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Terracotta Heavy</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Pashmina flowy dan lembut, variasi warna terracotta</p>
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