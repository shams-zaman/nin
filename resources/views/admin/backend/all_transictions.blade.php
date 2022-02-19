@extends('layouts.backend.app')
@section('content')
<div class="container">
 {{-- <div class="d-block mb-4 mb-md-0"> --}}
     <table class="table border">
         <tr>
            <th>Sl</th>
             <th>Username</th>
             <th>amount</th>
             <th>note..</th>
             <th>Time</th>
         </tr>
         @foreach ($payments as $payment)
             
         <tr>
        
            <td>{{$loop->iteration}}</td>
             <td>{{$payment->tusername}}</td>
             <td>{{$payment->amount}}</td>
             <td>{{$payment->note}}</td>
             <td>{{$payment->created_at->diffForHumans()}}</td>
            
         </tr>
         @endforeach
     </table>
 {{-- </div> --}}
</div>
@endsection