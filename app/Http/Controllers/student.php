<?php

namespace App\Http\Controllers;
use App\verification;
use App\attachment;
use App\nationaltie;
use App\register;
use App\card;
use Alkoumi\LaravelHijriDate\Hijri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Mail;
use PDF;

class student extends Controller
{
    // $datd = register::where('user_id', 288)->first();
    // echo 1441-$datd->BirthDay_Year;
    public function New_student_information($id)
    {
        $value = register::find($id);

        $Nationaltys = nationaltie::where('Nationalty_Id', $value->Nationality)->first();
        if ($Nationaltys) {
            $Nationalty = $Nationaltys->Nationalty_Name;
        } else {
            $Nationalty = "";
        }
        $attachment = attachment::where('user_id', $value->user_id)->get();

        return view('register.New_student_information', ['value' => $value, 'Nationalty' => $Nationalty, 'attachment' => $attachment]);

    }
    public function New_student_information_tl($id)
    {
        $value = register::find($id);

        $Nationaltys = nationaltie::where('Nationalty_Id', $value->Nationality)->first();
        if ($Nationaltys) {
            $Nationalty = $Nationaltys->Nationalty_Name;
        } else {
            $Nationalty = "";
        }
        $attachment = attachment::where('user_id', $value->user_id)->get();

        return view('register.New_student_information_tl', ['value' => $value, 'Nationalty' => $Nationalty, 'attachment' => $attachment]);

    }

    public function New_student_information_post(Request $request)
    {

        $id = $request->id;
        $name = $request->name;


        if ($request->hndl1 == 6) {

            $message = "المتقدم $name نفيدكم بان طلاب دار الفائزين لا يتم قبولهم عن طريق موقع دار الحديث إنما يتم ذلك عن طريق تسليم الملف لشؤون الطلاب يدويا دون حاجة الطالب لدخول اختبار القبول ،مع مراعاة إحضار ملف علاقي أبيض وبه جميع الطلبات المنصوص عليها في شروط القبول الخاصة بالدار ";
            $MobileNo1 = preg_replace('/^0/', '966', "$request->Mobile_number");
            sms($MobileNo1, $message);

            $datd = register::where('id', $id)->first();
            $myFile = "upload_registration/$request->user_id.pdf";
            File::delete($myFile);


            $flight = register::find($id);

            $flight->delete();

            return redirect("home")->with('success', "تم العمل بنجاح ");
        }
        if ($request->hndl1 == 5) {
            // $message="المتقدم $name الرجاء اعادة تسجيل بياناتك مرة أخرى في موقع دار الحديث الخيرية";
            // $MobileNo1 = preg_replace('/^0/', '966', "$request->Mobile_number");
            // sms($MobileNo1,$message);
            $datd = register::where('id', $id)->first();
            $datd->attachopn = 2;
            $datd->hndl1 = 1;
            $datd->save();
            return redirect("New_student_information/$id")->with('success', "تم  فتح المجال بنجاح");
        }

        if ($request->hndl1 == 4) {

            $message = "المتقدم $name الرجاء اعادة تسجيل بياناتك مرة أخرى في موقع دار الحديث الخيرية";
            $MobileNo1 = preg_replace('/^0/', '966', "$request->Mobile_number");
            sms($MobileNo1, $message);

            $datd = register::where('id', $id)->first();
            $myFile = "upload_registration/$request->user_id.pdf";
            File::delete($myFile);

            // $datd->hndl=  5;
            // $datd->hndl1=  1;

            // $datd->Concernedـemployee=  Auth::user()->id;
            // $datd->hndl1=  $request->hndl1;
            // $datd->save();
            $flight = register::find($id);

            $flight->delete();

            return redirect("home")->with('success', "تم حذف الإستمارة بنجاح");
        } else {
            $note = "$request->err1 $request->err2 $request->err3
        $request->err4 $request->err5 $request->err6 $request->err7 $request->err8 $request->err9 $request->err10";

            $datd = register::where('id', $id)->first();
            $datd->note = $note;
            $datd->hndl1 = $request->hndl1;
            $datd->Concernedـemployee = Auth::user()->id;
            $datd->save();

            if ($request->hndl1 == 2) {
$message = "المتقدم $name
تم ترشيحكم لدخول اختبار القبول في دار الحديث الخيرية والذي سيكون يوم الثلاثاء
الموافق ١٦ محرم ١٤٤٣هـ الساعة السابعة صباحًا بإذن الله تعالى
كما يمكنكم تسجيل الدخول إلى حسابكم في موقع دار الحديث لمعرفة المواد المقررة في دخول الاختبار
";
                $MobileNo1 = preg_replace('/^0/', '966', "$request->Mobile_number");
                sms($MobileNo1, $message);

                return redirect("New_student_information/$id")->with('success', "تم قبول الملف  بنجاح");

            }

            if ($request->hndl1 == 3) {
$message = "المتقدم $name تم رفض ملفك في دار الحديث الخيرية والسبب $note .ولتصحيح الوضع وإعادة رفع الوثائق من جديد الرجاء تسجيل دخولكم على الحساب مرة أخرى";
                $MobileNo1 = preg_replace('/^0/', '966', "$request->Mobile_number");
                sms($MobileNo1, $message);

                //  Mail::send('register.mail', ['user' => $name], function ($m) use ($name) {
                //     $m->from('hello@app.com', 'رسالة تلقائية');

                //     $m->to(Auth::user()->email,Auth::user()->name)->subject('Your Reminder!');
                // });

                return redirect("New_student_information/$id")->with('success', "تم رفض الملف بنجاح");

            }

        }
    }
public function addok($id,$name){
    $value = register::orderBy('Student_Number', 'desc')->where('hndl1', 5)->first();


    $datd = register::find($id);
    $datd ->hndl1= 5;
   $datd ->Student_Number= $value->Student_Number+1;
    $datd->save();


     return redirect("new_students/1/$name/2")->with('msg', "تم التسجيل برقم الهوية مسبقا");

}
    public function new_students(Request $request, $id, $name, $Details)
    {

        if ($id == "1" and $name == "الجميع" and $Details == '1') {
            $value = register::where('hndl', ">", 1)->orderBy('updated_at', 'desc')->latest()->paginate(50);

        }

        if ($id == "1" and $name == "المتوسطة" and $Details == '1') {
            $value = register::orderBy('id', 'desc')->where([
                ['Requestـstatus', $name],
                ['hndl1', 1],
            ])->latest()->paginate(50);
        }

        if ($id == "1" and $name == "المتوسطة" and $Details == '2') {
            $value = register::orderBy('id', 'desc')->where([
                ['Requestـstatus', $name],
                ['hndl1', 2],
            ])->latest()->paginate(50);
        }

        if ($id == "1" and $name == "المتوسطة" and $Details == '3') {
            $value = register::orderBy('id', 'desc')->where([
                ['Requestـstatus', $name],
                ['hndl1', 3],
            ])->latest()->paginate(50);
        }
        if ($id == "1" and $name == "المتوسطة" and $Details == '5') {
            $value = register::orderBy('id', 'desc')->where([
                ['Requestـstatus', $name],
                ['hndl1', 5],
            ])->latest()->paginate(50);
        }

        if ($id == "1" and $name == "الثانوية" and $Details == '1') {
            $value = register::orderBy('id', 'desc')->where([
                ['Requestـstatus', $name],
                ['hndl1', 1],
            ])->latest()->paginate(50);
        }

        if ($id == "1" and $name == "الثانوية" and $Details == '2') {
            $value = register::orderBy('id', 'desc')->where([
                ['Requestـstatus', $name],
                ['hndl1', 2],
            ])->latest()->paginate(50);
        }

        if ($id == "1" and $name == "الثانوية" and $Details == '3') {
            $value = register::orderBy('id', 'desc')->where([
                ['Requestـstatus', $name],
                ['hndl1', 3],
            ])->latest()->paginate(50);
        }

        if ($id == "1" and $name == "الثانوية" and $Details == '5') {
            $value = register::orderBy('id', 'desc')->where([
                ['Requestـstatus', $name],
                ['hndl1', 5],
            ])->latest()->paginate(50);
        }

        if ($id == "1" and $name == "العالية" and $Details == '1') {
            $value = register::orderBy('id', 'desc')->where([
                ['Requestـstatus', $name],
                ['hndl1', 1],
            ])->latest()->paginate(50);
        }

        if ($id == "1" and $name == "العالية" and $Details == '2') {
            $value = register::orderBy('id', 'desc')->where([
                ['Requestـstatus', $name],
                ['hndl1', 2],
            ])->latest()->paginate(50);
        }

        if ($id == "1" and $name == "العالية" and $Details == '3') {
            $value = register::orderBy('id', 'desc')->where([
                ['Requestـstatus', $name],
                ['hndl1', 3],
            ])->latest()->paginate(50);
        }
        if ($id == "1" and $name == "العالية" and $Details == '5') {
            $value = register::orderBy('id', 'desc')->where([
                ['Requestـstatus', $name],
                ['hndl1', 5],
            ])->latest()->paginate(50);
        }
        return view('register.new_students', ['value' => $value, 'id' => $name]);

    }

    public function add(Request $request)
    {

        // $user_id=  $request->user_id;
        //   $discard= register::whereNotIn('user_id', [$user_id])
        //  ->get();

        $mohmmad = register::whereNotIn('user_id', [$request->user_id])
            ->where('IdentificationـNumber', $request->IdentificationـNumber)

            ->count();

        if ($mohmmad > 0) {
            return redirect("home")->with('msg', "تم التسجيل برقم الهوية مسبقا");

        }
        if ($mohmmad == 0) {

            $user_id = $request->user_id;
            $datd = register::where('user_id', $user_id)->first();
            $datd->hndl = 2;
            $datd->Requestـstatus = $request->Requestـstatus;
            $datd->Stage = $request->Stage;
            $datd->name = $request->name;
            $datd->Nationality = $request->Nationality;
            $datd->DateـofـBirth = $request->DateـofـBirth;
            $datd->placeـofـbirth = $request->placeـofـbirth;
            $datd->IdentificationـNumber = $request->IdentificationـNumber;
            $datd->Itsـhistory = $request->Itsـhistory;
            $datd->Itsـsource = $request->Itsـsource;
            $datd->Occupation = $request->Occupation;
            $datd->Certificate = $request->Certificate;
            $datd->Donor = $request->Donor;
            $datd->Dateـofـtheـcertificate = $request->Dateـofـtheـcertificate;
            $datd->Appreciation = $request->Appreciation;
            $datd->Mobile_number = $request->Mobile_number;
            $datd->Guardian = $request->Guardian;
            $datd->Guardian_Mobile = $request->Guardian_Mobile;
            $datd->Student_address = $request->Student_address;
            $datd->mzki1 = $request->mzki1;
            $datd->Currency1 = $request->Currency1;
            $datd->mzki2 = $request->mzki2;
            $datd->Currency2 = $request->Currency2;
            $datd->BirthDay_Year = $request->BirthDay_Year;
            $datd->BirthDay_Month = $request->BirthDay_Month;
            $datd->BirthDay_Day = $request->BirthDay_Day;
            $datd->Personality_End_Day = $request->Personality_End_Day;
            $datd->Personality_End_Month = $request->Personality_End_Month;
            $datd->Personality_End_Year = $request->Personality_End_Year;
            $datd->Source = $request->Source;

            $datd->save();
            return redirect('studentـregistration')->with('success', "تم تسجيل البيانات بنجاح");
        }

    }

    public function studentـregistration(Request $request)
    {

        $this->validate($request, [
            'upload' => 'required|file|mimes:pdf|max:5000',
        ]);
        $up = $request->file('upload');
        if ($up) {
            $message = "اكتمال ملف";
            $MobileNo1 = 966507566622;
            sms($MobileNo1, $message);

            $datd = register::where('user_id', Auth::user()->id)->first();
            $datd->hndl = 3;
            $datd->hndl1 = 1;
            $datd->save();
            $Auth = Auth::user()->id;
            $name = Auth::user()->name;
            $url_image = $up->getClientOriginalName();
            $up->move(public_path('upload_registration'), "$Auth.pdf");

            Mail::send('register.mail', ['user' => $name], function ($m) use ($name, $Auth) {
                $m->from('dar@mkka.com', "ملف الطالب $name ");
                $m->to('b@mkka.com')->subject('اكتمال ملف');
                $m->attach("upload_registration/$Auth.pdf");

            });
            return redirect('home')->with('success', "تم رفع البيانات بنجاح");

        }

    }

    public function Distributionـofـcommittees($id)
    {
        $value = register::orderBy('Stage', 'desc')->orderBy('Nationality', 'asc')->where([
            ['Requestـstatus', $id],
            ['hndl1', 2],
        ])->latest()->paginate(50);
        return view('register.Distributionـofـcommittees', ['value' => $value, 'id' => $id]);

    }


    public function print_one($id)
    {

        $value = register::where([
            ['id', $id],
        ])->with('national')->get();
        $Requestـstatus = register::where([
            ['id', $id],

        ])->first();

        $Requestـstatus->Requestـstatus;

        return view('register.print_one', ['collection' => $value, 'id' => $id, 'Requestـstatus' => $Requestـstatus->Requestـstatus]);

    }
    public function print_all($id)
    {

        $value = register::where([
            ['Requestـstatus', $id],
            ['hndl1', 2],
        ])->with('national')->get();
        $Requestـstatus = register::where([
            ['Requestـstatus', $id],

        ])->first();

        $Requestـstatus->Requestـstatus;

        return view('register.print', ['collection' => $value, 'id' => $id, 'Requestـstatus' => $Requestـstatus->Requestـstatus]);

    }
    public function word($id)
    {
        $value = register::orderBy('Stage', 'desc')->orderBy('Nationality', 'asc')->where('Requestـstatus', $id)
            ->where('hndl1', 2)
            ->get();

        return view('register.word', ['collection' => $value, 'id' => $id]);

    }

    public function Detailsـofـapplicants($id)
    {

        $value = register::where([
            ['Requestـstatus', $id],
            ['hndl1', 2],
        ])->get();

        return view('register.Detailsـofـapplicants', ['collection' => $value, 'id' => $id]);

    }
    public function Nationalitiesـstats()
    {

        $value = nationaltie::all();

        foreach ($value as $key => $values) {

            $count[$values->Nationalty_Id] = register::where('Nationality', $values->Nationalty_Id)->where('hndl', 3)->orderBy('orby', 'asc')->count();
            $no[$values->Nationalty_Id] = register::where('Nationality', $values->Nationalty_Id)
                ->where('hndl1', 3)
                ->orderBy('orby', 'asc')->count();
            $yes[$values->Nationalty_Id] = register::where('Nationality', $values->Nationalty_Id)
                ->where('hndl1', 2)
                ->orderBy('orby', 'asc')->count();

        }
        return view('register.Nationalitiesـstats', ['value' => $value, 'count' => $count, 'yes' => $yes, 'no' => $no]);

    }
    public function search(Request $request)
    {
        $value = register::where('name', 'like', '%' . $request->name . '%')
            ->orwhere('IdentificationـNumber', 'like', '%' . $request->name . '%')

            ->get();

        return view('register.search', ['value' => $value]);

    }

    public function form($id)
    {

        $form = register::where('id', $id)->first();

        $value = nationaltie::orderBy('id', 'asc')->get();

        return view('register.register_form_ed', ['form' => $form, 'value' => $value]);

    }

    public function edit(Request $request)
    {

        $id = $request->id;
        $datd = register::where('id', $id)->first();
        $datd->Requestـstatus = $request->Requestـstatus;
        $datd->Stage = $request->Stage;
        $datd->name = $request->name;
        $datd->Nationality = $request->Nationality;
        $datd->DateـofـBirth = $request->DateـofـBirth;
        $datd->placeـofـbirth = $request->placeـofـbirth;
        $datd->IdentificationـNumber = $request->IdentificationـNumber;
        $datd->Itsـhistory = $request->Itsـhistory;
        $datd->Itsـsource = $request->Itsـsource;
        $datd->Occupation = $request->Occupation;
        $datd->Certificate = $request->Certificate;
        $datd->Donor = $request->Donor;
        $datd->Dateـofـtheـcertificate = $request->Dateـofـtheـcertificate;
        $datd->Appreciation = $request->Appreciation;
        $datd->Mobile_number = $request->Mobile_number;
        $datd->Guardian = $request->Guardian;
        $datd->Guardian_Mobile = $request->Guardian_Mobile;
        $datd->Student_address = $request->Student_address;
        $datd->mzki1 = $request->mzki1;
        $datd->Currency1 = $request->Currency1;
        $datd->mzki2 = $request->mzki2;
        $datd->Currency2 = $request->Currency2;
        $datd->BirthDay_Year = $request->BirthDay_Year;
        $datd->BirthDay_Month = $request->BirthDay_Month;
        $datd->BirthDay_Day = $request->BirthDay_Day;
        $datd->Personality_End_Day = $request->Personality_End_Day;
        $datd->Personality_End_Month = $request->Personality_End_Month;
        $datd->Personality_End_Year = $request->Personality_End_Year;
        $datd->Source = $request->Source;

        $datd->save();
        return redirect("New_student_information/$id")->with('success', "تم التعديل بنجاح");
    }

    public function dlFile(Request $request)
    {

        $message = "المتقدم $request->name تم حذف ملف الوثائق الرجاء الدخول للموقع ورفع الملف  مرة أخرى";
        $MobileNo1 = preg_replace('/^0/', '966', "$request->Mobile_number");
        sms($MobileNo1, $message);
        wat($MobileNo1, $message);

        $datd = register::where('user_id', $request->id)->first();
        $datd->hndl1 = 1;
        $datd->hndl = 2;
        $datd->Concernedـemployee = '';
        $datd->save();

        $myFile = "upload_registration/$request->id.pdf";
        File::delete($myFile);

        return redirect("New_student_information/$datd->id")->with('warning', "تم حذف ملف الوثائق بنجاح");

    }

    public function dlFileus(Request $request)
    {



        $datd = register::where('user_id', $request->id)->first();
        $datd->hndl1 = 1;
        $datd->hndl = 2;
        $datd->Concernedـemployee = '';
        $datd->save();

        $myFile = "upload_registration/$request->id.pdf";
        File::delete($myFile);

        return redirect("home")->with('warning', "تم حذف ملف الوثائق بنجاح");

    }

    public function studentـregistrationadmin(Request $request)
    {

        $this->validate($request, [
            'upload' => 'required|file|mimes:pdf',
        ]);
        $up = $request->file('upload');

        $datd = register::where('user_id', $request->user_id)->first();
        $datd->hndl = 3;
        $datd->hndl1 = 1;
        $datd->save();

        $url_image = $up->getClientOriginalName();
        $Auth = $request->user_id;
        $up->move(public_path('upload_registration'), "$Auth.pdf");
        return redirect("New_student_information/$request->id")->with('success', "تم رفع الملف بنجاح");

    }

    public function revision(Request $request)
    {

        $name = $request->name;
        $num_id = $request->num_id;
        $text = $request->text;
        $Msg = 'it\'s add';
        DB::table('revisions')->insert([
            'name' => $name,
            'number_id' => $num_id,
            'why_you_visit_us' => $text,
        ]);

        return redirect("revision")->with('success', "تم رفع الملف بنجاح");

    }

    public function certificates(Request $request)
    {

        return redirect("certificates/$request->id");

    }

    public function student_Export_pdf($id)
    {

        $value = register::orderBy('Stage', 'desc')->orderBy('Nationality', 'asc')->where('Requestـstatus', $id)
            ->where('hndl1', 2)
            ->get();

        $data = [

            'collection' => $value,
            'id' => $id,
        ];

        $pdf = PDF::loadView('register.pdf', $data);
        //$pdf->save(public_path("vv/$id".'.pdf'));
        return $pdf->stream("$id.pdf");
        return view('register.pdf');

        //  $name=Auth::user()->name;
        //  Mail::send('register.pdf', ['id' => $id,'collection'=>$value], function ($m) use ($name,$id,$value) {
        //   $m->from('dar@mkka.com', 'رسالة تلقائية');
        //   $m->to('b@mkka.com')->subject('اكتمال ملف');
        //  $m->attach("vv/$id".'.pdf');

        //  });
        // $pdf->save(public_path("vv/$id".'.pdf'));
    }

    public function dropzone(Request $request)
    {
        $id_user = Auth::user()->id;
        $count = attachment::where('user_id', $id_user)->count();
        if ($count < 5) {

            $url_image = $request->file('file');
            $me = $url_image->getClientOriginalName();

            $p = $url_image->move(public_path("attachment/$id_user"), "$me");

            $datd = new attachment();
            $datd->url = $me;
            $datd->name = $url_image;
            $datd->user_id = $id_user;
            $datd->save();
        }
    }

    public function dropzoneget()
    {
        $id_user = Auth::user()->id;
        $value = attachment::where('user_id', $id_user)->get();

        return view('dropzone', ['value' => $value]);

    }
    public function dropzonedl($id, $name, $id_dl, $redirect)
    {

        $flight = attachment::find($id);
        $flight->delete();
        $myFile = "attachment/$id_dl/$name";
        File::delete($myFile);
        return redirect("New_student_information/$redirect")->with('success', "تم  الحذف بنجاح");

    }

    public function definition($id)
    {
     $value = card::where('Student_ID', $id)
            ->get();
            $data = [

                'values' => $value,
                'id'     => $id,
            ];

            $pdf = PDF::loadView('definition', $data);
            return $pdf->stream("تعريف للعمل.pdf");

     //  return view('definition', ['values' => $value, 'id' => $id]);

    }

    public function General_definition($id,$name)
    {
      $verification = verification::where('Student_ID', $id)->first()->id;
      $date = verification::where('Student_ID', $id)->first()->date;

      $verification1 = verification::where('Student_ID', $id)->first();

      $Hijri= Hijri::Date('j / m / Y'); // RETURN Hijri Date of [NOW] Without
     $verification1->date = $Hijri;
      $verification1->save();
     $value = card::where('Student_ID', $id)
            ->get();

            $data = [
                'date'=>$Hijri,
                'verification'=>$verification,
                'values' => $value,
                'name'     => $name,
            ];

            $pdf = PDF::loadView('General_definition', $data);
            return $pdf->stream("تعريف.pdf");

     //  return view('definition', ['values' => $value, 'id' => $id]);

    }
    public function Check($id)
    {
        $value = verification::where('id', $id)->first();

     return view('Check', ['values' => $value]);

    }

    public function proportions()
    {

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


   $data = [
    'al1'=>$al1,
    'al2'=>$al2,
    'ta1'=>$ta1,
    'ta2'=>$ta2,
    'mt1'=>$mt1,
    'mt2'=>$mt2,
];

$pdf = PDF::loadView('register.proportions', $data);
return $pdf->stream("إحصاء عدد الطلاب المتقدمين.pdf");
    }



}
