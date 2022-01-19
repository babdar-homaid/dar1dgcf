<?php

namespace App\Http\Livewire;
use App\register;

use Livewire\Component;

use App\Mobile_message;
use Illuminate\Support\Facades\Auth;

class SendSms extends Component
{





    public $data;

    public $name;
    public $user_id;

    public $Mobile_number;


    public function mount($id)
    {
      $this->data  = register::find($id);
      $this->Mobile_number = $this->data->Mobile_number;
      $this->name = $this->data->name;
      $this->user_id = $this->data->id;

    }


    public function render()
    {


        return view('livewire.send-sms' );


    }

    public function add()
    {

        $message=" الطالب المتقدم $this->name السلام عليكم ورحمة الله وبركاته فقد لاحظنا تسجيلكم في موقع دار الحديث الخيرية وقمتم بتعبئة الإستمارة ولم يتم رفع ملف الوثائق المطلوبة لذلك نذكركم بضرورة رفع الوثائق قبل انتهاء موعد التقديم وإلا سيتم رفض ملفكم ولن يسمح لكم بدخول اختبار القبول
        ";
        $MobileNo1 =$this->Mobile_number;
       sms($MobileNo1, $message);
       $Mobile_messages = new Mobile_message();
       $Mobile_messages->user_id = $this->user_id;
       $Mobile_messages->name = $this->name;
       $Mobile_messages->admin = Auth::user()->name;

       $Mobile_messages->save();

       $this->emit('postAdded');
       session()->flash('message', "تم إرسال الرسالة بنجاح");

    }
}
