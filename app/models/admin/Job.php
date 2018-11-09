<?php

namespace app\models\admin;


use app\models\AppModel;

class Job extends AppModel {

    public $attributes = [
        'name' => '',
        'status' => '',
    ];


    public $rules = [
        'required' => [
            ['name'],
        ],
        'integer' => [
            ['status'],
        ],

    ];

}