<sidebar id="sidebar">
    <div class="sidebar mb-4">
        <ul>
            <li class="lii">
                <!-- Default dropleft button -->
                <div class="btn-group dropright">
                    <a href="#" type="" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('img/plus.png') }}" alt="" width="60" height="60"><br> Add
                    </a>

                    <div class="dropdown-menu sidebar_menu" id="dropdown">


                        <a class="rounded-top" id="cardwth" data-toggle="modal" data-target="#myModal">

                            <div class="row" style="flex-wrap: initial;">
                                <div class="col-md-1 pt-2">
                                    <img class="card-img-left example-card-img-responsive" src="{{ asset('img/sharicon.png') }}" alt="" width="30" height="30" />
                                </div>

                                <div class="col-md-11">
                                    <div class="card-body mr-0 pt-1">
                                        <h6 class="card-title">Add Coverage Links</h6>
                                        <p class="textp card-text">Paste in links to online articals, Instagram, Twitter, Facebook, Youtube Vedios etc...</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="" id="cardwth" href="{{ route('book.upload_covarage_file', $bookId) }}">
                            <div class="row" style="flex-wrap: initial;">
                                <div class="col-md-1 pt-1">
                                    <img class="card-img-left example-card-img-responsive" src="{{ asset('img/sharicon.png') }}" alt="" width="30" height="30" />
                                </div>

                                <div class="col-md-11">
                                    <div class="card-body mt-0 mr-3 pt-2">
                                        <h6 class="card-title">Upload Coverage Files</h6>
                                        <p class="textp card-text">Uload Newspapers & Mamazines clippings, TV and Radeo, Files, ectc...</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="" id="cardwth" data-toggle="modal" data-target="#addSlide">
                            <div class="row" style="flex-wrap: initial;">
                                <div class="col-md-1 pt-1">
                                    <img class="card-img-left example-card-img-responsive" src="{{ asset('img/sharicon.png') }}" alt="" width="30" height="30" />
                                </div>

                                <div class="col-md-11">
                                    <div class="card-body mt-0 mr-3 pt-2">
                                        <h6 class="card-title">Add Custom Slides</h6>
                                        <p class="textp card-text">Add Your own additional Slides, Brand, Graphics and Analysis.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a class="rounded-bottom" id="cardwth" data-toggle="modal" data-target="#addSection">
                            <div class="row" style="flex-wrap: initial;">
                                <div class="col-md-1 pt-1">
                                    <img class="card-img-left example-card-img-responsive" src="{{ asset('img/sharicon.png') }}" alt="" width="30" height="30" />
                                </div>

                                <div class="col-md-11">
                                    <div class="card-body mt-0 mr-3 pt-2">
                                        <h6 class="card-title">Add a Section</h6>
                                        <p class="textp card-text">Group your coverage into sections by Region, Date, Medea type or anthing else you need...</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Split dropleft button end -->

            </li>
            <li>

                <a href="{{ route('book.index', $bookId ?? '') }}">
                    <i class="fa-solid fa-book-open" style="font-size: 30px;"></i><br> Book <br> Overview</a>
            </li>
            <li>
                <a href="{{ route('book.fount_cover', $bookId ?? '') }}" class="pt-4">
                    <i class="fa-solid fa-image" style="font-size: 30px;"></i><br> Front Cover
                </a>
            </li>
            <li>
                <a href="{{ route('book.matrics_summary', $bookId ?? '') }}">
                    <i class="fa-solid fa-chart-simple" style="color: white;font-size: 30px;"></i><br> Matrics summary
                </a>
            </li>
            <li>
                <a href="{{ route('book.highlights', $bookId ?? '') }}">
                    <img src="{{ asset('img/star.png') }}" alt="" width="50" height="50"><br> Highlights
                </a>
            </li>
            <li class="lii">
                <!-- Default dropleft button -->
                <div class="btn-group dropright">
                    <a href="#" type="" class="" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        <i class="fa-solid fa-layer-group" style="font-size: 30px;"></i><br> Coverage
                    </a>

                    <div class="dropdown-menu sidebar_menu" id="dropdown">
                        <div class="cards">

                            @if(!empty(App\Models\BookSections::get()))
                            @foreach(App\Models\BookSections::where('name', '!=', 'Front Matter')->where('book_id', $bookId)->get() as $sections)
                            <a href="{{ route('book.coverage', [$bookId, $sections->id]) }}" id="cardwth">
                                <div class="row">
                                    <div class="col-md-11">
                                        <h6 class="card-title">{{ $sections->name }}</h6>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            @endif

                            <a class="rounded-bottom" id="cardwth" data-toggle="modal" data-target="#addSection">
                                <div class="row">
                                    <div class="col-md-11">
                                        <h6 class="card-title">Add New Section</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Split dropleft button end -->

            </li>
            <li>
                <a href="{{ route('book.share') }}" class="pb-5">
                    <i class="fa-solid fa-arrow-up-from-bracket" style="color: aqua;font-size: 30px;"></i><br> Share Book
                </a>
            </li>
        </ul>
    </div>
</sidebar>




<div class="modal" id="addSection">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add a Section</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('book.section.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <p>Sections can be used to<b> organise your coverage</b>. Each section will have its <b> own page </b> (and URL) in the book and you can move coverage between sections at any time.</p>
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold" for="email">Section name<br> <small>e.g. 'Autumn coverage' or 'On the socials'</small></label>

                        <input type="text" class="form-control" name="name" required>
                        <input type="hidden" value="{{ $bookId ?? ''}}" name="bookId">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add Section</button>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>



<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Coverage Links</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="{{route('book.coverage.storeLinks')}}">
                    @csrf
                    <div class="form-group">
                        <label class="font-weight-bold" for="email">Paste the URLs to your coverage in here:</label>
                        <p>Add your links to online articles, social media posts, YouTube videos... Maximum 250 at a time. 199 remaining in your plan</p>
                        <textarea name="link" id="" cols="30" rows="5" class="form-control" placeholder="awesomewebsite.com/yourcoverage" required></textarea>
                        <input type="hidden" name="bookId" value="{{ $bookId ?? ''}}">
                    </div>
                    <div class="form-group">
                        <label for="pwd" class="font-weight-bold">Choose which section to import your coverage into:</label>
                        <p>Divide your coverage into sections for easy grouping, sorting and presentation e.g. by media type or location.</p>
                        <select class="form-control" name="sectionId">
                            @if(App\Models\BookSections::get())
                            @foreach(App\Models\BookSections::where('name', '!=', 'Front Matter')->where('book_id', $bookId)->get() as $sections)
                            <option value="{{ $sections->id }}">{{ $sections->name }}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <a href="#">Create a new section</a>
                    </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add Coverage</button>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->


        </div>
    </div>
</div>