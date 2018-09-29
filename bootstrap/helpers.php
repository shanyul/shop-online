<?php
/**
 * Created by PhpStorm.
 * User: shanyu
 * Date: 2018/9/29
 * Time: 16:32
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}