<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $id
 * @property string  $title
 * @property string  $text
 * @property string  $created_date
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [ [ 'title', 'text' ], 'required' ],
            [ [ 'text' ], 'string' ],
            [ [ 'created_date' ], 'safe' ],
            [ [ 'title' ], 'string', 'max' => 100 ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'           => 'ID',
            'title'        => 'Title',
            'text'         => 'Text',
            'created_date' => 'Created Date',
        ];
    }
}
