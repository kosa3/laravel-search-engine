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
            'size' => 2000,
            'body' => [
                'query' => [
                    'match' => [
                        'title' => request('q')
                    ]
                ]
            ]
        ];

        $response = $client->search($params);

        return view('elastic.index', ['response' => $response["hits"]["hits"]]);
    }

}
