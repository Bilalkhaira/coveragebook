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
        <!-- <div class="row">
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
        </div> -->
        <div class="row">
            <div class="col-md-12 tab_link">
                @if(!empty($findBook->banner_logo))
                <img src="{{ asset('img/'.$findBook->banner_logo) }}" alt="" width="40" class="hidden ml-4 mt-0">
                @endif
                <nav id="myScrollspy">

                    <button class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> <i style="color: {{ $findBook->accent_color ?? ''}};" class="fa fa-bars"></i>Report</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('book.preview', $findBook->slug ?? '') }}">Front Cover</a>
                        <a class="dropdown-item" href="{{ route('book.preview', $findBook->slug ?? '') }}">Matrics Summary</a>
                        <div class="border-top my-3"></div>
                        @if(!empty($allSections) && count($allSections) > 1)
                        @foreach($allSections as $key => $bookSection)
                        @if(count($bookSection->slides) > 0 || count($bookSection->links) > 0)
                        <a class="dropdown-item" href="{{ route('book.preview.section', [$bookSection->id, $findBook->slug ?? ''] )}}">{{ $bookSection->name ?? ''}}</a>
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

            @if(!empty($bookSections))
            <div class="container">

                <div class="row">
                    <div class="col-md-12 mt-5 mb-5 text-center">
                        <h1>{{ $bookSections[0]->name ?? ''}}</h1>
                        <hr style="height: 5px;width: 80px; background: {{ $findBook->accent_color ?? ''}};margin:auto">
                    </div>
                </div>
                <div class="row mb-3 mt-5">
                    @if(!empty($bookSections[0]->slides))
                    @foreach($bookSections[0]->slides as $key => $slide)

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

                    @if(!empty($bookSections[0]->links))
                    @foreach($bookSections[0]->links as $key => $link)
                    <div class="col-md-12">
                        <div class="row preview_link_card">
                            <div class="col-md-8">
                                @if(!empty($link->image))
                                @if (strpos($link->image, "/") !== false)
                                <img src="{{ $link->image }}" width="100%" alt="">
                                @else
                                <img src="{{ asset('img/files/'.$link->image ) }}" width="100%" alt="">
                                @endif
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

            </div>
            @endif
        </div>
    </div>
    </div>

    <footer class="ftr">
        <div class="container">
            <div class="row">
                <div class="col-md-4 next_btn">
                    {{--
                    @if($bookSections->currentPage() > 1)
                    <a href="{{ $bookSections->previousPageUrl() }}">
                    <i style="color: {{ $findBook->accent_color ?? ''}};" class="fa fa-arrow-left"></i>
                    <span style="color: {{ $findBook->accent_color ?? ''}}">Previous Section</span>

                    </a>
                    @endif
                    --}}
                </div>
                <div class="col-md-4">
                    <div class="dropdown">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" style="width: 100%;">
                            Jump To A Section
                        </button>
                        <div class="dropdown-menu" style="width: 100%;">
                            @foreach($allSections as $key => $bookSection)
                            @if(count($bookSection->slides) > 0 || count($bookSection->links) > 0)
                            <a class="dropdown-item" href="{{ route('book.preview.section', [$bookSection->id, $findBook->slug ?? ''] )}}">{{ $bookSection->name }}</a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-right next_btn">
                    {{--
                    @if($bookSections->hasMorePages())
                    <a href="{{ $bookSections->nextPageUrl() }}">
                    <span style="color: {{ $findBook->accent_color ?? ''}}">Next Section</span>
                    <i style="color: {{ $findBook->accent_color ?? ''}};" class="fa fa-arrow-right"></i>
                    </a>
                    @endif
                    --}}
                </div>
            </div>
        </div>
    </footer>


</body>

</html>