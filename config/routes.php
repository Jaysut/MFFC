<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('/fuck',function() {
    echo 'Fuck~';
});

Macaw::get('',function() {
    echo 'Hello~';
});

Macaw::get('article','HomeController@article');

//Macaw::get('','HomeController@home');

Macaw::$error_callback = function () {
    throw new Exception("未匹配到路由 404 Not Found");
};

//Macaw::get('(:all)',function($fu) {
//    echo '未匹配到路由:'.$fu;
//});

Macaw::dispatch();
