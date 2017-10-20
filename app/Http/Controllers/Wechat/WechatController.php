<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;

class WechatController extends Controller
{
    public function serve()
    {
        $app = app('wechat');
        $app->server->push(function($message){
            return "欢迎关注 everan！";
        });

        return $app->server->serve();
    }
}
