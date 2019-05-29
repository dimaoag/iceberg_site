<?php
namespace app\controllers;


class PortfolioController extends AppController
{

    public function indexAction()
    {
        $metaTitle = 'Портфолио';
        $this->setMeta($metaTitle);
//        $this->setData(compact('services', 'jobs', 'isShowJobBtn', 'offset', 'employees', 'contact'));
    }


}