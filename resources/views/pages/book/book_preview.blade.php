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
    <link rel="stylesheet" href="{{ asset('css/book_preview.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/book.png') }}" />

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
                <img src="{{ asset('img/'.$findBook->banner_logo) }}" alt="" width="40" class="hidden ml-4 mt-0">
                @endif
                <nav id="myScrollspy">

                    <button class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <i style="color: {{ $findBook->accent_color ?? ''}};" class="fa fa-bars"></i>Contents</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#section41">Front Cover</a>
                        <a class="dropdown-item" href="#section42">Matrics Summary</a>
                        @if(!empty($bookHighLights[0]))
                        <a class="dropdown-item" href="#highlightsSec">Highlights</a>
                        @endif
                        <div class="border-top my-3"></div>
                        @if(!empty($bookSections) && count($bookSections) > 1)
                        @foreach($bookSections as $key => $bookSection)
                        @if(count($bookSection->slides) > 0 || count($bookSection->links) > 0)
                        <a class="dropdown-item" href="#section{{$key}}">{{ $bookSection->name ?? ''}}</a>
                        @endif
                        @endforeach
                        @endif
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
                        <div class="col-md-12 text-center mt-5">
                            @if(!empty($metrics[0]))
                            <h1>Summary</h1>
                            <hr style="height: 5px;width: 80px; background: {{ $findBook->accent_color ?? ''}};margin-left: 511px;">
                            @endif
                        </div>
                    </div>
                    <div class="row">
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
                @if(!empty($bookHighLights[0]))
                <div id="highlightsSec" class="container">
                    <div class="row">
                        <div class="col-md-12 text-center mt-5">
                            <h1>Highlights</h1>
                            <hr style="height: 5px;width: 80px; background: {{ $findBook->accent_color ?? ''}};margin-left: 511px;">
                        </div>
                    </div>
                    <div class="row">
                        @if(!empty($bookHighLights))
                        @foreach($bookHighLights as $key => $bookHighLight)

                        <div class="col-md-4">
                            <div class="coverage_grid_view high_preview">

                                <!-- <a href="#" class="hightligh_a"> -->
                                    @if(!empty($bookHighLight->image))
                                    <img src="{{ asset('img/files/'.$bookHighLight->image) }}" alt="">
                                    @else
                                    <img src="{{ asset('img/fontCover/11.png' ?? '' )}}" alt="" width="100%">
                                    @endif

                                    @if(!empty($bookHighLight->name))
                                    <p><b> {{ $bookHighLight->name ?? '' }} </b></p>
                                    @endif
                                    @if(!empty($bookHighLight->description))
                                    <p> {{ $bookHighLight->description ?? '' }} </p>
                                    @endif
                                <!-- </a> -->


                            </div>
                        </div>

                        @endforeach
                        @endif

                    </div>


                </div>
                @endif



                @if(!empty($bookSections) && isset($bookSections->slides) && count($bookSections->slides) > 0 || isset($bookSections->links) && count($bookSections->links) > 0)
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center mt-5 mb-5">
                            <h1>Coverage Overview </h1>
                            <hr style="height: 5px;width: 80px; background: {{ $findBook->accent_color ?? ''}};margin:auto">
                            <p class="overview_p"> <span> {{count($bookSections)}} piece </span> of coverage in total, grouped into <span> {{count($bookSections)}} sections.</span> Open <br> a section to view all the coverage in detail.</p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @if(!empty($bookSections))
            @foreach($bookSections as $key => $bookSection)
            <div id="section{{$key}}" class="container">
                @if(count($bookSections) > 1)
                @if(count($bookSection->slides) > 0 || count($bookSection->links) > 0)
                <div class="row">
                    <div class="col-md-12 mt-5 mb-5">
                        <h1>{{ $bookSection->name ?? ''}}</h1>
                    </div>
                </div>
                <div class="row mb-3 mt-5">
                    @if(!empty($bookSection->slides))
                    @foreach($bookSection->slides as $key => $slide)

                    <div class="col-md-3">
                        <div class="card text-center sectionCard">
                            <a href="{{ route('book.preview.section', [$bookId, $bookSection->id] )}}">

                                @if(substr($slide->file_name, strpos($slide->file_name, ".") + 1) == 'pdf')

                                <object data="{{ asset('img/files/'.$slide->file_name) }}" type="application/pdf" width="100%" height="260px">
                                    <p>Unable to display PDF file. <a href="{{ asset('img/files/'.$slide->file_name) }}">Download</a> instead.</p>
                                </object>
                                @else
                                <img src="{{ asset('img/files/'.$slide->file_name ) }}" width="100%" alt="">
                                @endif
                            </a>
                        </div>
                    </div>

                    @endforeach
                    @endif

                    @if(!empty($bookSection->links))
                    @foreach($bookSection->links as $key => $link)

                    <div class="col-md-3">
                        <div class="card sectionCard">
                            <a href="{{ route('book.preview.section', [$bookId, $bookSection->id] )}}">
                                @if($link->image)
                                <img src="{{ asset('img/files/'.$link->image ) }}" width="100%" alt="">
                                @else
                                <img class="front_img img-fluid" src="{{ asset('img/fontCover/11.png' ?? '' )}}" alt="" width="100%">
                                @endif
                                <div>
                                    <span><b>{{ $link->name ?? ''}}</b></span>
                                    <p class="card-text">{{ \Illuminate\Support\Str::words(strip_tags($link->description), '8') }}</p>
                                </div>

                            </a>
                        </div>
                    </div>

                    @endforeach
                    @endif
                    <div class="col-md-3">
                        <div class="card text-center openCard sectionCard">
                            <a href="{{ route('book.preview.section', [$bookId, $bookSection->id] )}}">
                                <span><i style="color: {{ $findBook->accent_color ?? ''}};" class="fa fa-arrow-right"></i></span>
                                <p><b>Open This Section</b></p>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @else
                <div class="row">
                    @if(!empty($bookSection->slides[0]) || !empty($bookSection->links[0]))
                    <div class="col-md-12 text-center">
                        <h1>{{ $bookSection->name ?? ''}}</h1>
                        <hr style="height: 5px;width: 80px; background: {{ $findBook->accent_color ?? ''}};margin:auto">
                    </div>
                    @endif
                </div>
                <div class="row mt-3">
                    @if(!empty($bookSection->slides))
                    @foreach($bookSection->slides as $key => $slide)

                    <div class="col-md-12 oneSection">
                        <div class="text-center">
                            @if(substr($slide->file_name, strpos($slide->file_name, ".") + 1) == 'pdf')

                            <object data="{{ asset('img/files/'.$slide->file_name) }}" type="application/pdf" width="100%" height="600px">
                                <p>Unable to display PDF file. <a href="{{ asset('img/files/'.$slide->file_name) }}">Download</a> instead.</p>
                            </object>
                            @else
                            <img src="{{ asset('img/files/'.$slide->file_name ) }}" width="100%" alt="">
                            @endif

                        </div>
                    </div>

                    @endforeach
                    @endif

                    @if(!empty($bookSection->links))
                    @foreach($bookSection->links as $key => $link)
                    <div class="col-md-12">
                        <div class="row preview_link_card">
                            <div class="col-md-8">
                                @if(!empty($link->image))
                                <img src="{{ asset('img/files/'.$link->image) }}" width="100%" alt="">
                                @else
                                <img class="front_img img-fluid" src="{{ asset('img/fontCover/11.png' ?? '' )}}" alt="" width="100%">
                                @endif
                            </div>
                            <div class="col-md-4">
                                <p><b>{{ $link->name ?? ''}}</b></p>
                                <p>{{ $link->description ?? ''}}</p>
                                <a href="{{$link->link}}">{{ $link->links ?? ''}}</a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    @endif
                </div>
                @endif

            </div>
            @endforeach
            @endif
        </div>
    </div>
    </div>
    @if(!empty($bookSections) && count($bookSections) > 1)
    <footer class="ftr">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <div class="dropdown">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" style="width: 100%;">
                            Jump To A Section
                        </button>
                        <div class="dropdown-menu" style="width: 100%;">
                            @foreach($bookSections as $key => $bookSection)
                            @if(count($bookSection->slides) > 0 || count($bookSection->links) > 0)
                            <a class="dropdown-item" href="{{ route('book.preview.section', [$bookId, $bookSection->id] )}}">{{ $bookSection->name }}</a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-right next_btn">
                    {{--
                    <a href="{{ route('book.preview.section', [$bookId, $bookSections[0]->id] )}}">
                    <span style="color: {{ $findBook->accent_color ?? ''}}">Next Section</span>
                    <i style="color: {{ $findBook->accent_color ?? ''}};" class="fa fa-arrow-right"></i>
                    <p>{{ $bookSections[0]->name }}</p>
                    </a>
                    --}}
                </div>
            </div>
        </div>
    </footer>
    @endif


</body>

</html>