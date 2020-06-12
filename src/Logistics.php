<?php

namespace Lijiananha\Logistics;

use GuzzleHttp\Client;

class Logistics
{
    public function query($number)
    {
        $appkey = config('services.logistics.key');//你的appkey

        $url = 'https://api.jisuapi.com/express/query';

        $query = array_filter([
            'appkey' => $appkey,
            'type'   => 'auto',
            'number' => $number
        ]);
        $client = new Client();

        try {
            $result = $client->request('get', $url,[
                'query' => $query
            ])->getBody()->getContents();

            return $result;
        }catch (\Exception $e){
            throw new \Exception('物流http请求错误'.$e);
        }
    }
}
