<?php

namespace App\Http\Controllers;

use App\book;
use App\detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_book($id)
    {
        //    $value= book::find($id);
        //    $detail= detail::where('book_id',$id)->get();
        $value = book::where('id', $id)->with('detail_b')->first();

        if ($value) {
            //dd($value->toArray());

            return view('book.book_admin', ['value' => $value->detail_b, 'name' => $value]);

        } else {

            abort(403, ' خطأ في الصفحة');
        }

    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $datd = new detail();
        $name = $datd->name = $request->name;
        $note = $datd->note = $request->note;
        $Stage = $datd->Stage = $request->Stage;
        $book_id = $datd->book_id = $request->book_id;
        $user_id = $datd->user_id = Auth::user()->id;

        $datd->save();
        return redirect("show_book_admin/{$book_id}")->with('success', "تم إدخال المنهج بنجاح");
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
        //
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
        //
    }
}
