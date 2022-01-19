<?php

use Illuminate\Support\Facades\Http;

use RealRashid\SweetAlert\Facades\Alert;


Auth::routes(['verify' => true]);



Route::any('/Conditions', function () {


    return view('Conditions');

});
Route::any('/Admission', function () {
    return view('Admission');

});

Route::any('/dd', function () {
    return view('dlall');

});
Route::any('/pdf', function () {
    return view('pdf');
});
Route::any('/test', function () {
    return view('test');
});

Route::any('/Committees', function () {
    return view('Committees');
});


Route::any('/Scales', function () {
    $value= \App\exam::find(1);


   return view('Scales')->with('value', $value);

});

Route::get('/add_table', function () {
    return view('add_table');

})->middleware('auth','admincp');

Route::any('/Results', function () {
    return view('Results');


});
Route::get('/whatsapp/{id}/{name}/{Mobile}/{Stage}', function ($Mobile,$name,$id,$Stage) {

    return view('register.whatsapp',['id' => $id,'name' => $name,'Mobile'=>$Mobile,'Stage'=>$Stage]);

})->middleware('auth','admincp');

Route::get('/', 'newsController@shownews');
Route::get('/home1', 'HomeController@index1');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add_news', 'newsController@index')->middleware('auth','admincp');
Route::get('/show_news/{id}', 'newsController@show');
Route::get('/delete_news/{id}', 'newsController@destroy');
Route::post('/add_table', 'newsController@upload')->middleware('auth','admincp');



Route::get('/show_book_all', 'bookController@show_book_all');

Route::get('/show_book/{id}', 'bookController@show_book');
Route::get('/add_book', 'bookController@index')->middleware('auth','admincp');
Route::get('/delete_book/{id}', 'bookController@destroy')->middleware('auth','admincp');
Route::get('/update_book/{id}', 'bookController@update')->middleware('auth','admincp');
Route::post('/update_book', 'bookController@edit')->middleware('auth','admincp');

Route::get('/Arranging/{id}', 'bookController@Arranging')->middleware('auth','admincp');

Route::get('/update_name_book/{id}', 'bookController@update_name')->middleware('auth','admincp');
Route::post('/update_name_book', 'bookController@edit_name')->middleware('auth','admincp');


Route::get('/index_book/{id}', 'bookController@show')->where('id', '[أ-ي]+');;
Route::get('/show_book_admin/{id}', 'detailController@show_book')->middleware('auth','admincp');
Route::get('/Biography', 'newsController@Biography');
Route::get('/Powersـofـusers', 'HomeController@Powersـofـusers')->middleware('auth','admincp');
Route::post('/Powersـofـusers', 'HomeController@Powersـofـusers_post')->middleware('auth','admincp');


Route::post('/add_curriculum', 'detailController@create')->middleware('auth','admincp');
Route::post('/add_news', 'newsController@create')->middleware('auth','admincp');
Route::post('/add_book', 'bookController@create')->middleware('auth','admincp');
Route::post('/orby', 'bookController@orby')->middleware('auth','admincp');
Route::post('/Scales_edit', 'HomeController@edit')->middleware('auth','admincp');

//التسجيل
Route::get('/print_one/{id}', 'student@print_one')->name('print_one')->middleware('auth');

Route::get('/print_all/{id}', 'student@print_all')->middleware('auth','committees');
Route::get('/word/{id}', 'student@word')->middleware('auth','committees');

Route::get('/Distributionـofـcommittees/{id}', 'student@Distributionـofـcommittees')->middleware('auth','committees');
Route::get('/new_students/{id}/{name?}/{Details?}', 'student@new_students')->middleware('auth','admincp');

Route::get('/studentـregistration', function () {
    return view('register.studentـregistration');

})->middleware('auth');
Route::any('/register_new', function () {
    return view('register.register');
});
Route::post('/studentـregistrationadmin', 'student@studentـregistrationadmin')->middleware('auth');
Route::post('/studentـregistration', 'student@studentـregistration')->middleware('auth');
Route::post('/studentـregistration_2', 'student@add')->middleware('auth');
Route::get('/New_student_information/{id}', 'student@New_student_information')->middleware('auth','committees');
Route::post('/New_student_information_post', 'student@New_student_information_post')->middleware('auth','admincp');
Route::get('/Nationalitiesـstats', 'student@Nationalitiesـstats')->middleware('auth','admincp');
Route::post('/search', 'student@search')->middleware('auth','admincp');
Route::get('/form/{id}', 'student@form')->middleware('auth','admincp');
Route::post('/edit', 'student@edit')->middleware('auth','admincp');
Route::post('/dlFile', 'student@dlFile')->middleware('auth','admincp');
Route::post('/dlFileus', 'student@dlFileus')->middleware('auth');

Route::get('/addok/{id}/{name}', 'student@addok')->name('addok');

Route::get('/zoom', function () {

    return view('zoom');

});



Route::get('/teststudtnt', function () {

    return view('test.home');

});

Route::get('/a1', function () {

    return view('test.a1');

});
Route::post('/a1', 'test@a1');




Route::get('/revision', function () {

    return view('revision');

});


Route::post('/certificates1', 'student@certificates');

Route::get('/certificates/{id}', function ($id) {

    return view('certificates',['id' => $id]);

});
Route::get('/certificates_s', function () {

    return view('certificates_s');

});
Route::post('/revision', 'student@revision');

Route::get('/Export_pdf/{id}', 'bookController@Export_pdf');
Route::get('/student_Export_pdf/{id}','student@student_Export_pdf')->middleware('auth','admincp');
Route::get('/proportions','student@proportions')->name('proportions')->middleware('auth','admincp');

Route::get('/statement_admin','exam@statement_get_admin')->middleware('auth','admincp');
Route::post('/statement_admin', 'exam@statement_admin')->middleware('auth','admincp');

Route::get('/dropzone', 'student@dropzoneget')->middleware('auth');

Route::post('/fileupload', 'student@dropzone')->middleware('auth');
Route::get('/dropzonedl/{id}/{id_dl}/{name}/{redirect}', 'student@dropzonedl')->middleware('auth');

Route::get('/New_student_information_tl/{id}', 'student@New_student_information_tl');
Route::get('/definition/{id}', 'student@definition');
Route::get('/General_definition/{id}/{name}', 'student@General_definition');
Route::get('/Check/{id}', 'student@Check');



Route::prefix('card')->group(function () {
 Route::post('/add', 'exam@add_card');

});
Route::prefix('exam')->middleware('auth')->group(function () {
    Route::get('/1', 'exam@first')->middleware('student');
    Route::get('/2', 'exam@second')->middleware('student');
    Route::get('/3', 'exam@finall')->middleware('student');
    Route::get('/Results', 'exam@index')->middleware('student');
    Route::get('/statement','exam@statement_get')->middleware('student');
    Route::post('/statement', 'exam@statement')->middleware('student');
    Route::get('/General_definition/{id}', 'exam@General_definition');

});

Route::prefix('student')->group(function () {
    Route::get('/first/{Student_Number}', 'exam@firstـStudent');
    Route::get('/second/{Student_Number}', 'exam@secondـStudent');
    Route::post('/search_Student', 'exam@searchـStudent');
    Route::get('/search', function () {
        return view('exam.search');

    });

});

Route::prefix('question')->middleware('auth')->group(function () {
    Route::get('/charge/{id}', 'exam@charge');
    Route::get('/add_question', 'exam@add_question');
    Route::get('/add/{id}', 'exam@show');
    Route::get('/', 'exam@index');
    Route::get('/addQ/{id}', function ($id) {
        return view('question.addQ',['id' => $id]);

    });

});
Route::prefix('answer')->middleware('auth')->group(function () {
    Route::get('/', 'exam@answers_show');
    Route::get('/g/{id}/{trues}/{final}', 'exam@answers_g');
    Route::get('/final/{id}', 'exam@final');

});
Route::prefix('live')->middleware('auth')->group(function () {
    Route::get('1', 'exam@live')->middleware('student');;


    // Route::post('/1', 'exam@live');

});



Route::get('/sccepters', function () {
    return view('sccepters');


});


Route::get('api/getpost', 'exam@getpost');
Route::post('api/addpost', 'exam@addpost');
Route::delete('api/dlpost/{id}', 'exam@dlpost');

Route::get('api/getcard/{id}', 'exam@getcard');
Route::post('api/edit', 'exam@edit');
Route::delete('api/del/{id}', 'exam@del');

Route::get('/DefiNition', function () {
    return view('component.DefiNition');

})->middleware('auth');
Route::get('/github', function () {
    return view('component.github');


})->middleware('auth');

Route::get('/bhs', function () {
    return view('component.bhs');
} );

Route::get('/sendsms/{id}', function ($id) {
    return view('register.sendsms',['id' => $id]);
} )->name('sendsms')->middleware('auth','admincp');



Route::get('/t1', function () {
    return view('component.t1');
});
Route::get('/t3', function () {
    return view('component.t3');
});


Route::get('/http', function () {

    $res = Http::get('/public/saudischools1442h.json');
 $res;

});



Route::get('/archive', function () {
    return view('exam.archive');
});


Route::get('/add_zoom', function () {
    return view('exam.add_zoom');
});

Route::get('/Zoomm', 'OnlineClasseController@index');

Route::post('/add_zoom', 'OnlineClasseController@store');
Route::get('/aaa', 'exam@aaa');

Route::get('/exsl', function () {
    return view('exsl');
});
Route::post('/exsl', 'test@store');
