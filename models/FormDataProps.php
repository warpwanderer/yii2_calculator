<?php
 
namespace app\models;
 
use yii\base\Model;
 
 
class FormDataProps extends Model
{
    public $type;
    public $tonnage;
    public $months;
 
    public function rules()
    {
        return [
            [['type', 'tonnage', 'months'],'safe'],
            [['type', 'tonnage', 'months'], 'required', 
            'message' => 'Пожалуйста, заполните все поля'],
        ];
 
    }
}