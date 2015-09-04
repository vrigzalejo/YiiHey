<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 9/6/15
 * Time: 1:58 PM
 */

use backend\models\AuthItem;

// Search for 'admin' name in auth_item table first
if( ! empty( $authItem = AuthItem::find()->where( [ 'name' => 'admin' ] )->one() ) ) {

    // Find all auth_items except 'admin'
    foreach( $allAuthItems = AuthItem::find()->all() as $aItem ) {
        if( $aItem->name !== 'admin' ) {
            $authItemChildData[] = [ 'parent' => $authItem->name, 'child' => $aItem->name, ];
        }
    }

    // Db seed auth_item_child according to parent-child relationship
    if( $index < count( $allAuthItems ) - 1 ) {
        return $authItemChildData[ $index ];
    } else exit( "Please set '" . preg_replace( '/\.php$/', '', basename( __FILE__ ) ) . "' --count from 1 up to " . count( $authItemChildData ) . PHP_EOL );

} else exit( "No 'admin' data in '" . AuthItem::tableName() . "' table." . PHP_EOL );