<?php

namespace App\Http\Controllers;

use App\Models\TGBot;
use Illuminate\Http\Request;

class TGBotController extends Controller
{
    private $bot;
    public $comands = [
        'start',
        'help',
        'stats',
        'pidor',
        'me',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        Log::info('TestDebug.');
//        die;
        $bot = new \TelegramBot\Api\BotApi(env('TGBOT_TOKEN'));
        var_dump($bot);die;
        $bot->command('start', function ($message) use ($bot) {
            echo 'test';die;
            $answer = $this->start();
//            $bot->sendMessage($message->getChat()->getId(), $answer);
        });

        $bot->command('help', function ($message) use ($bot) {
            $answer = $this->help();
            $bot->sendMessage($message->getChat()->getId(), $answer);
        });

        $bot->command('pidor', function ($message) use ($bot) {
            $answer = $this->pidor();
            $bot->sendMessage($message->getChat()->getId(), $answer);
        });

        $bot->command('stats', function ($message) use ($bot) {
            $answer = $this->stats();
            $bot->sendMessage($message->getChat()->getId(), $answer);
        });

        return $bot->run();
    }

    public function start()
    {
        return 'Добро пожаловать, цветочки!';
    }

    public function help()
    {
        return 'Команды на Laravel:
                /help - вывод справки
                /pidor - Пидор дня
                /stats - Статистика пидоров за все время
                ';
    }

    public function pidor()
    {
        return 'Привет, ';
    }

    public function stats()
    {
        return 'Статистика, ';
    }

    public function create()
    {
        //
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param  \App\Models\TGBot  $tGBot
     * @return \Illuminate\Http\Response
     */
    public function show(TGBot $tGBot)
    {
        //
    }

    /**
     * @param  \App\Models\TGBot  $tGBot
     * @return \Illuminate\Http\Response
     */
    public function edit(TGBot $tGBot)
    {
        //
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TGBot  $tGBot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TGBot $tGBot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TGBot  $tGBot
     * @return \Illuminate\Http\Response
     */
    public function destroy(TGBot $tGBot)
    {
        //
    }
}
