<?php

namespace app\models\admin;


use app\models\AppModel;

class ProjectEdit extends AppModel {

    public $attributes = [
        'title' => '',
        'cat_id' => '',
        'description' => '',
        'task' => '',
        'design' => '',
        'responsive' => '',
        'color_1' => '',
        'color_2' => '',
        'video_small' => '',
        'customer_name' => '',
        'customer_review' => '',
        'url' => '',
        'status' => '',
    ];


    public $rules = [
        'required' => [
            ['title'],
            ['cat_id'],
            ['description'],
            ['color_1'],
            ['color_2'],
            ['video_small'],
            ['customer_name'],
            ['customer_review'],
            ['url'],
        ],
        'integer' => [
            ['status'],
            ['cat_id'],
        ],
        'url' => [
            ['url'],
        ],

    ];



}