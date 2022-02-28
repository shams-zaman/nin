@extends('layouts.backend.app')

@section('content')
    @if (Auth::user()->getProfile->isActive == 0)
        <h1>
            You havn't paid the monthly premium yet;
        </h1>
        <div class="row">
            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light bg-dark  shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">


                            <div class="align-items-center">
                                <h2 style="color: white" class="h5">My Ref. Code</h2>
                                {{-- <h2 class="h6">this Month </h2> --}}

                                <h3 id="codena" style="color: white" class="mb-1">{{ $myUniqueId }}</h3>
                            </div>
                            <small style="color: white"> <a onclick="alna('#codena')" style="color: white"
                                    class="bg-primary "> <u>
                                        <b>Click</b> here to copy</u></a> <span class="icon icon-small"><span
                                        class="fas fa-globe-europe"></span></span> </small>
                            <div class="small mt-2">

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <script>
                function alna(element) {
                    var $temp = $("<input>");
                    $("body").append($temp);
                    $temp.val($(element).text()).select();
                    document.execCommand("copy");
                    $temp.remove();
                    alert('Copied!')
                }
            </script>
        </div>
    @else
        <div class="row ">


            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light bg-dark  shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">


                            <div class="align-items-center">
                                <h2 style="color: white" class="h5">Total Downline:</h2>
                                {{-- <h2 class="h6">this Month </h2> --}}

                                <h3 style="color: white" class="mb-1">{{ $tMyDowns }}</h3>
                            </div>
                            <small>This Month <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span>
                            </small>
                            <div class="small mt-2">

                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light bg-dark  shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">


                            <div class="align-items-center">
                                <h2 style="color: white" class="h5">Active Downline:</h2>
                                {{-- <h2 class="h6">this Month </h2> --}}

                                <h3 style="color: white" class="mb-1">{{ $aMyDowns }}</h3>
                            </div>
                            <small>This Month <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span>
                            </small>
                            <div class="small mt-2">

                            </div>


                        </div>
                    </div>
                </div>
            </div>



            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light bg-dark  shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">


                            <div class="align-items-center">
                                <h2 style="color: white" class="h5">Wallet</h2>
                                {{-- <h2 class="h6">this Month </h2> --}}

                                <h3 style="color: white" class="mb-1">{{ $wallet }}</h3>
                            </div>
                            <small>This Month <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span>
                            </small>
                            <div class="small mt-2">

                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light bg-dark  shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex ">
                            <div class="">
                                <h2 style="color: white" class="h5">Bonus</h2>
                                @if ($mybonus == 0)
                                    <h3 style="color: white" class="mb-1">Not Eligible Yet! </h3>
                                @else
                                    <h3 style="color: white" class="mb-1">{{ $mybonus }}</h3>
                                @endif
                            </div>
                            <small style="color: white">This Month <span class="icon icon-small">
                                    <span class="fas fa-globe-europe"></span></span>
                            </small>
                            <div class="small mt-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>








            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light bg-dark  shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">


                            <div class="align-items-center">
                                <h2 style="color: white" class="h5">Rank</h2>
                                {{-- <h2 class="h6">this Month </h2> --}}

                                <h3 style="color: white" class="mb-1">{{ $rank }}</h3>
                            </div>
                            <small>This Month <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span>
                            </small>
                            <div class="small mt-2">

                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light bg-dark  shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">


                            <div class="align-items-center">
                                <h2 style="color: white" class="h5">Previous Revenue</h2>
                                {{-- <h2 class="h6">this Month </h2> --}}

                                <h3 style="color: white" class="mb-1">{{ $prevBonus }}</h3>
                            </div>
                            <small>This Month <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span>
                            </small>
                            <div class="small mt-2">

                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light bg-dark  shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">


                            <div class="align-items-center">
                                <h2 style="color: white" class="h5">Total Revenue Paid</h2>
                                {{-- <h2 class="h6">this Month </h2> --}}

                                <h3 style="color: white" class="mb-1">{{ $tBonus }}</h3>
                            </div>
                            <small>This Month <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span>
                            </small>
                            <div class="small mt-2">

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light bg-dark  shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex ">


                            <div class="">
                                <h2 style="color: white" class="h5">total Points</h2>
                                {{-- <h2 class="h6">this Month </h2> --}}

                                <h3 style="color: white" class="mb-1">{{ $pv }}</h3>
                            </div>
                            <small>This Month <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span>
                            </small>
                            <div class="small mt-2">

                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-4 mb-4">
                <div class="card border-light bg-dark  shadow-sm">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">


                            <div class="align-items-center">
                                <h2 style="color: white" class="h5">My Ref. Code</h2>
                                {{-- <h2 class="h6">this Month </h2> --}}

                                <h3 id="code" style="color: white" class="mb-1">{{ $myUniqueId }}</h3>
                            </div>
                            <small style="color: white"> <a onclick="al('#code')" style="color: white"
                                    class="bg-primary "> <u> <b>Click</b> here to copy</u></a> <span
                                    class="icon icon-small"><span class="fas fa-globe-europe"></span></span> </small>
                            <div class="small mt-2">

                            </div>


                        </div>
                    </div>
                </div>
            </div>






        </div>
        {{-- @push('name')

        @endpush --}}
        <script>
            function al(element) {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text()).select();
                document.execCommand("copy");
                $temp.remove();
                alert('Copied!')
            }
        </script>
    @endif














    {{-- <div class="container">
 @if (Auth::user()->profiled == 0)


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <center> {{ __('You are logged in! as User') }} <br><h2>{{ __('Tell us who you are!!') }}</h2></center></div>

    <div class="card-body">
        <form method="POST" action="{{ route('user.profile.create') }}">
            @csrf

            <div class="form-group row">
                <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('User Name:') }}</label>

                <div class="col-md-6 mb-3">
                    <input  id="username" type="text" class="  form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="nin" class="col-md-4 col-form-label text-md-right">{{ __('National ID No:') }}</label>

                <div class="col-md-6 mb-3">
                    <input id="nin" type="number" class="form-control @error('nin') is-invalid @enderror" name="nin" value="{{ old('nin') }}" required autocomplete="nin" autofocus>

                    @error('nin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row">
                <label for="referral_id" class="col-md-4 col-form-label text-md-right">{{ __('Referral ID NO:') }}</label>

                <div class="col-md-6 mb-3">
                    <input id="referral_id" type="text" class="form-control @error('referral_id') is-invalid @enderror" name="referral_id" value="{{ old('referral_id') }}" required autocomplete="referral_id" autofocus>

                    @error('referral_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create') }}
                    </button>
                </div>
            </div>
        </form>



    </div>
            </div>
        </div>
    </div>
    @else
    <h1>User Dashboard & Welcome Note </h1> <br>
   <h5 style="margin: .4rem"> Your profile is Under review!</h5>
   <div class="card" style="width: 25%">
<div class="card-header">
    <h4>Wallet:</h4>
    <div class="card-body">
        {{auth::user()->getProfile->wallet}}
    </div>
</div>

   </div>
   <div class="card" style="width: 25%">
    <div class="card-header">
        Points:
        <div class="card-body">
            {{auth::user()->getProfile->pv}}

        </div>
    </div>
   </div>

    @endif

</div> --}}
@endsection
