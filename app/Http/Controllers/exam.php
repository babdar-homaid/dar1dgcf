<?php

namespace App\Http\Controllers;
use Illuminate\Routing\ResponseFactory;
use App\answer;
use App\verification;
use App\card;
use App\chapter_final;
use App\Chapter_one;
use App\question;
use App\register;
use App\special_question;
use App\User;
use App\archive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Alkoumi\LaravelHijriDate\Hijri;


class exam extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $User = User::where('id', Auth::user()->id)->with('cardـrelationship')->first();


        return view('exam.index', ['User' => $User]);
    }
    public function finall()
    {
        $User = User::where('id', Auth::user()->id)->with('cardـrelationship')->first();



        $collection = chapter_final::orderBy('Class_Item_Order', 'asc')->where('Student_Number', Auth::user()->card)
            ->get();

        foreach ($collection as $key => $value) {
        if ($value->Item_Name == 'السلوك' or $value->Item_Name == 'المواظبة') {

            } else {

                if ($value->Degree_Stage_2 < $value->Item_Low_Degree_1) {
                    echo "راسب";

                }

            }

        }
        return view('exam.Chapter_final', ['collection' => $collection,  'User' => $User]);
    }

    public function first()
    {

        $User = User::where('id', Auth::user()->id)->with('cardـrelationship')->first();

        $cardـstudent = card::where('Student_ID', Auth::user()->card)->first();

        $collection = Chapter_one::orderBy('Class_Item_Order', 'asc')->where('Student_Number', Auth::user()->card)
            ->where('Item_Name', '!=', 'السلوك')
            ->where('Item_Name', '!=', 'البحث')

            ->where('Item_Name', '!=', 'المواظبة')->get();

        return view('exam.Chapter_first', ['collection' => $collection, 'cardـstudent' => $cardـstudent, 'User' => $User]);
    }

    public function second()
    {
        $User = User::where('id', Auth::user()->id)->with('cardـrelationship')->first();
        $cardـstudent = card::where('Student_ID', Auth::user()->card)->first();
        $collection = Chapter_one::orderBy('Class_Item_Order', 'asc')->where('Student_Number', Auth::user()->card)
            ->get();
        foreach ($collection as $key => $value) {

            if ($value->Chapter_Degree_2 + $value->Chapter_Degree_1 < $value->Item_Low_Degree_2 or $value->Absence_Kind_Id == 8 or $value->Absence_Kind_Id == 9 or $value->Absence_Kind_Id_1 == 8 or $value->Absence_Kind_Id_1 == 9) {

                return view('exam.completion', ['Student_Number' => $value->Student_Number, 'Item_Low_Degree_2' => $value->Item_Low_Degree_1, 'User' => $User]);

            }

        }
        return view('exam.Chapter_second', ['collection' => $collection, 'cardـstudent' => $cardـstudent, 'User' => $User]);
    }

    public function show($id)
    {
        $value = register::where('hndl1', 2)->where('Requestـstatus', $id)

            ->get();
        return view('question.add', ['value' => $value, 'id' => $id]);
// {{$count[$item->name]}}
    }

    public function charge($id)
    {
        if (Auth::user() and Auth::user()->id == 1) {

            $User = register::where('hndl1', 2)->where('Requestـstatus', $id)

                ->get();
            foreach ($User as $key => $Users) {
                $variable = question::where('Requestـstatus', $Users->Requestـstatus)->get();
                $count2= special_question::where('user_id',$Users->id)->first();

                if($count2){}
                else{
                foreach ($variable as $key => $value) {

                    $datd = new special_question();
                    $datd->user_id = $Users->id;
                    $datd->name = $Users->name;
                    $datd->Requestـstatus = $Users->Requestـstatus;
                    $datd->trues = $value->trues;
                    $datd->question = $value->question;
                    $datd->answer1 = $value->answer1;
                    $datd->answer2 = $value->answer2;
                    $datd->answer3 = $value->answer3;
                    $datd->answer4 = $value->answer4;

                    $datd->save();
                }
            }

            }
            return redirect("question/add/$id")->with('success', "تم شحن الأسئلة ");

        }

    }

    public function answers_show()
    {
        $hndl1 = register::where('user_id', Auth::user()->id)->first()->hndl1;
        if ($hndl1 == 2) {

            $User = register::where('user_id', Auth::user()->id)->first()->id;

            $value = special_question::where('user_id', $User)
                ->where('cp', 1)
                ->first();
            $count = special_question::where('user_id', $User)
                ->where('cp', 1)
                ->count();

            return view('question.answers_show', ['value' => $value, 'count' => $count]);
        } else {
            abort(403, ' خطأ في الصفحة');

        }
    }

    public function answers_g($id, $trues, $final)
    {

        $User = register::where('user_id', Auth::user()->id)->first()->id;

        $value = special_question::where('user_id', $User)
            ->where('id', $id)
            ->first();

        if ($final == 1) {
            $answer = $value->answer1;
        }
        if ($final == 2) {
            $answer = $value->answer2;
        }
        if ($final == 3) {
            $answer = $value->answer3;
        }
        if ($final == 4) {
            $answer = $value->answer4;
        }
        $datd = new answer();
        $datd->question_id = $id;
        $datd->user_id = Auth::user()->id;
        $datd->name = Auth::user()->name;
        $datd->cp = 1;
        $datd->variable = 1;
        $datd->trues = $trues;
        $datd->answer = $answer;
        $datd->card_id = $User;

        $datd->question = $value->question;

        if ($trues == $final) {
            $datd->final = "صح";
        } else {
            $datd->final = "خطأ";

        }

        $datd->save();

        $value = special_question::where('user_id', $User)
            ->where('id', $id)
            ->first();
        $value->cp = 3;
        $value->save();
        return redirect("answer")->with('success', "تم إستلام الجواب");

    }

    function final ($id) {
        $value = answer::where('card_id', $id)->get();
        $User = register::where('id', $id)
            ->get();
        $data = [
            'values' => $value,
            'User' => $User,

        ];

        $pdf = PDF::loadView('question.final', $data);
        return $pdf->stream("تعريف.pdf");

    }

    public function add_card(Request $request)
    {

        $Student_ID = card::where('Student_ID', $request->card)->first() ?? "";
        if ($Student_ID == false) {
            return redirect("home")->with('warning', "خطأ في رقم البطاقة");

        } else {
            if ($Student_ID->Student_ID > 1) {

                $datd = User::where('id', Auth::user()->id)
                    ->update(
                        [
                            'Class' => $Student_ID->Class,
                            'name' => $Student_ID->Name,
                            'Status' => $Student_ID->Status,
                            'card' => $Student_ID->Student_ID,

                        ]
                    );
                return redirect("home")->with('success', "تم ربط حسابك برقم البطاقة");

            } else {
                echo "خطا";
            }
        }
    }


    public function live(Request $request)
    {
        $User = User::where('id', Auth::user()->id)->with('cardـrelationship')->first();

        return view('live.live', ['User' => $User]);


    }

    public function statement_admin(Request $request)
    {



         $card = card::where('Student_ID',$request->Student_ID)->first();

      if ( $card ) {

        $verification1 = new verification();
       $Hijri= Hijri::Date('j / m / Y'); // RETURN Hijri Date of [NOW] Without
      $verification1->date = $Hijri;
      $verification1->Student_ID =$card->Student_ID;
      $verification1->name = $card->Name;
      $verification1->Nationality =  $card->Nationality;
      $verification1->Status =  $card->Status;
      $verification1->Class = $card->Class;
      $verification1->Guidance = $request->name;


       $verification1->save();
       return redirect("statement_admin")->with('success', "تم إضافة الإفادة");

 }

 else {
    return redirect("statement_admin")->with('success', "لا يوجد طالب بهذا الرقم");
 }
}
    public function statement_get_admin()
    {

         $data = verification::all();

       return view('exam.statement_admin', ['data' => $data]);

    }



    public function statement(Request $request)
    {



        $card = card::where('Student_ID',Auth::user()->card)->first();


        $verification1 = new verification();
       $Hijri= Hijri::Date('j / m / Y'); // RETURN Hijri Date of [NOW] Without
      $verification1->date = $Hijri;
      $verification1->Student_ID =Auth::user()->card;
      $verification1->name = $card->Name;
      $verification1->Nationality =  $card->Nationality;
      $verification1->Status =  $card->Status;
      $verification1->Class = $card->Class;
      $verification1->Guidance = $request->name;


       $verification1->save();
       return redirect("exam/statement")->with('success', "تم إضافة الإفادة");

    }
    public function statement_get()
    {

         $data = verification::where('Student_ID',Auth::user()->card)->get();

       return view('exam.statement', ['data' => $data]);

    }
    public function General_definition($id)
    {

        $card = verification::where('id',$id)->first();

            $data = [
                'date'=>$card->date,
                'Nationality'=>$card->Nationality,
                'Class'     => $card->Class,
                'name'     => $card->name,
                'Status'     => $card->Status,
                'id'     => $id,
                'Guidance'     => $card->Guidance,

            ];

            $pdf = PDF::loadView('exam.General_definition', $data);
            return $pdf->stream("تعريف.pdf");

     //  return view('definition', ['values' => $value, 'id' => $id]);

    }



    public function getpost()
    {

          $data = verification::all();
   return response()->json(['status'=>'success','val' => $data]);


    }

    public function addpost(Request $request)
    {

        if($request->name){

 $card = new verification();
 $val = card::where('Student_ID', Auth::user()->card)->first();
 $Hijri= Hijri::Date('j / m / Y'); // RETURN Hijri Date of [NOW] Without

 $card->name = $val->Name;
 $card->Guidance = $val->Class;
 $card->Nationality =  $val->Nationality;
 $card->Guidance = $request->name;
 $card->date = $Hijri;
$card->Class = $val->Class;
$card->Student_ID = $val->Student_ID;
$card->Status = $val->Status;




       $card->save();

        }
        return response()->json(['status'=>'success','val' => $card]);

    }

    public function dlpost($id)
    {

        verification::destroy($id);

    }


    public function getcard($id)
    {

          $data = card::where('Student_ID',$id)->first();


   return response()->json(['status'=>'success','val' => $data]);


    }
    public function edit(Request $request)
    {

          $data = card::where('id',$request->id)->first();
          $data->Name = $request->Name;
          $data->Class = $request->Class;

           $data->save();
           return response()->json(['status'=>'success']);


    }
    public function del($id)
    {

        card::destroy($id);


    }

    public function editOne($id)
    {

      return card::where('Student_ID',$id)->get();

    }



    public function finallـStudent($Student_Number)
    {
        $User = User::where('id', Auth::user()->id)->with('cardـrelationship')->first();



        $collection = chapter_final::orderBy('Class_Item_Order', 'asc')->where('Student_Number', $Student_Number)
            ->get();

        foreach ($collection as $key => $value) {
        if ($value->Item_Name == 'السلوك' or $value->Item_Name == 'المواظبة') {

            } else {

                if ($value->Degree_Stage_2 < $value->Item_Low_Degree_1) {
                    echo "راسب";

                }

            }

        }
        return view('exam.Chapter_final', ['collection' => $collection,  'User' => $User]);
    }

    public function firstـStudent($Student_Number)
    {

        $User = card::where('Student_ID', $Student_Number)->first();

        $cardـstudent = card::where('Student_ID', $Student_Number)->first();

         $collection = Chapter_one::orderBy('Class_Item_Order', 'asc')->where('Student_Number', $Student_Number)
            ->where('Item_Name', '!=', 'السلوك')
            ->where('Item_Name', '!=', 'البحث')

            ->where('Item_Name', '!=', 'المواظبة')->get();

        return view('exam.Chapter_first_Student', ['collection' => $collection, 'cardـstudent' => $cardـstudent, 'User' => $User]);
    }

    public function secondـStudent($Student_Number)
    {
        $User = card::where('Student_ID', $Student_Number)->first();
        $cardـstudent = card::where('Student_ID', $Student_Number)->first();
        $collection = Chapter_one::orderBy('Class_Item_Order', 'asc')->where('Student_Number', $Student_Number)
            ->get();
        foreach ($collection as $key => $value) {

            if ($value->Chapter_Degree_2 + $value->Chapter_Degree_1 < $value->Item_Low_Degree_2 or $value->Absence_Kind_Id == 8 or $value->Absence_Kind_Id == 9 or $value->Absence_Kind_Id_1 == 8 or $value->Absence_Kind_Id_1 == 9) {

                return view('exam.completion_Student', ['Student_Number' => $value->Student_Number, 'Item_Low_Degree_2' => $value->Item_Low_Degree_1, 'User' => $User]);

            }

        }
        return view('exam.Chapter_second_Student', ['collection' => $collection, 'cardـstudent' => $cardـstudent, 'User' => $User]);
    }

    public function searchـStudent(Request $request)
    {

      $User = card::where('Student_ID', $request->Student_Number)->first();
    return view('exam.search_Student', [ 'User' => $User]);

    }


    public function aaa()
    {

        $User = User::where('id', 3)->with('post')->first();
return $User;

}


}
