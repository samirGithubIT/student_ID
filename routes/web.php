<?php

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/our', function () {
    return view('pages.our');
});

Route::get('/lists',[StudentController::class,'index']);

Route::get('/user/{id}/show',[StudentController::class,'show']);

Route::get('/user/{id}/edit', function ($id) {

    $user = Student::findOrFail($id);

    return  view('pages.user_edit' , compact('user'));
    
});

Route::get('/lists/create',function(){

    return view('pages.create');
});

Route::post('/lists/store', function (Request $request) {

    // return $request->all();

    $validation = Validator::make($request->all(), [

        'name' => 'required',
        'age' => 'required',
        'grade' => 'required',
        'email' => 'required',
        'father_name' => 'required',
        'mother_name' => 'required',
        'password' => 'required|confirmed',
    ]);

    if ($validation->fails()){
        return redirect('/lists')->withErrors($validation)->withInput();
    }

    $user_link = new Student();

    $user_link->name = $request->name;
    $user_link->age = $request->age;
    $user_link->grade = $request->grade;
    $user_link->email = $request->email;
    $user_link->father_name = $request->father_name;
    $user_link->mother_name = $request->mother_name;
    $user_link->address = $request->address;
    $user_link->photo = $request->photo;
    $user_link->password = bcrypt($request->password);
    $user_link->save();

    return redirect()->to('/lists')->with('success','Data inserted successfully');
    
});

Route::post('/lists/update/{id}', function (Request $request, $id) {

    $user_update = Student::find($id);

    $validation = Validator::make($request->all(), [

        'name' => 'required',
        'age' => 'required',
        'grade' => 'required',
        'email' => 'required',
        'father_name' => 'required',
        'mother_name' => 'required',
    ]);

    if ($validation->fails()){
        return redirect('/lists/edit')->withErrors($validation)->withInput();
    }

    $user_update->name = $request->name;
    $user_update->age = $request->age;
    $user_update->grade = $request->grade;
    $user_update->email = $request->email;
    $user_update->father_name = $request->father_name;
    $user_update->mother_name = $request->mother_name;
    $user_update->address = $request->address;
    $user_update->photo = $request->photo;
    $user_update->save();

    return redirect()->to('/lists')->with('success','Data updated successfully');
   
});

Route::post('/user/{id}/delete', function ($id) {

    $user = Student::findOrFail($id);

    $user->delete();

    return redirect()->to('/lists')->with('success','Data deleted successfully');
    
});