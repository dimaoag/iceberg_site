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

    public function absAction()
    {
        $metaTitle = 'ABC SOCK';
        $this->setMeta($metaTitle);
    }

    public function doorHouseAction()
    {
        $metaTitle = 'Door House';
        $this->setMeta($metaTitle);
    }

    public function ecoLookAction()
    {
        $metaTitle = 'Eco.look';
        $this->setMeta($metaTitle);
    }

    public function giviStudioAction()
    {
        $metaTitle = 'Givi Studio';
        $this->setMeta($metaTitle);
    }

    public function selfsaveAction()
    {
        $metaTitle = 'SELFSAVE';
        $this->setMeta($metaTitle);
    }

}