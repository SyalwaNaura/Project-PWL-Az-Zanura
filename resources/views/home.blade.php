@extends('master')

<body style="background-color: #ADD8E6">
    <!-- Page Content -->
    <br></br>
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Az Zanura
                    <small>Your Halal Fashion!</small>
                </h1>

                <!-- Blog Post -->
                @foreach($articles as $li)
                <div class="card mb-4">
                    <img src="{{$li->featuredimaged}}" class="card-img-top" style="height:300px;">
                    <div class="card-body">
                        <h2 class="card-title">{{$li->title}}</h2>
                        <p class="card-text">{{$li->content}}</p>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <form action="/search" method="get">
                        <div class="card-body">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">Search!</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Categories Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Categories</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="catalog">Catalog</a>
                                    </li>
                                    <li>
                                        <a href="about">About</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Contact Us!</h5>
                    <div class="card-body">
                        <p> E-mail : <a href="https://www.gmail.com/mail/help/intl/en/about.html?utm_expid=...">syalwanana123@gmail.com</a>
                            <br>Instagram : <a href="https://www.instagram.com/syalwanaura_/">@syalwanaura_</a>
                            <br>WhatsApp : 0895623452153</p>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</body>