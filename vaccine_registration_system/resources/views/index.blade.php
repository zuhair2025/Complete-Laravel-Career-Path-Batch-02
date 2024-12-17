<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="{{ asset('fav.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Vaccine Registration System</title>
    <style>
        body{
            font-family: Poppings, sans-serif
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (Route::has('login'))
                <ul class="nav justify-content-end">
                    @auth
                    <li class="nav-item">
                      <a class="nav-link active" href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">Log In</a>
                    </li>
                    @endauth
                  </ul>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <p style="font-size:40px;font-weight:600" class="pt-4">Vaccine Registration System</p>
                    </div>
                    <div class="col-md-12">
                        <img style="width: 300px" src="{{asset('vaccine-49366.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="form-group m-0">
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required autofocus autocomplete="name">
                            @if ($errors->has('name'))
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>

                        <!-- NID -->
                        <div class="form-group m-0">
                            <label for="nid">{{ __('NID') }}</label>
                            <input type="text" id="nid" name="nid" class="form-control" value="{{ old('nid') }}" required autofocus autocomplete="nid">
                            @if ($errors->has('nid'))
                                <small class="text-danger">{{ $errors->first('nid') }}</small>
                            @endif
                        </div>

                        <!-- Phone -->
                        <div class="form-group m-0">
                            <label for="phone">{{ __('Phone Number') }}</label>
                            <input type="text" id="phone" name="phone" class="form-control" value="{{ old('phone') }}" required autofocus autocomplete="phone">
                            @if ($errors->has('phone'))
                                <small class="text-danger">{{ $errors->first('phone') }}</small>
                            @endif
                        </div>

                        <!-- Email Address -->
                        <div class="form-group m-0">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="username">
                            @if ($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>

                        <!-- Vaccine Center -->
                        <div class="form-group m-0">
                            <label for="center">{{ __('Vaccine Center') }}</label>
                            <select id="center" name="vaccine_center_id" class="form-control">
                                <option value="" disabled selected>{{ __('Select a Vaccine Center') }}</option>
                                @foreach ($vaccineCenters as $vaccineCenter)
                                    <option value="{{ $vaccineCenter->id }}">{{ $vaccineCenter->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('center'))
                                <small class="text-danger">{{ $errors->first('center') }}</small>
                            @endif
                        </div>

                        <!-- Password -->
                        <div class="form-group m-0">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" id="password" name="password" class="form-control" required autocomplete="new-password">
                            @if ($errors->has('password'))
                                <small class="text-danger">{{ $errors->first('password') }}</small>
                            @endif
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group m-0">
                            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required autocomplete="new-password">
                            @if ($errors->has('password_confirmation'))
                                <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                            @endif
                        </div>

                        <div class="form-group mt-4 text-right">
                            <a href="{{ route('login') }}" class="text-sm text-muted">{{ __('Already registered?') }}</a>
                            <button type="submit" class="btn btn-primary ml-3">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
