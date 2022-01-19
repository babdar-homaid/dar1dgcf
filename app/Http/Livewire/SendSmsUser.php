<?php

namespace App\Http\Livewire;
use App\register;

use Livewire\Component;

use App\Mobile_message;
use Illuminate\Support\Facades\Auth;

class SendSmsUser extends Component
{

    public $data;

    public $name;
    public $text;
    public $Mobile_number;

    public $id1;
    public function mount($id)
    {

        $this->id1=$id;
    }
    public function render()
    {

        $val = Mobile_message::where('user_id', $this->id1)->get();

        $value = register::where('id', $this->id1)->first();
        return view('livewire.send-sms-user',['value'=>$value,'val' => $val]);
    }

    public function sms(register $item)
{
  $this->Mobile_number= $item->Mobile_number;
  $this->text ="المتقدم $item->name";

}
public function send(register $item)
{
    $message="$this->text";
    $MobileNo1 =$this->Mobile_number;
  sms($MobileNo1,$message);

   $Mobile_messages = new Mobile_message();
   $Mobile_messages->user_id = $item->id;
   $Mobile_messages->name = $item->name;
   $Mobile_messages->admin = Auth::user()->name;
   $Mobile_messages->text_u = $this->text;

   $Mobile_messages->save();
   session()->flash('message', "تم إرسال الرسالة بنحاج للطالب $item->name ");

}
}
