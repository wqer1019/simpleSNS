<?php

/*
 * add .styleci.yml
 */

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    // 默认密码
    static $password = 'admin';

    // 手机号前缀
    static $mobileSegment = [
        '134', '135', '136', '137', '138', '139', '150', '151', '152', '157', '130', '131', '132', '155', '186', '133', '153', '189',
    ];

    $prefix = $mobileSegment[array_rand($mobileSegment)];
    $middle = mt_rand(2000, 9000);
    $suffix = mt_rand(2000, 9000);

    return [
        'nickname'        => snake_case($faker->userName),
        'name'            => snake_case($faker->userName),
        'username'        => snake_case($faker->userName),
        'tel_num'         => $prefix . $middle . $suffix,
        'email'           => $faker->unique()->safeEmail,
        'company'         => $faker->company,
        'city'            => $faker->address,
        'introduction'    => $faker->text(30),
        'password'        => bcrypt(config('sns.default_user_password') ?? $password),
        'last_actived_at' => \Carbon\Carbon::now(),
        'created_at'      => \Carbon\Carbon::now(),
        'updated_at'      => \Carbon\Carbon::now(),
    ];
});
