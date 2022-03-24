<?php

use Phalcon\Mvc\Controller;


class HomeController extends Controller
{
    public function indexAction()
    {
        $this->view->appname = $this->config->get("app")->get("appname");
    }
}
