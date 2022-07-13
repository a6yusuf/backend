<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reset-password/{token}', function ($token) {
    return view('reset', ['message' => 'nothing'])->with('token', $token);
});

Route::group([ 'namespace' => 'App\Http\Controllers\Api'], function ($router) {
    Route::post('forgetpwd', 'AuthController@forget');
});


Route::get('/email', function () {
    
    $nam = 'Client';
    $username = 'JohnDoe@mobinft.co';
    $password = '123456';

    $text = "<p><span style='font-size: 18px;'>Hey $nam!</span></p>
    <p><span style='font-size: 18px;'>Thank you for joining the MobiNFT family.</span></p>
    <p><span style='font-size: 18px;'>Below is your account details:</span></p>
    <p><span style='font-size: 18px;'>Username: <strong>$username</strong></span></p>
    <p><span style='font-size: 18px;'>Password: <strong>$password</strong></span></p>
    <p><span style='font-size: 18px;'>Click the button below to login to your account</span></p>";


    $details = ['title' => "Welcome to MobiNFT",
    'page' => "https://login.com",
    'body' => $text,
    'btn_text' => 'Sign In'
    ];

    Mail::to('a6yusuf@gmail.com')->send(new WelcomeMail($username, $details));
});