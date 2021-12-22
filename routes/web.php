<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\customcontroller;
use  App\Http\Controllers\Controller;
use  App\Http\Controllers\usercontroller;
use  App\Http\Controllers\MainController;
use  App\Http\Controllers\leadsformController;
use  App\Http\Controllers\StockportfolioController;

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


////////////////** AdminPanel */////////////////
Route::get('logadmi', [MainController::class,'logadmi']);

/* adminlogin/registration page*/
Route::get('/login', [customcontroller::class, 'login']);
Route::get('/registration', [customcontroller::class, 'registration']);
Route::post('/register-user', [customcontroller::class, 'registeruser'])->name('register-user');
Route::post('/login-user', [customcontroller::class, 'loginuser'])->name('login-user');

/*admin index page*/
Route::get('/index', [customcontroller::class, 'index']);
/*admin manageinvestment page*/
Route::get('/manageinvestments', [customcontroller::class, 'manageinvestments']);
/*admin allregister page*/
Route::get('all_register_user', [customcontroller::class, 'index1'])->name('all_register_user.index');
/*admin addlead page*/
Route::get('addlead', [customcontroller::class, 'addlead']);
Route::post('addlead', [customcontroller::class, 'addData']);
/*admin package page*/
Route::get('/package', [customcontroller::class, 'package']);
/*admin users page*/
Route::resource('users', usercontroller::class);
/*admin viewleads page*/
Route::get('viewleads', [customcontroller::class, 'viewleads']);

/**admin folder portfoliopage page */
Route::resource('portfolio', StockportfolioController ::class);
/*admin userwithdrawl page*/
Route::get('/userwithdrawal', [customcontroller::class, 'userwithdrawal']);




////////////////** UserPanel */////////////////
/**user navbar page */
Route::get('navbar', [customcontroller::class, 'navbar']);
/**user indexuser page */
Route::get('indexuser', [customcontroller::class, 'indexuser']);

/**user index page */
Route::get('', function () {
    return view('user/indexuser');
});
/**user folder addform page */
Route::post('indexuser', [customcontroller::class, 'addindexuserformData'])->name('indexuser');

/**user loguser page */
Route::get('loguser', [customcontroller::class, 'loguser']);
Route::post('/loged-user', [customcontroller::class, 'loged'])->name('loged-user');
/**user reguser page */
Route::get('reguser', [customcontroller::class, 'reguser']);
Route::post('/reg-user', [customcontroller::class, 'signinuser'])->name('reg-user');

/**user marketleads page */
Route::get('marketleads', [customcontroller::class, 'marketleads']);
/**user folder marketleads page */
Route::get('marketleadspayment', [customcontroller::class, 'marketleadspayment']);
/**user folder marketleadsform page */
Route::post('marketleads', [customcontroller::class, 'addformData'])->name('marketleads');

/**user millarspayment page */
Route::get('millarspayment',[customcontroller::class, 'millarspayment']);

/**user folder millarspaymentpopupsignin page */
Route::post('millarspayment', [customcontroller::class, 'signinmillarspayment'])->name('millarspayment');

/**user folder millarspaymentpopupreguser page */
Route::post('mallarspayment', [customcontroller::class, 'regmillarspayment'])->name('millarspayment');

/**user folder millarsportfolio page */
Route::get('millarsportfolio', [customcontroller::class, 'millarsportfolio']);
/**user folder millarsportfolio formsave page */
Route::post('millarsportfolio', [customcontroller::class, 'addformData'])->name('millarsportfolio');

/**user folder index page */
Route::get('userindex',[customcontroller::class, 'userindex']);

/**user folder stockmove page */
Route::get('stockmove', [customcontroller::class, 'stockmove']);

/**user folder stockpayment page */
Route::get('stockpayment', [customcontroller::class, 'stockpayment']);

/**user folder razerpay page */
Route::get('razerpay', [customcontroller::class, 'razerpay']);
Route::post('razerpay', [customcontroller::class, 'razerpayment'])->name('razerpay');




