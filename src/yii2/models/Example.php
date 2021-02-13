<?php

namespace zhanchmini\example\yii2\models;

use Yii;

/**
 * This is the model class for table "{{%example}}".
 *
 * @property int $id
 * @property string $title 标题
 * @property string|null $content 内容
 */
class Example extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%example}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', '标题'),
            'content' => Yii::t('app', '内容'),
        ];
    }
}
