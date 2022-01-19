<?php

namespace App\Http\Livewire;
use App\answer;
use App\register;
use App\special_question;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ShowAnswer extends Component
{

       public $question;
    public $answer1;
    public $answer3;
    public $answer4;
    public $answer2;
    public $trues;
    public $id_question;
    public function render()
    {

        $hndl = register::where('user_id', Auth::user()->id)->first()->hndl1;
        if ($hndl == 2) {

            $User = register::where('user_id', Auth::user()->id)->first()->id;

            $value = special_question::where('user_id', $User)

                ->get();
            $count = special_question::where('user_id', $User)
                ->where('cp', 1)
                ->count();

        return view('livewire.show-answer', ['value' => $value, 'count' => $count]);
    }

    }


    public function answer1(special_question $item){
        $User = register::where('user_id', Auth::user()->id)->first()->id;
        $datd = new answer();
        $datd->question_id = $item->id;
        $datd->user_id = Auth::user()->id;
        $datd->name = Auth::user()->name;
        $datd->cp = 1;
        $datd->variable = 1;
        $datd->trues = $item->trues;
        $datd->answer = $item->answer1;
        $datd->card_id = $User;
        $datd->question = $item->question;
        if ($item->trues == 1) {
            $datd->final = "صح";
        } else {
            $datd->final = "خطأ";

        }
        $datd->save();

        $value = special_question::where('user_id', $User)
        ->where('id', $item->id)
        ->first();
    $value->cp = 3;
    $value->save();


    }
    public function answer2(special_question $item){
        $User = register::where('user_id', Auth::user()->id)->first()->id;
        $datd = new answer();
        $datd->question_id = $item->id;
        $datd->user_id = Auth::user()->id;
        $datd->name = Auth::user()->name;
        $datd->cp = 1;
        $datd->variable = 1;
        $datd->trues = $item->trues;
        $datd->answer = $item->answer2;
        $datd->card_id = $User;
        $datd->question = $item->question;
        if ($item->trues == 2) {
            $datd->final = "صح";
        } else {
            $datd->final = "خطأ";

        }
        $datd->save();

        $value = special_question::where('user_id', $User)
        ->where('id', $item->id)
        ->first();
    $value->cp = 3;
    $value->save();


    }  public function answer3(special_question $item){
        $User = register::where('user_id', Auth::user()->id)->first()->id;
        $datd = new answer();
        $datd->question_id = $item->id;
        $datd->user_id = Auth::user()->id;
        $datd->name = Auth::user()->name;
        $datd->cp = 1;
        $datd->variable = 1;
        $datd->trues = $item->trues;
        $datd->answer = $item->answer3;
        $datd->card_id = $User;
        $datd->question = $item->question;
        if ($item->trues == 3) {
            $datd->final = "صح";
        } else {
            $datd->final = "خطأ";

        }
        $datd->save();

        $value = special_question::where('user_id', $User)
        ->where('id', $item->id)
        ->first();
    $value->cp = 3;
    $value->save();


    }  public function answer4(special_question $item){
        $User = register::where('user_id', Auth::user()->id)->first()->id;
        $datd = new answer();
        $datd->question_id = $item->id;
        $datd->user_id = Auth::user()->id;
        $datd->name = Auth::user()->name;
        $datd->cp = 1;
        $datd->variable = 1;
        $datd->trues = $item->trues;
        $datd->answer = $item->answer4;
        $datd->card_id = $User;
        $datd->question = $item->question;
        if ($item->trues == 4) {
            $datd->final = "صح";
        } else {
            $datd->final = "خطأ";

        }
        $datd->save();

        $value = special_question::where('user_id', $User)
        ->where('id', $item->id)
        ->first();
    $value->cp = 3;
    $value->save();


    }

    public function up(special_question $item){

     //   $value= special_question::find($item->id);





$this-> answer1=$item->answer1;
$this-> answer2=$item->answer2;
$this-> answer3=$item->answer4;
$this-> answer4=$item->answer4;


            }
}
