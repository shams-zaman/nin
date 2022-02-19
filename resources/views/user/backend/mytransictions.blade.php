@extends('layouts.backend.app')
@section('content')
<div class="container">
 {{-- <div class="d-block mb-4 mb-md-0"> --}}
     <table class="table border">
         <tr>
            <th>Sl</th>
             
             <th>amount</th>
             <th>amount</th>
             <th>Time</th>
         </tr>
         @foreach ($transictions as $transiction)
             
         <tr>
            <td>{{$loop->iteration}}</td>
         
             <td>{{$transiction->amount}}</td>
             <td>{{$transiction->note}}</td>
             <td>{{$transiction->created_at}}</td>
            
         </tr>
         @endforeach
     </table>
 {{-- </div> --}}
</div>
@endsection