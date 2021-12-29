@extends('layouts.app')

@section('content')

<style>
form {

	border-radius:0.4em;
  	border:1px solid #0A192A;
    overflow:hidden;
  	position:relative;
  	box-shadow: 0 5px 10px 5px ;
}
label {
 	color:rgba(137, 192, 243, 0.8);
  	display:block;
  	font-size:13px;
  	padding-bottom:9px;
}
.underlay-photo {
  animation: hue-rotate 6s infinite;
  background: url('https://31.media.tumblr.com/41c01e3f366d61793e5a3df70e46b462/tumblr_n4vc8sDHsd1st5lhmo1_1280.jpg');
  background-size: contain;
  -webkit-filter: grayscale(30%);
  z-index: -1;
}

</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<section class="underlay-photo " style="height: 830px;">
<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-md-8" style="padding-top: 50px;">
            <div class="card underlay-photo">
                <div class="card-header text-center text-uppercase" style="color: white;"><strong> {{ __('HubSpot') }} </strong> </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-8 pt-3">
                            <label for="email" style="color: white;" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6 pt-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" readonly required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 mt-4">
                            <label for="password" style="color: white;" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" readonly required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-3 offset-md-4">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="color: cornsilk;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                                <div class="form-check" style="padding: 0 0 0 70px;">
                                    <input class="form-check-input" type="checkbox" readonly name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar Sesión') }}
                                </button>

                                <p></p>
                                <p></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
