<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TGBotController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//$token = '5167994619:AAFHpGFYaeqtkeIMKvY6sKorQS0FNbelrxg';
//$bot = new \TelegramBot\Api\Client($token);
//var_dump($bot);
//die;

//// команда для start
//$bot->command('start', function ($message) use ($bot) {
//    $answer = 'Добро пожаловать, цветочки!';
//    $bot->sendMessage($message->getChat()->getId(), $answer);
//});


Route::get('/', [TGBotController::class, 'index']);

//Route::resource('/', 'TGBotController')->only([
//    'index',
//]);

//
//Route::get('/', function () {
//
//    return view('welcome');
//});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
