<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style/style.css">


</head>

<body>
    <section class="top-logo">
        <img src="/image/logo.png" alt="">
        <h1>BSFMSTU - Alumni Association</h1>
    </section>

    <head>
        <nav class="navbar navbar-expand-lg nav-color">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/search')}}">Search</a>
                        </li>

                    </ul>
                    <div class="m2">
                        <a href="{{url('/login')}}" class="btn btn-outline-success">Log In</a>
                        <a href="{{url('/register')}}" class="btn btn-outline-danger">Sign Up</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- slider section -->
        <section class="slider container-fluid carousel-bg">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="true">
                <div class="carousel-indicators ">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/image/pic-1.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/pic-2.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/pic-3.jpg" class="d-block" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/pic-4.jpg" class="d-block" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </head>


    <!-- recent post section -->
    <h1 class="recent-section mt-5 mt-5">Recent Posts</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card ">
                    <img src="/image/card-image/c-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Demo Image -1</h5>
                        <p class="class-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In voluptatibus
                            esse autem cum, nam hic!</p>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/image/card-image/c-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Demo Image -1</h5>
                        <p class="class-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In voluptatibus
                            esse autem cum, nam hic!</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/image/card-image/c-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Demo Image -1</h5>
                        <p class="class-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In voluptatibus
                            esse autem cum, nam hic!</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4 mb-5">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card ">
                    <img src="/image/card-image/c-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Demo Image -1</h5>
                        <p class="class-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In voluptatibus
                            esse autem cum, nam hic!</p>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/image/card-image/c-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Demo Image -1</h5>
                        <p class="class-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In voluptatibus
                            esse autem cum, nam hic!</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/image/card-image/c-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Demo Image -1</h5>
                        <p class="class-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In voluptatibus
                            esse autem cum, nam hic!</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Recent News Section -->
    <h1 class="recent-section">Recent News</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card ">
                    <img src="/image/card-image/c-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Demo Image -1</h5>
                        <p class="class-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In voluptatibus
                            esse autem cum, nam hic!</p>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/image/card-image/c-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Demo Image -1</h5>
                        <p class="class-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In voluptatibus
                            esse autem cum, nam hic!</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/image/card-image/c-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Demo Image -1</h5>
                        <p class="class-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In voluptatibus
                            esse autem cum, nam hic!</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-4 mb-5">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card ">
                    <img src="/image/card-image/c-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Demo Image -1</h5>
                        <p class="class-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In voluptatibus
                            esse autem cum, nam hic!</p>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/image/card-image/c-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Demo Image -1</h5>
                        <p class="class-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In voluptatibus
                            esse autem cum, nam hic!</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="/image/card-image/c-1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> Demo Image -1</h5>
                        <p class="class-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In voluptatibus
                            esse autem cum, nam hic!</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <footer class="footer-main d-flex d-flex align-items-center justify-content-center">
        <h4>COPYRIGHT &#169; ALL RIGHT RESERVED GROUP - 6</h4>
    </footer>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>