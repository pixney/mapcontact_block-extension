<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PixneyExtensionMapcontactBlockCreateMapcontactBlockFields extends Migration
{
    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'offices' => [
            'type'   => 'anomaly.field_type.repeater',
            'config' => [
                'related' => 'Anomaly\Streams\Platform\Model\Repeater\RepeaterOfficesEntryModel',
                'max'     => null,
                'min'     => null,
                'add_row' => 'anomaly.field_type.repeater::button.add_row',
            ]
        ],
    ];
}
