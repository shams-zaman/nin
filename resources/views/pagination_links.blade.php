@if($paginator->hasPages())
<div class="card-footer px-3 border-0 d-flex align-items-center justify-content-between">
 <nav aria-label="Page navigation example">
     <ul class="pagination mb-0">
         @if ($paginator->onFirstPage())
         <li class="page-item">
            <a disabled wire:click="previousPage" class="page-link" href="#">Previous</a>
        </li>
        @else
        <li area-disabled="true" class="page-item">
            <a  wire:click="previousPage" class="page-link" href="#">Previous</a>
        </li>
         @endif
       @foreach ($elements as $element)
       @if (is_array($element))
       @foreach ($element as $page => $url)
       @if ($page == $paginator->currentPage())
       <li class="page-item active">
        <a wire:click="gotoPage({{ $page }})" class="page-link" href="#">{{ $page }}</a>
    </li>
       @else
       <li class="page-item ">
        <a wire:click="gotoPage({{ $page }})" class="page-link" href="#">{{ $page }}</a>
    </li>
       @endif
       @endforeach
  @endif
           
       {{-- <li class="page-item active">
        <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item active">
        <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">5</a>
    </li> --}}

       @endforeach
         
         @if ($paginator->hasMorePages())
         <li class="page-item">
             <a wire:click="nextPage" class="page-link" href="#">Next</a>
         </li>
         @else
         <li area-disabled="true" class="page-item">
            <a disabled wire:click=""  class="page-link" href="#">--</a>
        </li>
         @endif
     </ul>
 </nav>

 {{-- Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} out of {{ $items->total() }} items. --}}
</div>
@endif