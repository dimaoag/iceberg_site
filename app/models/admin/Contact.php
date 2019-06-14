<?php
namespace app\models\admin;

use app\models\AppModel;

/**
 * @property int $id
 * @property string $address
 * @property string $email
 * @property string $phone_1
 * @property string $phone_2
 * @property string $phone_3
 * @property string $telegram
 * @property string $whatsapp
 * @property string $behance
 *
 */

class Contact extends AppModel {

    public $attributes = [
        'address' => '',
        'email' => '',
        'phone_1' => '',
        'phone_2' => '',
        'phone_3' => '',
        'telegram' => '',
        'whatsapp' => '',
        'behance' => ''
    ];

    public $rules = [
        'required' => [
            ['address'],
            ['email'],
            ['telegram'],
            ['whatsapp'],
            ['behance']
        ],
        'email' => [
            ['email'],
        ],
        'integer' => ['phone_1', 'phone_2', 'phone_3']

    ];


}