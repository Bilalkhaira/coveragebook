<!DOCTYPE html>
<html lang="en">

<head>
    <title>CoverageBook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/custom_style.css') }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/book.png') }}" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 login_form">
                <div class="col-md-12">
                    <img src="{{ asset('img/book.png') }}" width="40" height="40">
                </div>
                <div class="col-md-12">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1 class="font-weight-bold">Sign In</h1>
                        <div class="form-group">
                            <label for="email" class="font-weight-bold">Email address:</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pwd" class="font-weight-bold">Password:</label>
                            @if (Route::has('password.request'))
                            <a class="float-right" href="{{ route('password.request') }}">Forgot password?</a>
                            @endif
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label font-weight-bold">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                            </label>
                        </div>

                        <button type="submit" class="btn btn-success">Sign In</button>

                        <p>Don't have an account yet? <a href="{{ route('register') }}">Start a free trial</a> </p>
                        <p>Signed up for a trial but can't sign in? <a href="#">Resend activation email</a> </p>
                    </form>
                </div>

            </div>

            <div class="col-md-4 img_col">

                <div class="col-md-12 d-flex justify-content-center">
                    <img src="{{ asset('img/signin.png') }}" width="150px" height="150px" alt="">
                </div>

                <div class="col-md-12 ">
                    <blockquote class="font-serif text-xl text-center text-green-darker leading-snug">
                        <p>“
                            This is by far the best new app I've used this year. It's like the Canva for PR reports.
                            It took about 60 seconds to build the report and not only does it look fantastic, but the data insights are really valuable.
                            ”</p>
                    </blockquote>
                    <p class="text-green-darker"><cite class=" not-italic"><strong>Cassie Anderson</strong>, Account Manager, MD Consulting</cite></p>
                </div>

                <div class="col-md-12">
                    <img width="100%" src="{{ asset('img/signin1.png') }}" alt="">
                </div>

            </div>

        </div>
    </div>

</body>

</html>