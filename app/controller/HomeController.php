<?php

class HomeController extends BaseController
{
    public function article()
    {
        //$articles = Article::all()->toArray();

        $articles = Article::getInfo();

        RedisService::set('key','value',5,'s');

        echo RedisService::get('key');

        require dirname(__FILE__) . '/../view/article.php';
    }

    public function home()
    {
        //$this->view = View::make('home');

        $this->view = View::make('home')->with('article',Article::getInfo())

            ->withTitle('MFFC :-D')

            ->withFuckMe('OK!');

//        $this->view = View::make('home')
//            ->with('article',Article::getInfo()->toArray())
//            ->withTitle('MFFC :-)')
//            ->withFuckMe('OK!');

    }

    public function mail()
    {
        $this->mail = Mail::to(['jaysut@163.com'])
            ->from('Jaysut <jaysut@163.com>')
            ->title('Hello')
            ->content('<h1>Hello!</h1>');
    }
}
