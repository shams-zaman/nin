<div>
    <div class="table-settings mb-1">
        <div class="row align-items-center justify-content-between">
            <div class="col col-md-6 col-lg-3 offset-lg-3 col-xl-4">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon2"><span class="fas fa-search"></span></span>
                    <input wire:model.debounce.300ms="search" type="text" class="form-control" id="exampleInputIconLeft" placeholder="Search Users" aria-label="Search" aria-describedby="basic-addon2">
                </div>
            </div>
            {{-- <div class="col-4 col-md-2 col-xl-1 pl-md-0 text-right">
                <div class="btn-group">
                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="icon icon-sm icon-gray">
                            <span class="fas fa-cog"></span>
                        </span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                        <span class="dropdown-item font-weight-bold text-dark">Show</span>
                        <a class="dropdown-item d-flex font-weight-bold" href="#">10 <span class="icon icon-small ml-auto"><span class="fas fa-check"></span></span></a>
                        <a class="dropdown-item font-weight-bold" href="#">20</a>
                        <a class="dropdown-item font-weight-bold" href="#">30</a>
                    </div>
                </div>
            </div> --}}
        </div>
       </div>
       <div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>						
                    <th>Rank</th>
                    <th>Month</th>
                    <th>Wallet</th>
                    {{-- <th></th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Pv</th>
                        <th>D_Ref</th>
                        <th>Rank</th>--}}

                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>
                <!-- Item -->
                @foreach ($items as $item)
                    
               
                <tr>
                    <td>
                        <a href="../invoice.html" class="font-weight-bold">
                      {{ $item->id }}
                        </a>
                    </td>
                    <td>
                        <span class="font-weight-normal">         {{ $item->username }}</span>
                    </td>
                    <td><span class="font-weight-normal">         {{ $item->desig }}</span></td>                        
                    <td><span class="font-weight-bold">         {{ $item->wallet }}</span></td>
                    {{-- <td><span class="font-weight-normal">         {{ $item->pv }}</span></td>
                    <td><span class="font-weight-normal">         {{ $item->dcount }}</span></td>
                    <td><span class="font-weight-normal">         {{ $item->desig }}</span></td> --}}


                    {{-- <td><span class="font-weight-bold text-warning"></span>         {{ $user->id }}</td> --}}
                    {{-- <td>
                        <livewire:toggle-button
                        :model="$item"
                        field="status"
                        key="{{ $item->id }}"/>
                    </td> --}}

                        {{-- ==========Dont Uncomment============ --}}
                        {{-- <div class="form-check form-switch">
                            <input wire:model="hasStock"   class="form-check-input" type="checkbox"  name="toggle" id="status">
                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                        </div> --}}
                        {{-- ==========Dont Uncomment End============ --}}

                 
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon icon-sm">
                                    <span class="fas fa-ellipsis-h icon-dark"></span>
                                </span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../invoice.html"><span class="fas fa-eye mr-2"></span>View Details</a>
                                <a class="dropdown-item" href="#"><span class="fas fa-edit mr-2"></span>Edit</a>
                                <a class="dropdown-item text-danger" href="#"><span class="fas fa-trash-alt mr-2"></span>Remove</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                <!-- Item -->
               
                <!-- Item -->
                                            
            </tbody>
        </table>
     
        <div>
            {{-- <p>
                Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} out of {{ $items->total() }} items.
            </p> --}}
            <p class="col-lg-6 col-md-6">
                <div class="font-weight-bold small offset-lg-10">Showing <b>{{ $items->firstItem() }}</b> to <b>{{ $items->lastItem() }} </b> out of <b>{{ $items->total() }} </b> entries</div>
                {{ $items->links('pagination_links') }}
               
            </p>
          
        </div>
     
       </div>
</div>

