<?php
namespace devskyfly\yiiModuleVote\controllers;

use yii\web\Controller;
use devskyfly\yiiModuleVote\models\common\ModuleNavigation;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $module_navigation=new ModuleNavigation();
        $list=[$module_navigation->getData()];
        return $this->render('index',compact("list","title"));
    }
}