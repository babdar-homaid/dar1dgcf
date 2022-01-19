<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\question;

class UpQuestion extends Component
{
    public $id1;
    public $dl;

    public function mount($id)
    {

        $this->id1=$id;
    }
    protected $listeners = ['postAdded' => 'render'];

    public function render()
    {

        $value= question::where('Requestـstatus', $this->id1)->get();

        return view('livewire.up-question',['value1'=>$value]);
    }
}
