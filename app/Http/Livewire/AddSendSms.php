<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mobile_message;

class AddSendSms extends Component
{
    protected $listeners = ['postAdded' => 'render'];

    public $id1;
    public function mount($id)
    {

        $this->id1=$id;
    }


    public function render()
    {

        $data = Mobile_message::where('user_id', $this->id1)->get();

        return view('livewire.add-send-sms',['data' =>  $data,'id'=> $this->id1]);
    }


}
