<?php


namespace app\controllers;


use ishop\base\Controller;
use ishop\Cache;

class MainController extends AppController
{


    public function indexAction()
    {
        $this->setMeta("Главная страница", 'писание...', 'Ключевики');
    }
}