{{--slider--}}
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

{{--<div class="row">--}}
    {{--<div class="col-md-2"></div>--}}
    {{--<div class="col-md-8">--}}
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/11.png" data-color="lightblue" alt="first image">
                    <div class="carousel-caption mycolor4">
                        <h2 class="myfonty">
                            This is test 1
                        </h2>
                    </div>
                </div>

                <div class="item">
                    <img src="img/12.png" data-color="firebrick" alt="Second Image">
                    <div class="carousel-caption mycolor4">
                        <h2 class="myfonty">
                            This is test 2
                        </h2>
                    </div>
                </div>

                <div class="item">
                    <img src="img/13.png"  data-color="violet" alt="Third Image">
                    <div class="carousel-caption mycolor4">
                        <h2 class="myfonty">
                            This is test 3  </h2>
                    </div>
                </div>
            </div>
    {{--</div>--}}
    {{--<div class="col-md-2"></div>--}}
{{--</div>--}}

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    <style>
    .carousel-caption h1, .carousel-caption h2, .carousel-caption h3, .carousel-caption h4, .carousel-caption h5, .carousel-caption h6{
    color:#000;

    }

    .p {
    text-align: center;
    padding-top: 40px;
    font-size: 13px;
    }

    .carousel-inner .item{
    height:500px;
    background-size:cover;
    background-position: center center;
    }

    .carousel-indicators li {
    background: #ccc;
    }

    .carousel-indicators .active {
    background: #a0bdcf;
    }


    </style>
    <script>
    $('.carousel').carousel({
        interval: 3000,
        pause: "false"
    });
    </script>