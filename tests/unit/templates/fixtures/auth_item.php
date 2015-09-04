<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 9/6/15
 * Time: 11:34 AM
 *
 * @var $faker \Faker\Generator
 */

//$createdAndUpdate = $faker->dateTimeBetween( '-7 days', 'now' )->format( 'Y-m-d H:i:s' );
$createdAndUpdate = date( 'Y-m-d H:i:s' );

$authItemData = [
    [ 'name'        => 'admin',
      'type'        => 1,
      'description' => 'Admin can create branches and create companies',
      'rule_name'   => null,
      'data'        => null,
      'created_at'  => $createdAndUpdate,
      'updated_at'  => $createdAndUpdate,
    ],
    [ 'name'        => 'create-branch',
      'type'        => 1,
      'description' => 'Allow a user to add a branch',
      'rule_name'   => null,
      'data'        => null,
      'created_at'  => $createdAndUpdate,
      'updated_at'  => $createdAndUpdate,
    ],
    [ 'name'        => 'create-company',
      'type'        => 1,
      'description' => 'Allow a user to create a company',
      'rule_name'   => null,
      'data'        => null,
      'created_at'  => $createdAndUpdate,
      'updated_at'  => $createdAndUpdate,
    ],
];

if( $index < count( $authItemData ) ) {
    return $authItemData[ $index ];
} else exit( "Please set '" . preg_replace( '/\.php$/', '', basename( __FILE__ ) ) . "' --count from 1 up to " . count( $authItemData ) . PHP_EOL );