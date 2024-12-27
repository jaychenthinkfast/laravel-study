<?php
return [

// defaults 配置 Auth 认证的守卫
// 例如目前我们这个系统就是用 `App\Modeles\User` 模型来认证用户
// 默认 guard 守卫是 web （就当做一个名字好了）
'defaults' => [
    'guard' => env('AUTH_GUARD', 'web'),
    'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
],


/**
 * 守卫数组，每个守卫对应一个认证模型
 */
'guards' => [
    'web' => [
        'driver' => 'session', // 驱动使用 session 会话，如果是 api 项目，这里可能配置就是 JWT
        'provider' => 'users', // 认证服务提供者
    ],
],

/**
 * 认证服务提供者，说白了，这里就是确定你使用哪个数据源的
 *
 * 驱动可以是 database、eloquent、token、remember、hash
 */
'providers' => [
    'users' => [
        'driver' => 'eloquent', // 我们这里就是使用 Eloquent 模型来认证用户
        'model' => env('AUTH_MODEL', App\Models\User::class),
    ],

    // 'users' => [
    //     'driver' => 'database',
    //     'table' => 'users',
    // ],
],
];