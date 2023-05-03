<html>

<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CoverageBook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/book.png') }}" />
    <style>
        #myScrollspy {
            float: right;
        }

        .tab_link {
            position: fixed;
            top: 6%;
            left: 0;
            z-index: 999;
            width: 100%;
            height: 48px;
            background-color: white;
            padding-top: 6px;
        }

        #myScrollspy button {
            border: none;
            background-color: transparent;
        }

        ul.nav-pills {
            top: 20px;
            position: fixed;
        }

        div.col-8 div {
            height: 500px;
        }

        .container-fluid {
            padding-left: 0px;
            padding-right: 0px;
        }

        #myScrollspy i {
            margin-right: 10px;
        }

        body {
            overflow-x: hidden;
        }

        .layout_main {
            border-radius: 5px;
            padding: 50px 0px;
            color: white;
        }

        .layout_main .col-md-12 {
            padding-top: 20px;
        }

        #section42 {
            padding-bottom: 50px;
        }
    </style>
</head>

<body>
    <!-- header start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <header id="header">
                    <nav class="navbar  navbar-default navbar-fixed-top justify-content-center  navbar-expand-lg" style="position: fixed; left:0; right: 0; z-index: 1; height: 60px;
                        background: rgb(8, 161, 154);">
                        <span><b>This is a preview of your book.
                                <a class="text-dark" href="#">
                                    <span>Go back to editing</span>
                                </a>
                                <span>or</span>
                                <a class="text-dark" href="#">
                                    <span> share your book</span>
                                </a>
                            </b>
                        </span>
                    </nav>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 tab_link">
                @if(!empty($findBook->banner_logo))
                <img src="{{ asset('img/'.$findBook->banner_logo) }}" alt="" width="40" height="30" class="hidden ml-4 mt-0">
                @endif
                <nav id="myScrollspy">

                    <button class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <i style="color: {{ $findBook->accent_color ?? ''}};" class="fa fa-bars"></i>Contents</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#section41">Front Cover</a>
                        <a class="dropdown-item" href="#section42">Matrics Summary</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="margin-top: 45px;">

                <div id="section41" style="background-color: {{$book->cover_bg_color ?? ''}};">
                    <div class="col-md-12 layout_main_col">
                        <div class="layout_main" style="background-color: {{$book->cover_bg_color ?? ''}};">
                            <div class="row">
                                @if(!empty($book->cover_logo))
                                <div class="col-md-12 text-center">
                                    <img src="{{ asset('img/fontCover/'.$book->cover_logo ?? '' )}}" alt="" width="150px" height="150px">
                                </div>
                                @endif
                                @if(!empty($book->cover_title))
                                <div class="col-md-12 text-center">
                                    <h1>{{ $book->cover_title ?? ''}}</h1>
                                </div>
                                @endif

                                @if(!empty($book->cover_subtitle))
                                <div class="col-md-12 text-center">
                                    <b>{{ $book->cover_subtitle ?? ''}}</b>
                                </div>
                                @endif

                                @if(!empty($book->cover_image))
                                <div class="container">
                                    <div class="col-md-12">
                                        <img src="{{ asset('img/fontCover/'.$book->cover_image ?? '' )}}" alt="" width="100%">
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div id="section42" class="container">
                    <div class="row">
                        <div class="col-md-12 text-center mt-5 mb-5">
                            @if(!empty($metrics[0]))
                            <h1>Summary</h1>
                            <hr style="height: 5px;width: 80px; background: gray;margin-left: 511px;">
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3 mt-5">
                        @if(!empty($metrics))
                        @foreach($metrics as $key => $metric)
                        @if($key == 0 || $key == 1)
                        <div class="col-md-6">
                            <div class="card text-center" style="width:100%;height: 300px;padding: 50px 30px;border-radius: 16px; margin-bottom:30px">
                                <h1>{{ $metric->value }}</h1>
                                <h3>{{ $metric->name }}</h3>
                                <p class="text-secondary">{{ $metric->description }}</p>
                            </div>
                        </div>
                        @else
                        <div class="col-md-3">
                            <div class="card text-center" style="width:100%;height: 300px;padding: 50px 30px;border-radius: 16px;margin-bottom:30px">
                                <h1>{{ $metric->value }}</h1>
                                <h3>{{ $metric->name }}</h3>
                                <p class="text-secondary">{{ $metric->description }}</p>
                            </div>
                        </div>
                        @endif

                        @endforeach
                        @endif

                    </div>


                </div>
            </div>
        </div>
    </div>


    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center mt-5 mb-5">
                <h1>Coverage</h1>
                <hr style="height: 5px;width: 80px; background: gray;margin-left: 611px;">
                <h4>
                    <span>1 piece</span>
                    <span class="text-secondary">of coverage in total</span>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card m-4" style="background: rgb(225, 223, 223);">
                                <h3 class="ml-5 mt-3">youtube.com/channel/</h3>
                                <div class="card m-3">
                                    <img src="{{ asset('img/20230131070708-ipad-1112.webp') }}" alt="" width="100%" height="auto" class="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <p class="mt-5">YOUTUBE</p>
                            <h2 class="mt-3 mb-4">YouTube</h2>
                            <a href="" target="_blank">youtube.com/
                            </a>
                            <hr class="mt-5 mr-5" style="height: 1px;width: 330px; background: lightgray;justify-content: center;">
                            <div class="row">
                                <div class="co-md-">
                                    <p class="mt-3">Engagements</p>
                                </div>
                                <div class="co-md-4">
                                    <h2 class="ml-5 mt-3">3.07M</h2>
                                    <p class="ml-5 text-secondary">Total number of<br> social engagements</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</body>

</html>