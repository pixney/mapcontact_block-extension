<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionMapcontactBlockCreateOfficesStream extends Migration
{
    protected $namespace ='repeater';

    protected $stream = [
        'slug'         => 'offices',
        'name'         => 'offices',
        'translatable' => true,
        'versionable'  => false,
    ];

    protected $assignments = [
        'lat', 'long', 'address', 'phone', 'country', 'headquarter'
    ];
    protected $fields = [
        'address' => [
            'type'   => 'anomaly.field_type.wysiwyg',
            'name'   => 'Address',
            'locked' => false,
            'config' => [
                'default_value' => null,

                'buttons' => [
                    // 'bold',
                    // 'italic',
                    // 'lists',
                    // 'link',
                    // 'underline',
                ],
                'configuration' => '',
                'plugins'       => ['alignment', 'source'],
                'line_breaks'   => false,
                'sync'          => true,
                'height'        => 300,
            ]
        ],
        'phone' => [
            'type'   => 'anomaly.field_type.text',
            'name'   => 'Phone',
            'locked' => false
        ],
        'country' => [
            'type'   => 'anomaly.field_type.text',
            'name'   => 'Country',
            'locked' => false
        ],
        'lat' => [
            'type'   => 'anomaly.field_type.text',
            'name'   => 'Latitude',
            'locked' => false
        ],
        'long' => [
            'type'   => 'anomaly.field_type.text',
            'name'   => 'Longitude',
            'locked' => false
        ],
        'headquarter' => [
            'type'   => 'anomaly.field_type.boolean',
            'name'   => 'Is it a headquarter',
            'locked' => false
        ],
    ];
}
