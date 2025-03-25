<?php

/**
 * @param string $id
 * @param array  $config
 * @return \think\Response
 */
function captcha($id = '', $config = [])
{
    $captcha = new \think\Captcha($config);
    return $captcha->entry($id);
}

/**
 * @param $id
 * @return mixed
 */
function captcha_img($id = '')
{
    $src = captcha_src($id);
    return '<img title="点击刷新验证码" src="' . $src . '"' . " onclick='this.src=\"{$src}?\"+Math.random();' />";
}

/**
 * @param $id
 * @return string
 */
function captcha_src($id = '')
{
    return url('/captcha', ($id ? "/{$id}" : ''));
}

/**
 * @param $value
 * @param string $id
 * @param array  $config
 * @return bool
 */
function captcha_check($value, $id = '')
{
    $captcha = new \think\Captcha(config('captcha'));
    return $captcha->check($value, $id);
}