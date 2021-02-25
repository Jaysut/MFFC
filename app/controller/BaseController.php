<?php

class BaseController
{
    public $view;

    public function __construct()
    {

    }

    public function __destruct()
    {
        $view = $this->view;

        if ($view instanceof View) {
            echo 'yes';
            extract($view->data);
            require $view->view;
        } else {
            echo 'no';
        }
    }
}
