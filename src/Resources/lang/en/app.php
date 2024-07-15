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
            'demo' => 'Upselling Demo',
            'Rules' => 'Upselling Rules',
            'Products' => 'Upselling Products',
            'Settings' => 'Upselling Settings',
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