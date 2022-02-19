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
             <th>Month</th>
             <th>action</th>
         </tr>
         @foreach ($profiles as $profile)
             
         <tr>
            <td>{{$loop->iteration}}</td>
             <td>{{$profile->username}}</td>
             <td>{{$profile->unique_id}}</td>
             <td>{{$profile->referral_id}}</td>
             <td>{{ \Carbon\Carbon::parse($profile->updated_at)->format('F') }}</td>
             <td> <a href="{{route('admin.give_bonus',$profile->id)}}"> Pay </a></td>
            
         </tr>
         @endforeach
     </table>
 {{-- </div> --}}


 @push('head')
<!-- Styles -->

<!-- Scripts -->
<script>
 $(document).ready(function(){
    $("#myModal").modal('show');
});
</script>
@endpush

 <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$mytime}}</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Bonus will be available after the month end</p>
              
            </div>
        </div>
    </div>
</div>








</div>
@endsection