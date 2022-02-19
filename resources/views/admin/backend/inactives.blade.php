@extends('layouts.backend.app')
@section('content')
<div class="container">
 {{-- <div class="d-block mb-4 mb-md-0"> --}}
     <table class="table border">
         <tr>
            <th>Sl</th>
             <th>username</th>
             <th>unique_id</th>
             <th>referral_id</th>
             <th>action</th>
         </tr>
         @foreach ($profiles as $profile)
             
         <tr>
            <td>{{$loop->iteration}}</td>
             <td>{{$profile->username}}</td>
             <td>{{$profile->unique_id}}</td>
             <td>{{$profile->referral_id}}</td>
             <td> <a href="{{route('admin.take_payment',$profile->id)}}"> Approve </a></td>
            
         </tr>
         @endforeach
     </table>
 {{-- </div> --}}
</div>
@endsection