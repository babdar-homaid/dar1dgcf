<?php

namespace App\Http\Livewire;
use App\question;


use Livewire\Component;

class ShowQuestion extends Component
{

    public $id1;
    public $dl;
    public $question;
    public $answer1;
    public $answer3;
    public $answer4;
    public $answer2;
    public $trues;
    public $id_question;


    public function mount($id )
    {


        $this->id1=$id;

    }
    protected $listeners = ['postAdded' => 'render'];

    public function render()
    {

        $value= question::where('Requestـstatus', $this->id1)->get();


        return view('question.show-question',['value'=>$value]);
    }
    public function dl(question $item){

session()->flash('message', "تم حذف السؤوال $item->question");

question::destroy($item->id);

    }

    public function up(question $item){

        $value= question::find($item->id);

        $this->question =$value->question;
        $this-> answer1=$value->answer1;
        $this-> answer3=$value->answer3;
        $this-> answer4=$value->answer4;
        $this-> answer2=$value->answer2;
        $this-> trues=$value->trues;
        $this-> id_question=$value->id;


            }

            public function up2(question $item){





                $datd = question::where('id', $this->id_question)
                ->update(
                    [
                        'question' => $this->question,
                        'answer1' => $this->answer1,
                        'answer2' => $this->answer2,
                        'answer3' => $this->answer3,
                        'answer4' => $this->answer4,
                        'trues' => $this->trues


                    ]);
                    session()->flash('message', "تم تعديل السؤال ");


                    }


}
