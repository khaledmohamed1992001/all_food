@extends('master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-outline mb-4">
                                            <label for="email"
                                                   class="form-label form-control-lg">{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        </div>


                                        <div class="form-outline mb-4">
                                            <label for="password"
                                                   class="form-label form-control-lg">{{ __('Password') }}</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                                   required autocomplete="current-password">
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember"
                                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-start">
                                            <button type="submit" class="btn">
                                                {{ __('Login') }}
                                            </button>

{{--                                            @if (Route::has('password.request'))--}}
{{--                                                <a class="btn-link" href="{{ route('password.request') }}">--}}
{{--                                                    {{ __('Forgot Your Password?') }}--}}
{{--                                                </a>--}}
{{--                                            @endif--}}

                                            <a style="margin-left: auto;" class="btn-link" href="{{ url('/#registeration') }}">
                                                {{ __('register') }}
                                            </a>
                                        </div>
                                        <div>
                                            @if($errors->any())
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                        <li class="badge badge-danger">{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                            @endif

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
@endsection
