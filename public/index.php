<?php
use Illuminate\Database\Capsule\Manager as Capsule;

// 定义PUBLIC_PATH
define('PUBLIC_PATH',__DIR__);

// 初始化
require PUBLIC_PATH . '/../bootstrap.php';

// 路由配置
require BASE_PATH . '/config/routes.php';
