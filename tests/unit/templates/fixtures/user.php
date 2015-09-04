<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 9/4/15
 * Time: 10:14 PM
 *
 * @var $faker \Faker\Generator
 */

$createdAndUpdate = $faker->dateTimeBetween( '-7 days', 'now' )->getTimestamp();
$isNotIndexZero   = $index > 0;

return [
    'first_name'    => ( $isNotIndexZero ) ? $faker->firstName : 'Vrigz',
    'last_name'     => ( $isNotIndexZero ) ? $faker->lastName : 'Alejo',
    'username'      => ( $isNotIndexZero ) ? $faker->userName : 'vrigzalejo',
    'auth_key'      => Yii::$app->getSecurity()->generateRandomString(),
    'password_hash' => Yii::$app->getSecurity()->generatePasswordHash( 'vrigzalejo' ),
    'email'         => ( $isNotIndexZero ) ? $faker->email : 'vrigzalejo@vrigzalejo.com',
    'status'        => 10,
    'created_at'    => $createdAndUpdate,
    'updated_at'    => $createdAndUpdate,
];