<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 9/6/15
 * Time: 4:06 PM
 */
use backend\models\AuthItem;
use backend\models\User;


// Find all users first, else it will stop the script
if( ! empty( $getAllUsers = User::find()->all() ) ) {

    // Find all auth items first, else it will stop the script
    if( ! empty( $getAllAuthItems = AuthItem::find()->all() ) ) {
        foreach( $getAllAuthItems as $authItems ) {
            $allAuthItems[] = $authItems->name;
        }
    } else exit( "No 'auth item' data in '" . AuthItem::tableName() . "' table." . PHP_EOL );

    // Check if 'admin' exists, else stop the script
    if( in_array( 'admin', $allAuthItems ) ) {
        $getAdminOnly = array_search( 'admin', $allAuthItems );
    } else exit( "Create an 'admin' first in " . AuthItem::tableName() . " table" . PHP_EOL );

    // Random created/updated dates
    $created = $faker->dateTimeBetween( '-7 days', 'now' )->format( 'Y-m-d H:i:s' );

    foreach( $getAllUsers as $user ) {
        // Well, search me first before anything else :D
        if( $user->username === 'vrigzalejo' ) {
            $seedAuthAssignment[] = [
                'item_name'  => $allAuthItems[ $getAdminOnly ],
                'user_id'    => $user->id,
                'created_at' => $created,
            ];
        } else {
            $seedAuthAssignment[] = [
                'item_name'  => $allAuthItems[ array_rand( $allAuthItems ) ],
                'user_id'    => $user->id,
                'created_at' => $created,
            ];
        }
    }

    // Database seed the 'auth_assignment' table according to users number
    if( $index < count( $getAllUsers ) ) {
        return $seedAuthAssignment[ $index ];
    } else exit( "Please set '" . preg_replace( '/\.php$/', '', basename( __FILE__ ) ) . "' --count from 1 up to " . count( $getAllUsers ) . PHP_EOL );


} else exit( "No 'user' data in '" . User::tableName() . "' table." . PHP_EOL );