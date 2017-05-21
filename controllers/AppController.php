<?php
/**
 * Created by PhpStorm.
 * User: aleksandrcerkasov
 * Date: 17.05.17
 * Time: 22:10
 */

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller
{
       public function debug($arr) {
           echo '<pre>' . print_r($arr, true) . '</pre>';
       }
}
