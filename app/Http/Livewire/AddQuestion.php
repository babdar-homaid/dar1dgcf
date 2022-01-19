<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\question;
use Illuminate\Support\Facades\Auth;

class AddQuestion extends Component
{
    public $question;
    public $answer1;
    public $answer2;
    public $answer3;
    public $answer4;
    public $trues;
    public $number;
    public $id1;
    public $sub;

    public function mount($id)
    {


        $this->number=$id;

    }
    protected $rules = [
        'question' => 'required',
        'answer1' => 'required',
        'answer2' => 'required',
        'answer3' => 'required',
        'answer4' => 'required',
        'answer4' => 'required',
        'trues' => 'required',


    ];
    protected $messages = [
        'question.required' => 'حقل السؤال مطلوب.',
        'answer1.required' => 'حقل الجواب الأول مطلوب.',
        'answer2.required' => 'حقل الجواب الثاني مطلوب.',
        'answer3.required' => 'حقل الجواب الثالث مطلوب.',
        'answer4.required' => 'حقل الجواب الرابع مطلوب.',
        'trues.required' => 'حقل الجواب  مطلوب.',


    ];

    public function render()
    {

        $count= question::all()
        ->count();

        return view('question.add-question',['count'=>$count]);
    }

    public function add(){
        $this->validate();
        $datd = new question();
             $datd->user_id = Auth::user()->id;
             $datd->question = $this->question;
             $datd->answer1 = $this->answer1;
             $datd->answer2 = $this->answer2;
             $datd->answer3 = $this->answer3;
             $datd->answer4 = $this->answer4;
             $datd->Requestـstatus = $this->number;
             $datd->trues = $this->trues;


            $datd->save();
            $this->emit('postAdded');



    }

}
