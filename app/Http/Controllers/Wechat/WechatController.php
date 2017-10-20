<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Controllers\Controller;

class WechatController extends Controller
{
    public function serve()
    {
        $app = app('wechat');
        $userApi = $app->user();
        $app->server->setMessageHandler(function($message) use ($userApi) {
            switch ($message->MsgType) {
                case 'event':
                    return '收到事件消息';
                    break;
                case 'text':
                    return '你好：'.$userApi->get($message->FromUserName)->nickname;
                    break;
                case 'image':
                    return '收到图片消息';
                    break;
                case 'voice':
                    return '收到语音消息';
                    break;
                case 'video':
                    return '收到视频消息';
                    break;
                case 'location':
                    return '收到坐标消息';
                    break;
                case 'link':
                    return '收到链接消息';
                    break;
                // ... 其它消息
                default:
                    return '收到其它消息';
                    break;
            }
        });

        return $app->server->serve();
    }
}
