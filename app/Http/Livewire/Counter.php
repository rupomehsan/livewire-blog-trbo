<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $result=0;

    public function increament(){
        $this->result++;
    }
    public function decreament(){
        if($this->result>0){
            $this->result--;
        }
       
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
