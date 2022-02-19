@extends('layouts.backend.app')

@section('content')
{{-- @if(Auth::user()->isActive==0)
<h1>
You havn't paid the monthly premium yet;
</h1> --}}
@if(Auth::user()->profiled==0)
<div class=" mt-4 pb-6 row justify-content-center">
    <div class="col-md-8">
        <div class="card card-body bg-white border-light shadow-sm mb-4">
            <h2 class="h5 mb-4">General information</h2>
            <form method="POST" action="{{ route('user.profile.create') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="username">User Name</label>
                            <input  id="username" type="text" class="  form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="nin">National Identity</label>
                            <input id="nin" type="number" class="form-control @error('nin') is-invalid @enderror" name="nin" value="{{ old('nin') }}" required autocomplete="nin" autofocus>

                    @error('nin')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                   
                    <div class="col-md-6 mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-select mb-0" id="gender" aria-label="Gender select example">
                            <option selected="">Gender</option>
                            <option value="1">Female</option>
                            <option value="2">Male</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" type="number" placeholder="+12-345 678 910" required="">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                   
                    <div class="col-md-6 offset-3 mb-3">
                        <label for="referral_id">Referral*</label>

                        <input id="referral_id" type="text" class="form-control @error('referral_id') is-invalid @enderror" name="referral_id" value="{{ old('referral_id') }}" required autocomplete="referral_id" autofocus>

                        @error('referral_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


            
                <h2 class="h5 my-4">Address</h2>
                <div class="row">
                    <div class="col-sm-12 mb-3">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input class="form-control" id="address" type="text" placeholder="Enter your home address" required="">
                        </div>
                    </div>
                
                </div>
                <div class="row">
                    <div class="col-sm-4 mb-3">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input class="form-control" id="city" type="text" placeholder="City" required="">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="zip">ZIP</label>
                            <input class="form-control" id="zip" type="tel" placeholder="ZIP" required="">
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
   
</div>
@endif


@endsection