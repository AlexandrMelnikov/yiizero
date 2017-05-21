<?php
/**
 * Created by PhpStorm.
 * User: aleksandrcerkasov
 * Date: 21.05.17
 * Time: 11:00
 */

namespace app\models;
use yii\base\Model;

class TestForm extends Model
{
   public $name;
   public $email;
   public $text;

   public function attributeLabels()
   {
       return [
          'name' => 'Имя',
           'name' => 'E-mail',
           'name' => 'Текст сообщения',
       ];
   }
   public function rules()
   {
       return [
           [['name', 'email'], 'required'],
           ['email', 'email'],
//           ['name', 'string', 'min' => 2, 'tooShort' => 'Мало'],
//           ['name', 'string', 'max' => 5, 'tooShort' => 'Много']
             ['name', 'string', 'length' => [2, 5]],
             ['name', 'myRule'],
          //   ['text', 'trim'],
       ];
   }

   public function myRule($attr){
       if( !in_array($this -> $attrs,['hello', 'world']) ) {
           $this->addError($attrs, 'Wrong!');
       }
   }

}