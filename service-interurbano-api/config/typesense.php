<?php

return [
    'api_key'  => env('TYPESENSE_API_KEY', 'xyz'),
    'nodes'    => [
        [
            'host'     => 'typesense',
            'port'     => env('TYPESENSE_PORT', '8108'),
            'protocol' => env('TYPESENSE_PROTOCOL', 'http'),
        ],
    ],
    'connection_timeout_seconds'   => 2,
    'healthcheck_interval_seconds' => 30,
];