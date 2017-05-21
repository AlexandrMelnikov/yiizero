<?php
/**
 * Created by PhpStorm.
 * User: aleksandrcerkasov
 * Date: 16.05.17
 * Time: 22:24
 */

namespace app\controllers;




class MyController extends AppController
{
    public function actionIndex($id=null) {
        $hi='Hello, World!';
        $names=['Ivanov', 'Petrov', 'Sidorov'];
        if (!$id) $id = "testing";
      // return $this->render('index',['hello' => $hi, 'names' => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }
    public function actionBlogPost(){
        return 'Blog Post';
    }
}