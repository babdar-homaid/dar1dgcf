<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\verification;
use App\card;

use Illuminate\Support\Facades\Auth;
use PDF;
use Alkoumi\LaravelHijriDate\Hijri;
class StatementAdd extends Component
{
    public $Student_ID;
    public $Guidance;

    protected $rules = [
        'Student_ID' => 'required',
        'Guidance' => 'required',
    ];

    protected $messages = [
        'Student_ID.required' => 'حقل رقم البطاقة مطلوب.',
        'Guidance.required' => 'حقل  الجهة مطلوب.',


    ];
    public function render()
    {


        return view('livewire.statement-add');
    }

    public function add(){
        $this->validate();

        $card = card::where('Student_ID',$this->Student_ID)->first();
        if ( $card ) {
          $verification1 = new verification();
         $Hijri= Hijri::Date('j / m / Y'); // RETURN Hijri Date of [NOW] Without
        $verification1->date = $Hijri;
        $verification1->Student_ID =$card->Student_ID;
        $verification1->name = $card->Name;
        $verification1->Nationality =  $card->Nationality;
        $verification1->Status =  $card->Status;
        $verification1->Class = $card->Class;
        $verification1->Guidance = $this->Guidance;


         $verification1->save();
         $this->emit('postAdded');
         session()->flash('message', "تم إدخال تعريف للطالب $card->Name ");
        }
        else {
            session()->flash('message', 'تأكد من رقم البطاقة');
         }

    }
}
