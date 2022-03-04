<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Models\ChatUser;
use App\Models\TGBot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

        $this->updateUser();
        die;

        $bot = new \TelegramBot\Api\Client(env('TGBOT_TOKEN'));

        $bot->command('start', function ($message) use ($bot) {
            $answer = $this->start();
            $bot->sendMessage($message->getChat()->getId(), $answer);
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

        try {
            $bot->run();
        } catch (\Exception $e) {
            Log::debug($e->getMessage());
        }

        die;
    }

    public function start()
    {
        return 'Добро пожаловать, цветочки!';
    }

    public function help()
    {
        return 'Доступные команды:
            /help - вывод справки
            /pidor  - Пидор дня
            /stats - Статистика пидоров за все время
            /updateList - Обновить список пользователей
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

    public function updateChat()
    {
        $chatId = 'test_1';
        $chatName = 'test_1';
        if ($model = Chat::where('chat_id', $chatId)->first()) {
            var_dump($model);
        } else {
            $model = new Chat();
            $model->chat_id = $chatId;
            $model->name = $chatName;
            $model->description = 'Test_model';

            if ($model->save()) {
                echo 'Сохранен';
            } else {
                echo 'Ошибка при сохранении';
            }

        }
    }

    public function updateUser()
    {
        $chatId = 1;
        $username = 'testUsername_1';
        $login = 'testLogin_1';

        if ($model = ChatUser::where('username', $username)->first()) {
            var_dump($model);
        } else {
            $model = new ChatUser();
            $model->chat_id = $chatId;
            $model->username = $username;
            $model->login = $login;

            if ($model->save()) {
                echo 'Сохранен';
            } else {
                echo 'Ошибка при сохранении';
            }

        }
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
