<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\WithPagination;

use Livewire\Component;

class Bonus extends Component
{
    use WithPagination;
    public $search;
    public function render()
    {
        $items = Profile::query()
            ->search($this->search)
            ->paginate(9);
        return view('livewire.bonus', ['items' => $items]);
    }
}
