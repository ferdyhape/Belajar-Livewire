<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowIndex extends Component
{
    public $oldInput;
    public $newInput;
    public $result;

    public function plus()
    {
        $this->result = $this->oldInput + $this->newInput;
        $this->newInput = 0;
        $this->oldInput = 0;
    }
    public function min()
    {
        $this->result = $this->oldInput - $this->newInput;
        $this->newInput = 0;
        $this->oldInput = 0;
    }

    public function multiply()
    {
        $this->result = $this->oldInput * $this->newInput;
        $this->newInput = 0;
        $this->oldInput = 0;
    }
    public function divide()
    {
        $this->result = $this->oldInput / $this->newInput;
        $this->newInput = 0;
        $this->oldInput = 0;
    }
    public function render()
    {
        return view('livewire.show-index');
    }
}
