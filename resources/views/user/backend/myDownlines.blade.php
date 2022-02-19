@extends('layouts.backend.app')
@section('content')
<div class="container ">
 {{-- <div class="d-block mb-4 mb-md-0"> --}}
     <center>
     <table style="width: 75%" class="table border">
         <tr>
            <th>Sl</th>
             
             <th>Name</th>
             <th>Points</th>
             <th>status</th>
         </tr>
         @foreach ($profiles as $profile)
             
         <tr>
            <td>{{$loop->iteration}}</td>
         
             <td>{{$profile->username}}</td>
             <td>{{$profile->pv}}</td>
             <td><span class="{{$profile->isActive == 0 ? "btn-dark" :"btn-success"}}"  style="font-size: .9rem">
                {{$profile->isActive == 0 ? "Deactive" :"Active"}} </span></td>
            
         </tr>
         @endforeach
     </table>
    </center>
 {{-- </div> --}}
</div>
@endsection