<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $names = ['Jelly' , 'Mosaad' ];
    public $loud = false;
    public $greeting = 'Hello ';


    public $password = '';
    public $password2 = '';
    public $email = '';



    public function resetname(){
        $this->name='Mosaaaad';
    }



    public function render()
    {
        return view('livewire.test');
    }
}
