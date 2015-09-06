<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 9/6/15
 * Time: 10:29 PM
 *
 * @var $faker \Faker\Generator
 */

$createdAndUpdate = $faker->dateTimeBetween( 'now', '+30 days' )->format('Y-m-d H:i:s');

return [
    'title'        => $faker->text,
    'text'         => $faker->paragraph,
    'created_date' => $createdAndUpdate,
];