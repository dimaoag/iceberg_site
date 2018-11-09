<?php

namespace app\models\admin;


use app\models\AppModel;

class ArticleEdit extends AppModel {

    public $attributes = [
        'title' => '',
        'description' => '',
        'is_show' => '',
        'status' => '',
    ];


    public $rules = [
        'required' => [
            ['title'],
            ['description'],
        ],
        'integer' => [
            ['is_show'],
            ['status'],
        ],

    ];



}