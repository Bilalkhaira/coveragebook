<header id="header">
    <!-- header start -->
    <nav class="navbar  navbar-default navbar-fixed-top  navbar-expand-lg" style="position: fixed; left:0; right: 0; z-index: 1; height: 60px;
            background: #427484;display: inline-block;vertical-align: middle;">
        <div class="row">
            <div class="col-md-2">
                <img src="{{ asset('img/book.png') }}" alt="" width="40" height="40" class="hidden ml-1 mt-0">
                <a class="navbar-brand text-white" href="{{ route('dashboard') }}">CoverageBook</a>
            </div>

            <div class="col-md-5">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="coeragebook.html"><i class="fa-solid mr-1 fa-book"></i>BOOKS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><img src="{{ asset('img/box.png') }}" alt="" width="24" height="24" class="mb-1">CONVERAGE VOLT</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-5" style="vertical-align: middle;">
                <ul class="navbar-nav float-right">
                    <li class="nav-item ml-5 justify-content-center">
                        <a class="nav-link" href="#" style="color: rgb(254 197 122)"><i class="fa-solid fa-heart mr-1"></i>Upgrade Now</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a type="" class="nav-link text-white dropdown-toggle" data-toggle="dropdown" href="#"><img src="{{asset ('img/qstmrk.png') }}" alt="" width="18" height="18"> Help & Advice
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="">FAQs</a>
                                <a class="dropdown-item" href="">What's New</a>
                                <a class="dropdown-item" href="">Guides & Tutorials</a>
                                <a class="dropdown-item" href="">Example Reorts</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown dropdown-menu-right">
                            <a type="" class="nav-link text-white ml-5 dropdown-toggle" data-toggle="dropdown" href="#"><img src="{{ asset ('img/g circle.png') }}" alt="" width="21" height="21"> My Acount
                            </a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" style="color: #626060;" href=""><img src="{{ asset('img/setting.png') }}" alt="" class="mr-1" width="18" height="18">Account Settings</a>

                                <a class="dropdown-item" style="color: #626060;" style="color: #626060;" href=""><img src="{{ asset('img/team.png') }}" alt="" class="mr-1" width="21" height="21">My Team</a>

                                <a class="dropdown-item" style="color: #626060;" href=""><img src="{{ asset('img/bdge.png') }}" alt="" class="mr-1" width="21" height="21">Switch Plan</a>

                                <a class="dropdown-item" style="color: #626060;" href="{{ route('profile') }}"><img src="{{ asset('img/key.png') }}" alt="" class="mr-1" width="21" height="21">Edit My Password</a>

                                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <img src="{{ asset('img/signout.png') }}" alt="" class="mr-1" width="21" height="21">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br><br><br>
    <!-- header end -->
</header>