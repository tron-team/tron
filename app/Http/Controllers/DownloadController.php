<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function getAutoLink(Request $request)
    {
        $ua = $request->header('User-Agent');

        $isWechat = (preg_match('/MicroMessenger/', $ua) or preg_match('/QQ\//', $ua));

        if (preg_match('/iPad/', $ua)) {
            $link = $this->ipad();
        } elseif (preg_match('/iPhone|iPod/', $ua)) {
            $link = $this->iphone($isWechat);
        } elseif (preg_match('/Android/', $ua)) {
            $link = $this->android($isWechat);
        } else {
            $link = redirect('http://www.shengri.cn');
        }

        return $link;
    }

    public function android($isWechat = false)
    {
        if ($isWechat) {
            $url = 'http://a.app.qq.com/o/simple.jsp?pkgname=com.octinn.birthdayplus';
        } else {
            $apiFetcher = \App::make('oi.api');
            $apiUri = 'https://api.octinn.com/version/latest';
            $data = $apiFetcher('GET', $apiUri, ['appid' => 1002]);
            if (isset($data->url)) {
                $url = $data->url;
            } else {
                $url = 'http://m.shengri.cn';
            }
        }

        return redirect($url);
    }

    public function iphone($isWechat = false)
    {
        if ($isWechat) {
            $url = 'http://um0.cn/32p7zk';
        } else {
            $url = 'http://um0.cn/AnXrBJ';
        }

        return redirect($url);
    }

    public function iPad()
    {
        $url = 'http://itunes.apple.com/cn/app/id606878734?mt=8';

        return redirect($url);
    }
}
