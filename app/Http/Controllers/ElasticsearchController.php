<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elasticsearch\ClientBuilder;

class ElasticsearchController extends Controller
{
    public function search()
    {
        $client = ClientBuilder::create()->build();

        $params = [
            'index' => 'kuchikomi',
            'type' => 'article',
            'body' => [
                'query' => [
                    'match' => [
                        'comment' => request('q')
                    ]
                ]
            ]
        ];

        $response = $client->search($params);
        dd($response);
    }

}
