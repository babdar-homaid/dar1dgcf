<?php

namespace App\Http\Controllers;

use App\brief;
use App\exam;
use App\neww;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Biography()
    {
        $value = brief::orderBy('id', 'asc')->latest()->paginate(1);

        return view('Biography')->with('value', $value);
    }

    public function shownews()
    {
        $value = neww::orderBy('created_at', 'DESC')->latest()->paginate(3);

        $exams = exam::find(1);

        return view('index', ['value' => $value, 'exams' => $exams]);
    }
    public function index()
    {

        $value = neww::latest()->paginate(5);

        return view('news.add')->with('value', $value);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function api(Request $request)
    {
      $datd =neww::get();
        return $datd;
    }
    public function create(Request $request)
    {
        $msgg = [
            'title.required' => 'يجب إدخال عنوان الخبر',
            'the_news.required' => 'يجب إدخال الخبر',

        ];
        $this->validate($request, [
            'title' => 'required',
            'the_news' => 'required',
        ], $msgg);

        $datd = new neww();
        $title = $datd->title = $request->title;
        $the_news = $datd->the_news = $request->the_news;
        $user_id = $datd->user_id = Auth::user()->id;
        $datd->save();
        return redirect('add_news')->with('success', "تم  إضافة الخبر بنجاح");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {

        $qoran1 = exam::find(1);
        $qoran1->note = $request->note;
        $user_id = $qoran1->user_id = Auth::user()->id;
        $qoran1->save();

        if ($up1 = $request->file('upload1'));
        { $up1->move(public_path('gdawel'), "1.jpg");
        }

        if ($up2 = $request->file('upload2')) {
            $up2->move(public_path('gdawel'), "2.jpg");
        }

        if ($up3 = $request->file('upload3')) {
            $up3->move(public_path('gdawel'), "3.jpg");
        }
        if ($up4 = $request->file('upload4')) {
            $up4->move(public_path('gdawel'), "4.jpg");
        }
        if ($up5 = $request->file('upload5')) {
            $up5->move(public_path('gdawel'), "5.jpg");
        }
        if ($up6 = $request->file('upload6')) {
            $up6->move(public_path('gdawel'), "6.jpg");
        }
        if ($up7 = $request->file('upload7')) {
            $up7->move(public_path('gdawel'), "7.jpg");
        }
        if ($up8 = $request->file('upload8')) {
            $up8->move(public_path('gdawel'), "8.jpg");
        }
        if ($up9 = $request->file('upload9')) {
            $up9->move(public_path('gdawel'), "9.jpg");
        }
        if ($up10 = $request->file('upload10')) {
            $up10->move(public_path('gdawel'), "10.jpg");
        }

        return redirect('add_table')->with('success', "تم رفع الحدول بنجاح");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $value= neww::find($id);
         if($value){

        return view('news.show')->with('value', $value);
         }
         else{
            abort(403, 'صفحة خطأ');


         }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        neww::destroy($id);
        return redirect('add_news')->with('warning', "تم الحذف بنجاح");
    }
}
