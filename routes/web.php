<?php
use App\Models\Message;
use App\Http\Controllers\Controller;
use App\Http\Livewire\DoctorMedicine;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\feesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\reportsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\contactsController;
use App\Http\Controllers\invoicesController;
use App\Http\Controllers\medicineController;
use App\Http\Controllers\PharmacymController;
use App\Http\Controllers\showpostsController;
use App\Http\Controllers\protectionController;
use App\Http\Controllers\reservationController;
use App\Models\Protection;
use App\Models\Report;
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Home Routes
Route::get("redirects",[HomeController::class,"index"]);
Route::get('/',[HomeController::class,"home"]);
Route::get('/about us',[HomeController::class,"about_us"]);
Route::get('/doctors',[HomeController::class,"doctors"]);
Route::get('/call us',[HomeController::class,"call_us"]);
Route::post('contact',[HomeController::class,"contact"]);
//patient&&Doctor (Protection)
Route::get('patient_protection',[PatientController::class ,'patient_protection'])->middleware(['auth'])->name('delete_chat');
Route::get('create_protection', function () {
    return view('Admin.admin_create_protection');

})->middleware(['auth'])->name('delete_chat');
Route::Post('store_protection',[usersController::class,"store_protection"]);

//Patient Rotes
Route::middleware(['patient'])->group(function () {
    Route::get('/patient-dashboard',[PatientController::class,"patient_dashboard"]);
    Route::get('/patient-about-us',[PatientController::class,"patient_about_us"]);
    Route::get('/patient-doctors',[PatientController::class,"patient_doctors"]);
    Route::get('/patient-call-us',[PatientController::class,"patient_call_us"]);
    Route::post('book',[PatientController::class,"appointment"]);
    Route::get('posts',[PatientController::class,"posts"]);
    //comment before livewire
    //Route::post('storecomment',[PatientController::class,"storecomment"]);
    //Route::post('storecomment_2',[PatientController::class,"storecommentt"]);
    Route::get('show_protection_post/{id}',[PatientController::class,"show_protection_post"]);
    Route::get('patientappointments',[PatientController::class,"myappointments"]);
    Route::get('/patienttaxes',[PatientController::class,"patienttaxes"]);
    Route::get('/testmachine',[PatientController::class,"testmachine"]);
    Route::post('/makecheckup',[PatientController::class,"makecheckup"]);
    Route::get('/generatedreport',[PatientController::class,"generatedreport"]);
    Route::get('/deletecheckup/{id}',[PatientController::class,"deletecheckup"]);
    Route::get('/showspeceficcheckup/{id}',[PatientController::class,"showspeceficcheckup"]);





});

/*-------------------------------------------------------*/
//Doctor Routes
Route::get('Get_medicine/{id}', 'PharmacymController@Get_medicine');
Route::get("search17",[PharmacymController::class,"search17"]);
Route::resource('Pharmacym', PharmacymController::class);
Route::middleware(['doctor'])->group(function () {
    Route::get('/doctordashboard',[DoctorController::class,'doctordashboard']);
Route::get('/doctorcontact',[DoctorController::class,'doctorcontact']);
Route::get('/doctoraboutus',[DoctorController::class,'doctoraboutus']);
//Route::get('/doctornews',[DoctorController::class,'doctornews']);
Route::get('/myappointments',[DoctorController::class,"myappointments"]);
Route::get('/confirmationcanceled/{id}',[DoctorController::class,"confirmationcanceled"]);
Route::get('/confirmation/{id}',[DoctorController::class,"confirmation"]);
//Route::get('show_post/{id}',[DoctorController::class,"show_post"]);
Route::get('create_post',[DoctorController::class,"create_post"]);
Route::post('stor_post',[DoctorController::class,"store_post"]);
Route::get('all_post',[DoctorController::class,"index"]);
Route::get('deletpost/{id}',[DoctorController::class,"deletpost"]);
Route::post('editstorepost/{id}',[DoctorController::class,"editstorepost"]);
Route::get('editpost/{id}',[DoctorController::class,"editpost"]);
Route::get('chatwithpatient',[DoctorController::class,"chatwithpatient"]);
});
Route::get('/deletecheckup/{id}',[reportsController::class,"deletecheckup"]);
Route::get('/doctorreports',[DoctorController::class,"doctorreports"]);

Route::get('/docshowspeceficcheckup/{id}',[DoctorController::class,"docshowspeceficcheckup"]);



/*--------------------------------------------------------------------*/
//Admin
Route::delete('/reservations/bulk_delete',[reservationController::class,"bulkDelete"])->name('reservations.bulk_delete');
Route::delete('/reports/bulk_delete',[reportsController::class,"bulkDelete"])->name('reports.bulk_delete');
Route::delete('/pharmacym/bulk_delete',[PharmacymController::class,"bulkDelete"])->name('pharmacym.bulk_delete');
Route::delete('/order/bulk_delete',[orderController::class,"bulkDelete"])->name('order.bulk_delete');
Route::delete('/medicine/bulk_delete',[medicineController::class,"bulkDelete"])->name('medicine.bulk_delete');
Route::delete('/notes/bulk_delete',[NotesController::class,"bulkDelete"])->name('notes.bulk_delete');
Route::delete('/comment/bulk_delete',[commentController::class,"bulkDelete"])->name('comment.bulk_delete');
Route::delete('/showposts/bulk_delete',[showpostsController::class,"bulkDelete"])->name('showposts.bulk_delete');
Route::delete('/fees/bulk_delete',[feesController::class,"bulkDelete"])->name('fees.bulk_delete');
Route::delete('/contacts/bulk_delete',[contactsController::class,"bulkDelete"])->name('contacts.bulk_delete');
Route::delete('/users/bulk_delete',[usersController::class,"bulkDelete"])->name('users.bulk_delete');
Route::delete('/category/bulk_delete',[CategoryController::class,"bulkDelete"])->name('category.bulk_delete');
Route::delete('/bulk_delete',[protectionController::class,"bulkDelete"])->name('admins.bulk_delete');
Route::get("search18",[orderController::class,"search18"]);
Route::resource('order',orderController::class);
Route::get("search15",[CategoryController::class,"search15"]);
Route::resource('Category', CategoryController::class);
Route::get("search13",[NotesController::class,"search13"]);
Route::resource('Notes', NotesController::class);
Route::resource('showcomments', CommentController::class);
Route::resource('fees', feesController::class);
Route::get("search11",[feesController::class,"search11"]);
Route::get("choose/{id}",[orderController::class,"choose"]);
Route::resource('showposts', showpostsController::class);
Route::get("search10",[showpostsController::class,"search10"]);
Route::resource('protection', protectionController::class);
Route::get("search9",[protectionController::class,"search9"]);
Route::get("search8",[medicineController::class,"search8"]);
Route::resource('medicine', medicineController::class);
Route::get("search6",[contactsController::class,"search6"]);
Route::resource('contacts', contactsController::class);
Route::get("search5",[reportsController::class,"search5"]);
Route::resource('reports', reportsController::class);
Route::get("search4",[reservationController::class,"search4"]);
Route::get("confirmationpayment/{id}",[feesController::class,"confirmationpayment"]);
Route::resource('reservations', reservationController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::resource('users', usersController::class);
Route::get("search3",[usersController::class,"search3"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Admin//
Route::get('/showallmachinereports',[reportsController::class,'showallmachinereports']);




/*--------------------------------------------------------------------*/
//chat
//Route::get('/dashboardselect', [DoctorController::class ,'dashboardselect'])->middleware(['auth']);
Route::get('/chatnow/{id}', [DoctorController::class ,'chatnow'])->middleware(['auth']);
Route::get('/deletmsg/{id}', [DoctorController::class ,'deletmsg'])->middleware(['auth']);
Route::get('/search', [DoctorController::class ,'search2'])->middleware(['auth']);
Route::get('delete_chat/{id}', function ($id) {
    Message::whereIn('user_id', [$id, auth()->user()->id])
    ->whereIn('reciever_id', [$id, auth()->user()->id])->delete();
    return redirect()->back();

})->middleware(['auth'])->name('delete_chat');
/*------------------------------------------------------------------*/
//PatientChat
Route::get('/patientchatnow/{id}', [PatientController::class ,'patientchatnow'])->middleware(['auth']);
Route::get('/patientdeletmsg/{id}', [PatientController::class ,'patientdeletmsg'])->middleware(['auth']);
Route::get('/patientsearch', [PatientController::class ,'patientsearch'])->middleware(['auth']);
Route::get('patientdelete_chat/{id}', function ($id) {
    Message::whereIn('user_id', [$id, auth()->user()->id])
    ->whereIn('reciever_id', [$id, auth()->user()->id])->delete();
    return redirect()->back();

})->middleware(['auth'])->name('delete_chat');
/*------------------------------------------------------------*/
//livepost
Route::get('livepost', [DoctorController::class ,'index'])->middleware(['auth']);
Route::get('patient_livepost', [PatientController::class ,'patient_livepost'])->middleware(['auth']);
Route::get('show_illness',[PatientController::class ,'show_illness']);
Route::get('show_medicine/{illness}',[PatientController::class ,'show_medicine']);
Route::post('medicine_make_order/{id}',[PatientController::class ,'medicine_make_order']);
Route::get('make_order/{id}',[PatientController::class ,'make_order']);

