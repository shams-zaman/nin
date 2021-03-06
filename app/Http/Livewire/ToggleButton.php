<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;

class ToggleButton extends Component
{

    public Model $model;
    public string $field;
    public bool $hasStatus;

    public function mount()
    {
        $this->hasStatus = (bool) $this->model->getAttribute($this->field);
    }




    public function render()
    {
        return view('livewire.toggle-button');
    }
    public function updating($field, $value)
    {
        $this->model->setAttribute($this->field, $value)->save();
    }
}
