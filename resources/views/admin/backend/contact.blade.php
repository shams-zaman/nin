@extends('layouts.backend.app')
@section('content')
<div class="container">
 {{-- <div class="d-block mb-4 mb-md-0"> --}}
     <table class="table border">
         <tr>
            <th>Sl</th>
             <th>Name</th>
             <th>Message</th>
             <th>email</th>
         </tr>
         @foreach ($contacts as $contact)
             
         <tr>
            <td>{{$loop->iteration}}</td>
             <td>{{$contact->name}}</td>
             <td>{{$contact->text}}</td>
             <td>{{$contact->contact_email}}</td>
            
         </tr>
         @endforeach
     </table>
 {{-- </div> --}}
</div>
@endsection