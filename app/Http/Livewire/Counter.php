<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    // public $test = 200;
    public $count = 0;

    public function increment(){
        $this->count++;
        // $this->count = $this->count +1;
    }

    public function decrement(){
        $this->count--;
        // $this->count = $this->count -1;
    }

    public function render()
    {
        return view('livewire.counter');
        // return view('livewire.counter',['counter'=>$this->test]);
    }
}
