<?php

class HomeController extends BaseController
{
    public function article()
    {
        //$articles = Article::all()->toArray();

        $articles = Article::getInfo()->toArray();

        require dirname(__FILE__) . '/../view/article.php';
    }
}
