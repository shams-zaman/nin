<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com
=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->




<!DOCTYPE html>
<html lang="en">

<head> 
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>NIS(National Independence Scheme)</title>

<!-- Fontawesome -->
<link type="text/css" href="{{ asset('backend/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="{{ asset('backend/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="{{ asset('backend/css/volt.css') }}" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
{{-- the toaster --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@livewireStyles
</head>

<body>

    {{-- @@include('./dashboard/_nav.html', {
        "path": "../.."
    }) --}}

    <div class="container-fluid bg-soft">
        <div class="row">
            <div class="col-12">

               @include('layouts.backend.partials.sidebar')
               <main class="content">

                @include('layouts.backend.partials.topbar')
@yield('content')
                
                {{-- @@include('./dashboard/_footer.html', {
                    "path": "../..",
                    "classes": "text-dark"
                }) --}}
            </main>
            
               {{-- <main></main> --}}
            </div>
        </div>
    </div>

{{-- @@include('./_scripts.html', {
    "path": "../.."
}) --}}
<script src="{{ asset('backend/assets/js/jquery-3.6.0.min.js')}}"></script>


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{!! Toastr::message() !!}
<script>


    @if($errors->any())
        @foreach($errors->all() as $error)
              toastr.error('{{ $error }}','Error',{
                  closeButton:true,
                  progressBar:true,
               });
        @endforeach
    @endif

</script>
@stack('head')
  @livewireScripts  
</body>

</html>
