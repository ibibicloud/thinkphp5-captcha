### thinkphp5-captcha
基于 https://github.com/top-think/think-captcha/tree/v2.0.2

### 安装
~~~
composer require ibibicloud/thinkphp5-captcha
~~~

### 路由规则
~~~
Route::get('/captcha', function(){
    return captcha('', config('captcha'));
});
~~~

### 模板输出
~~~
<div>{:captcha_img()}</div>
~~~
~~~
<div><img src="{:captcha_src()}" alt="captcha" /></div>
~~~

### 手动验证
~~~
if ( !captcha_check($captcha) ) {
	// 验证失败
};
~~~