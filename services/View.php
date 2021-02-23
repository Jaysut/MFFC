<?php

class View
{
    const VIEW_BASE_PATH = '/app/view';

    public $view;
    public $data;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public static function make($viewName = null)
    {
        if (!$viewName) throw new InvalidArgumentException('视图名称不能为空！');

        $viewFilePath = self::getFilePath($viewName);

        if (is_file($viewFilePath)) {
            return $viewFilePath;
        } else {
            throw new UnexpectedValueException('视图文件不存在');
        }
    }
}
