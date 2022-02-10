@extends('layouts.backend.app')

@section('content')
<div class="container">
 @if(Auth::user()->profiled==0)


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
        {{-- @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif --}}

        
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
    
</div>
@endsection