
@extends('layouts.backend.app')
@section('content')
<!--  -->
<div class="row justify-content-md-center">

    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-light bg-dark shadow-sm">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    {{-- <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon icon-shape icon-md icon-shape-blue rounded mr-4 mr-sm-0"><span class="fas fa-chart-line"></span></div>
                       
                    </div> --}}
                    <div class=" col-12 col-xl-7 px-xl-0">
                        <div class=" d-sm-block">
                            <h2 style="color: white" class="h5">Active Users  </h2>
                           

                            <h3 style="color: white" class="mb-1">{{$activates}}</h3>
                        </div>
                        <span {border-color: coral;} style="border-color:red" class=""><small style="color: white">This Month  <span class="icon  icon-small"><span class="fas fa-globe-europe"></span></span> </small> </span>
                        
                        <div class="small mt-2">                               
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-light bg-dark shadow-sm">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                 
                    <div class=" col-12 col-xl-7 px-xl-0">
                        <div class=" d-sm-block">
                            <h2 style="color: white" class="h5">Total User</h2>
                            {{-- <h2 class="h6">this Month </h2> --}}

                            <h3 style="color: white" class="mb-1">{{$count_of_users}}</h3>
                        </div>
                        <small style="color: white">All of the Users  <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> </small> 
                        <div class="small mt-2">                               
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-light bg-dark shadow-sm">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
              
                    <div class=" col-12 col-xl-7 px-xl-0">
                        <div class=" d-sm-block">
                            <h2 style="color: white" class="h5">Dective Users </h2>
                            {{-- <h2 class="h6">this Month </h2> --}}

                            <h3 style="color: white" class="mb-1">{{$deactivates}}</h3>
                        </div>
                        <small style="color: white">This Month  <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> </small> 
                        <div class="small mt-2">                               
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-light bg-dark shadow-sm">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                   
                    <div class=" col-12 col-xl-7 px-xl-0">
                        <div class=" d-sm-block">
                            <h2 style="color: white" class="h5">Collection (Current) </h2>
                       

                            <h3 style="color: white" class="mb-1">{{$transics}}</h3>
                        </div>
                        <small style="color: white">This Month  <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> </small> 
                        <div class="small mt-2">                               
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-light bg-dark shadow-sm">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                   
                    <div class=" col-12 col-xl-7 px-xl-0">
                        <div class=" d-sm-block">
                            <h2 style="color: white" class="h5">Active User (Prev) </h2>
                         

                            <h3 style="color: white" class="mb-1">{{$prev_month_user}}</h3>
                        </div>
                        <small style="color: white">This Month  <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> </small> 
                        <div class="small mt-2">                               
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-light bg-dark shadow-sm">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                 
                    <div class=" col-12 col-xl-7 px-xl-0">
                        <div class=" d-sm-block">
                            <h2 style="color: white" class="h5">Collection (Prev)</h2>
                          

                            <h3 style="color: white" class="mb-1">{{$adPrevMonth}}</h3>
                        </div>
                        <small style="color: white">This Month  <span class="icon icon-small"><span class="fas fa-globe-europe"></span></span> </small> 
                        <div class="small mt-2">                               
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  
</div>

@endsection

