<?php

namespace App\Http\Controllers;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class test extends Controller
{
    public function a1(Request $request)
    {

    $this->validate($request,[
    'upload' => 'required|file|mimes:png,gif,jpeg|max:51000',
    ] );
    $up= $request->file('upload');

    $time=time();
    $url_image=$up->getClientOriginalName();
    $Auth=$request->card;
    $up->move(public_path('a/1'),"$Auth.$time.$url_image");
    return redirect("teststudtnt")->with('msg',"تم استقبال ورقم الاختبار بنجاح");;

    }

    public function store(Request $request)
    {
$file=$request->file('file');
Excel::import(new UsersImport,$file);

return redirect('exsl')->with('success', "تم الترتيب بنجاح");

    }
}
