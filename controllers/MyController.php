<?
namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{
    public function actionIndex()
    {
        $msg = 'Hello world!';
        return $this->render('index',compact('msg'));
    }
}