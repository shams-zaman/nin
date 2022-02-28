<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Model;

class Table extends Component
{
    use WithPagination;
    public $search;



    public function render()
    {
        $items = Profile::query()
            // ->where('id', '>', 4)
            ->search($this->search)
            ->paginate(10);
        return view('livewire.table', ['items' => $items]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
}
