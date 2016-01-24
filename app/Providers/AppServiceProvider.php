<?php

namespace app\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
        $this->registerOiApiFetcher();
    }

    public function registerOiApiFetcher()
    {
        $this->app->singleton('oi.api', function () {
            $apiFetcher = function ($httpMethod, $apiUri, $params = null) {
                $client = new \GuzzleHttp\Client();

                $options = [
                    'headers' => [
                        'OI-APPKEY' => env('OI_API_KEY'),
                        'Content-Type' => 'application/json',
                        'OI-UDID' => '00000000000000000000000000000000',
                        'OI-APIVER' => env('OI_API_VERSION'),
                    ],
                ];

                if ($params) {
                    $options['query'] = $params;
                }

                $res = $client->request($httpMethod, $apiUri, $options);
                if ($res->getStatusCode() != \Symfony\Component\HttpFoundation\Response::HTTP_OK) {
                    return false;
                }

                return json_decode($res->getBody());
            };

            return $apiFetcher;
        });
    }
}
