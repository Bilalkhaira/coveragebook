<!DOCTYPE html>
<html lang="en">

<head>
    <title>MVW Network</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/custom_style.css') }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/book.png') }}" style="object-fit: cover;
  width: 50px;
  height: 100px;" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 login_form">
                <div class="col-md-12">
                    <img src="{{ asset('img/logo.png') }}" width="20%">
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

                        <!-- <p>Don't have an account yet? <a href="{{ route('register') }}">Start a free trial</a> </p> -->
                        <!-- <p>Signed up for a trial but can't sign in? <a href="#">Resend activation email</a> </p> -->
                    </form>
                </div>

            </div>

            <div class="col-md-4 img_col" style="height: 100vh;">

                <div class="col-md-12 d-flex justify-content-center">
                    <img src="{{ asset('img/singin.png') }}" width="150px" height="150px" alt="">
                </div>

                <div class="col-md-12 ">
                    <blockquote class="font-serif text-xl text-center text-green-darker leading-snug">
                        <p>“Leadership traits matter a lot, whether on a business or a personal level!”</p>
                    </blockquote>
                    <p class="text-green-darker"><cite class=" not-italic"><strong>Rachana Chowdhary</strong><br>, Founder - MediaValueWorks- Digital Communications Agency</cite></p>
                </div>

                <div class="col-md-12">
                    <img width="100%" src="{{ asset('img/signin1.png') }}" alt="">
                </div>

            </div>

        </div>
    </div>

</body>

</html>