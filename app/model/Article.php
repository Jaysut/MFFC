<?php

class Article extends Illuminate\Database\Eloquent\Model
{
    public $timestamps = false;

    /**
     * 获取文章列表
     * @return Article[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getInfo()
    {
        return self::all()->toArray();
    }
}
