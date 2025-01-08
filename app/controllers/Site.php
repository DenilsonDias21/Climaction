<?php

namespace app\controllers;

use app\controllers\Base;


class Site extends Base {

    public function index($request, $response)
    {
        return $this->getTwig()->render($response, $this->setView('home'), [
            'title'     => 'Home'
        ]);
    }

}