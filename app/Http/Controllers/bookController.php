<?php

namespace App\Http\Controllers;

use Alkoumi\CarbonDateTranslator\TransDate;
use Alkoumi\LaravelArabicTafqeet\Tafqeet;
use App\book;
use App\detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class bookController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */

    public function index()
    {
        $value = book::orderBy('orby', 'asc')->latest()->paginate(100);
        return view('book.add')->with('value', $value);

    }

    public function Arranging($id)
    {

        $value = book::where('Stage', $id)->get();
        return view('book.Arranging')->with('value', $value);

    }
    public function orby(Request $request)
    {

        for ($i = 0; $i < $request->sum; $i++) {

            $id = $request['id'][$i];

            $orby = $request['orby'][$i];

            $datd = book::where('id', $id)
                ->update(
                    ['orby' => $orby]);

        }

        return redirect('add_book')->with('success', "تم الترتيب بنجاح");

    }
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create(Request $request)
    {
        $datd = new book();
        $up = $request->file('upload');
        $Extension = $up->getClientOriginalExtension();
        $url_image = $up->getClientOriginalName();
        $datd->url_image = $url_image;
        $name = $datd->name = $request->name;
        $Subject = $datd->Subject = $request->Subject;
        $note = $datd->note = $request->note;
        $url = $datd->url = $request->url;
        $Stage = $datd->Stage = $request->Stage;
        $user_id = $datd->user_id = Auth::user()->id;
        $up->move(public_path('upload'), $url_image);
        $datd->save();
        return redirect('add_book')->with('msg', "تم الادخال بنجاح");
    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {
//
    }

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function show($id)
    {

$value= book::where('Stage',$id)->orderBy('orby', 'asc')->latest()->paginate(50);


     return view('book.index', ['value' => $value, 'id' => $id]);

    }

    public function show_book_all()
    {

//   $detail= detail::all();

//   return view('book.show_all',['detail'=> $detail]);

        return Tafqeet::inArabic();

    }

    public function show_book($id)
    {
        $value = book::where('id', $id)->with('detail_b')->first();

        if ($value) {
//dd($value->toArray());

            return view('book.show', ['value' => $value->detail_b, 'name' => $value]);
        } else {

            abort(403, ' خطأ في الصفحة');
        }

    }

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function edit(Request $request)
    {
        $id = $request->id;

        $qoran1 = detail::find($id);

        $qoran1->book_id = $request->book_id;

        $qoran1->note = $request->note;
        $qoran1->id = $request->id;

        $qoran1->save();

        return redirect("/show_book_admin/$request->book_id")->with('success', "تم تعديل المنهج بنجاح");

        echo "  تم تعديل البيانات بنجاح";
    }
/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function update_name($id)
    {
        $value = book::find($id);

        return view('book.update_admin_name')->with('value', $value);

    }
    public function edit_name(Request $request)
    {
        echo $id = $request->id;

        $qoran1 = book::find($id);

        $up = $request->file('upload');
        if ($up) {
            $url_image = $up->getClientOriginalName();
            $qoran1->url_image = $url_image;
            $up->move(public_path('upload'), $url_image);
        }
        $qoran1->url = $request->url;
        $qoran1->name = $request->name;
        $qoran1->note = $request->note;
        $qoran1->Subject = $request->Subject;
//$qoran1->id = $request->id;

        $qoran1->save();

        return redirect("/show_book/$id")->with('success', "تم تعديل الكتاب بنجاح");

        echo "  تم تعديل البيانات بنجاح";
    }
/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function update($id)
    {
        $value = detail::find($id);

        return view('book.update_admin')->with('value', $value);

    }

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function destroy($id)
    {

        book::destroy($id);
        detail::where('book_id', $id)->delete();
        return redirect('add_book')->with('warning', "تم الحذف بنجاح");

    }

    public function Export_pdf($id)
    {
        $detail = book::where('id', $id)->with('detail_b')->first();

        $data = [

            'note' => $detail->detail_b,
            'name' => $detail->name,

        ];
        $pdf = PDF::loadView('book.pdf', $data);
        return $pdf->stream("$detail->name.pdf");
        return view('book.pdf');

    }


    public function api_book_all($id)
    {

$value= book::where('Stage',$id)->get();

return $value;
    }
    public function api_book($id)
    {

$value= book::where('id',$id)->get();
$detail= detail::where('book_id',$id)->get();

   return response()->json(['data'=>$value,'detail' => $detail]);


    }


}
