<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-07-12 15:48:01
 * @link https://github.com/xxxl4
 * 
 */
return [
    'Admin' => [
        'Upselling' => [
            'demo' => 'Upselling Admin Demo',
        ],
        'title' => 'Upselling Admin',
        'info' => 'Upselling Admin Info',
        'Setting' => [
            'title' => 'Upselling Admin Setting',
            'info' => 'Upselling Admin Setting Info',
            'fields' => [
                [
                    'name' => 'clientEmail',
                    'title' => 'Upselling::app.system.clientEmail',
                    'type' => 'text',
                    'channel_based' => true,
                    'locale_based' => false,
                ],
                [
                    'name' => 'clientPassword',
                    'title' => 'Upselling::app.system.clientPassword',
                    'type' => 'text',
                    'info' => 'Upselling::app.system.clientPassword',
                    'channel_based' => true,
                    'locale_based' => false,
                ],
                [
                    'name' => 'accountId',
                    'title' => 'Upselling::app.system.accountId',
                    'type' => 'text',
                    'info' => 'Upselling::app.system.accountId',
                    'channel_based' => true,
                    'locale_based' => false,
                ],
                [
                    'name' => 'clientId',
                    'title' => 'Upselling::app.system.clientId',
                    'type' => 'text',
                    'validation' => 'required_if:active,1',
                    'info' => 'Upselling::app.system.clientId',
                    'channel_based' => true,
                    'locale_based' => false,
                ],
                [
                    'name' => 'apiKey',
                    'title' => 'Upselling::app.system.apiKey',
                    'type' => 'text',
                    'validation' => 'required_if:active,1',
                    'info' => 'Upselling::app.system.apiKey',
                    'channel_based' => true,
                    'locale_based' => false,
                ],
            ],
        ],
    ],
    'Shop' => [
        'Upselling' => [
            'demo' => 'Upselling::app.shop.Upselling.demo',
        ],
    ],
    'Api' => [
        'Upselling' => [
            'demo' => 'Upselling::app.Api.Upselling.demo',
        ],
    ],
];