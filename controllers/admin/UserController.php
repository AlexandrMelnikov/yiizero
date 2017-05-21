<?php
/**
 * Created by PhpStorm.
 * User: aleksandrcerkasov
 * Date: 17.05.17
 * Time: 0:31
 */

namespace app\controllers\admin;
use app\controllers\AppController;
//use yii\web\Controller;


class UserController extends AppController
{
public function actionIndex()
{
    return $this->render('index');
}
}