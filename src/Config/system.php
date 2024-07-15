<?php
return [
    [
        'key'  => 'apps',
        'name' => 'admin::app.configuration.index.general.title',
        'info' => 'admin::app.configuration.index.general.info',
        'sort' => 1,
    ], 
    [
        'key'    => 'apps.Upselling',
        'name'   => 'Upselling::app.Admin.title',
        'info'   => 'Upselling::app.Admin.info',
        'sort'   => 1,
    ],
    [
        'key'    => 'apps.Upselling.Setting',
        'name'   => 'Upselling::app.Admin.Setting.title',
        'info'   => 'Upselling::app.Admin.Setting.info',
        'sort'   => 1,
        'fields' => [
            [
                'name'          => 'active',
                'title'         => 'admin::app.configuration.index.sales.payment-methods.status',
                'type'          => 'boolean',
                'channel_based' => true,
                'locale_based'  => false,
            ]
        ]
    ],
    
];