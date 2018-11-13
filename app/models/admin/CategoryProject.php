<?php

namespace app\models\admin;


use app\models\AppModel;

class CategoryProject extends AppModel {

    public $attributes = [
        'title' => '',
        'status' => '',
    ];


    public $rules = [
        'required' => [
            ['title'],
        ],
        'integer' => [
            ['status'],
        ],

    ];



}