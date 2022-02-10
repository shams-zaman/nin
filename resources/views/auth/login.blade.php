

<!DOCTYPE html>
<html lang="en">

<head> 
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Volt - Free Bootstrap 5 Dashboard</title>

<!-- Fontawesome -->
<link type="text/css" href="{{ asset('backend/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="{{ asset('backend/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="{{ asset('backend/css/volt.css') }}" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

@livewireStyles
</head>

<body>

    {{-- @@include('./dashboard/_nav.html', {
        "path": "../.."
    }) --}}

    <div class="container-fluid bg-soft">
        <div class="row">
            <div class="col-12">

{{-- @section('content') --}}
<section class="vh-lg-100 d-flex align-items-center">
<div class="container">
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row justify-content-center form-bg-image" data-background-lg="../../assets/img/illustrations/signin.svg">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                <div class="text-center text-md-center mb-4 mt-md-0">
                    <h1 class="mb-0 h3">Sign in to our platform</h1>
                </div>
                <form action="{{ route('login') }}" class="mt-4" method="POST">
                    @csrf
                    <!-- Form -->
                    <div class="form-group mb-4">
                        <label for="email">Your Email</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                            {{-- <input type="email" class="form-control" placeholder="example@company.com" id="email" autofocus required> --}}
                            <input id="email"  placeholder="example@company.com" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>  
                    </div>
                    <!-- End of Form -->
                    <div class="form-group">
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="password">Your Password</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>
                        <!-- End of Form -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                <label class="form-check-label" for="defaultCheck5">
                                  Remember me
                                </label>
                            </div>
                            <div><a href="{{ route('password.request') }}" class="small text-right">Lost password?</a></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Login</button>
                </form>
                {{-- <div class="mt-3 mb-4 text-center">
                    <span class="font-weight-normal">or login with</span>
                </div>
                <div class="btn-wrapper my-4 text-center">
                    <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" type="button" aria-label="facebook button" title="facebook button">
                        <span aria-hidden="true" class="fab fa-facebook-f"></span>
                    </button>
                    <button class="btn btn-icon-only btn-pill btn-outline-light text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button">
                        <span aria-hidden="true" class="fab fa-twitter"></span>
                    </button>
                    <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button" aria-label="github button" title="github button">
                        <span aria-hidden="true" class="fab fa-github"></span>
                    </button>
                </div> --}}
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <span class="font-weight-normal">
                        Not registered?
                        <a href="{{route('register')}}" class="font-weight-bold">Create account</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
{{-- @endsection --}}
</main>
            
{{-- <main></main> --}}
</div>
</div>
</div>

{{-- @@include('./_scripts.html', {
"path": "../.."
}) --}}

<!-- Core -->
<script src="{{ asset('backend/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('backend/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Vendor JS -->
<script src="{{ asset('backend/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>

<!-- Slider -->
<script src="{{ asset('backend/vendor/nouislider/distribute/nouislider.min.js')}}"></script>

<!-- Jarallax -->
<script src="{{ asset('backend/vendor/jarallax/dist/jarallax.min.js')}}"></script>

<!-- Smooth scroll -->
<script src="{{ asset('backend/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

<!-- Count up -->
<script src="{{ asset('backend/vendor/countup.js/dist/countUp.umd.js')}}"></script>

<!-- Notyf -->
<script src="{{ asset('backend/vendor/notyf/notyf.min.js')}}"></script>

<!-- Charts -->
<script src="{{ asset('backend/vendor/chartist/dist/chartist.min.js')}}"></script>
<script src="{{ asset('backend/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

<!-- Datepicker -->
<script src="{{ asset('backend/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

<!-- Simplebar -->
<script src="{{ asset('backend/vendor/simplebar/dist/simplebar.min.js')}}"></script>

<!-- Github buttons -->
{{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}

<!-- Volt JS -->
<script src="{{ asset('backend/assets/js/volt.js')}}"></script>

@livewireScripts  
</body>

</html>

