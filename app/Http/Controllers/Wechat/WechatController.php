<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;

class WechatController extends Controller
{
    public function serve()
    {
        $app = app('wechat');
        $app->server->setMessageHandler(function($message){
            return "欢迎关注 Everan！";
        });

        return $app->server->serve();
    }
}
