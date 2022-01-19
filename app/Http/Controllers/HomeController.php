<?php

namespace App\Http\Controllers;
use App\book;
use App\detail;
use App\User;
use App\exam;
use App\register;
use App\nationaltie;
use App\attachment;



use Illuminate\Http\Request;
use App\neww;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {




         $id_user=Auth::user()->id;
          $dropzone= attachment::where('user_id',$id_user)->get();







         $id=Auth::user()->id;


        // smss();

         $detail=detail::all()->count();
         $neww=neww::all()->count();
         $book=book::all()->count();
         $exams= exam::find(1);

         $Requestـstatus=Auth::user()->Requestـstatus;
        $Applicants= register::where([
        ['Requestـstatus', $Requestـstatus],
        ['hndl',">",1],
        ])->count();
        $Accepted= register::where([
        ['Requestـstatus', $Requestـstatus],
        ['hndl1',2],
        ])->count();
        $Rejected= register::where([
        ['Requestـstatus', $Requestـstatus],
        ['hndl1',3],
        ])->count();
        $bandar= register::where([
        ['Requestـstatus', $Requestـstatus],
        ['Concernedـemployee',1],
        ])->count();
        $yaser= register::where([
        ['Requestـstatus', $Requestـstatus],
        ['Concernedـemployee',35],
        ])->count();
        $mohmmad= register::where([
        ['Requestـstatus', $Requestـstatus],
        ['Concernedـemployee',36],
        ])->count();


        ///احصائية المشرف العام

        $Applicants1= register::where('hndl',">",1)->count();
        $Accepted1= register::where([
            ['hndl1',2],
            ])->count();
            $Rejected1= register::where([
            ['hndl1',3],
            ])->count();
            $bandar1= register::where([
            ['Concernedـemployee',1],
            ])->count();
            $yaser1= register::where([
            ['Concernedـemployee',35],
            ])->count();
            $mohmmad1= register::where([
            ['Concernedـemployee',36],
            ])->count();



            $al1= register::where([
            ['hndl1',2],['Requestـstatus','العالية'],['Stage','منتسب']
            ])->count();
            $al2= register::where([
            ['hndl1',2],['Requestـstatus','العالية'],['Stage','منتظم']
            ])->count();

            $ta1= register::where([
            ['hndl1',2],['Requestـstatus','الثانوية'],['Stage','منتسب']
            ])->count();
             $ta2= register::where([
            ['hndl1',2],['Requestـstatus','الثانوية'],['Stage','منتظم']
            ])->count();


            $mt1= register::where([
            ['hndl1',2],['Requestـstatus','المتوسطة'],['Stage','منتسب']
            ])->count();
            $mt2= register::where([
            ['hndl1',2],['Requestـstatus','المتوسطة'],['Stage','منتظم']
            ])->count();

            $form= register::where('user_id', Auth::user()->id)->first();

           $value= nationaltie::orderBy('id', 'asc')->get();



           $User = User::where('id', Auth::user()->id)->with('cardـrelationship')->first();



//dd($User->toArray());


   return view('home',['neww'=>$neww,
   'book'=>$book,
   'detail'=>$detail,
   'exams'=>$exams,
   'Applicants'=>$Applicants,
   'Accepted'=>$Accepted,
   'Rejected'=>$Rejected,
   'bandar'=>$bandar,
   'yaser'=>$yaser,
   'mohmmad'=>$mohmmad,
   'Applicants1'=>$Applicants1,
   'Accepted1'=>$Accepted1,
   'Rejected1'=>$Rejected1,
   'bandar1'=>$bandar1,
   'yaser1'=>$yaser1,
   'mohmmad1'=>$mohmmad1,
   'Requestـstatus'=>$Requestـstatus,
   'form'=>$form,
   'value'=>$value,
   'al1'=>$al1,
   'al2'=>$al2,
   'ta1'=>$ta1,
   'ta2'=>$ta2,
   'mt1'=>$mt1,
   'mt2'=>$mt2,
   'dropzone'=>$dropzone,
   'User'=>$User


   ]);




    }
    public function cod(Request $request)
    {


        // \QrCode::size(1000)
        //     ->backgroundColor(255,255,0)
        //     ->encoding('WINDOWS-1256')
        //     ->format('png')
        //     ->generate('mailto:ab@mkka.com', public_path('image/ss.png'));



    }

    public function Powersـofـusers(Request $request)
    {

         $users= user::where('cp',  2)
         ->orWhere('cp', 4)
         ->orWhere('cp', 1)
         ->orderBy('cp', 'desc')
         ->get();


       return view('auth.Powersـofـusers',[
        'users'=>$users]);




    }
    public function Powersـofـusers_post(Request $request)
    {
        $datd= user::where('id',$request->id)->first();

        if($request->admin=="عام"){
            $datd->cp=  2;
        }
        if($request->admin=="المتوسطة"){
            $datd->cp=  4;
            $datd->Requestـstatus="المتوسطة";

        } if($request->admin=="الثانوية"){
            $datd->Requestـstatus="الثانوية";
            $datd->cp=  4;

        } if($request->admin=="العالية"){
            $datd->cp=  4;
            $datd->Requestـstatus="العالية";


        }

        $datd->save();
        return redirect("Powersـofـusers")->with('status',"تم العمل بنجاح");;


    }
    public function edit(Request $request)
    {

 if ($request->exam=='on'){
     $exam=1;
 }
 else{
    $exam=2;
 }

   $datd= exam::where('id',1)
->update(
    ['Scales' => $request->optradio,'exam' => $exam]
);
return redirect("/home")->with('success',"تم العمل بنجاح");

        }

        public function index1()
        {


            $users = User::where('cp', 5)->with('cardـrelationship')->get();
            $ldate = date('H:i');
if($ldate == '21:01' or $ldate == '21:02' or $ldate == '21:03' or $ldate == '21:04'
or $ldate == '21:05' or $ldate == '21:06' or $ldate == '21:07'  ){ echo 'esgerd';}
            return view('home1',compact('users'));
        }

}
