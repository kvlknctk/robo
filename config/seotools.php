<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Robotaryum Otomasyon", // set false to total remove
            'description'  => 'Robotaryum Otomasyon Eskişehir ilinde faaliyet gösteren, robot sanayisinde yaratıcı çözümler sunan yenilikçi bir firmadır. ', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['eskişehir otomasyon', 'eskişehir robot', 'eskişehir fabrika otomasyon', 'robot otomasyonları', 'robotik çözümler'],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'        => "Robotaryum Otomasyon", // set false to total remove
            'description'  => 'Robotaryum Otomasyon Eskişehir ilinde faaliyet gösteren, robot sanayisinde yaratıcı çözümler sunan yenilikçi bir firmadır. ', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          //'card'        => 'summary',
          //'site'        => '@LuizVinicius73',
        ],
    ],
];
