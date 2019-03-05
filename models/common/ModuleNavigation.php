<?php
namespace devskyfly\yiiModuleVote\models\common;

use devskyfly\yiiModuleAdminPanel\models\common\AbstractModuleNavigation;

class ModuleNavigation extends AbstractModuleNavigation
{
    protected function moduleRoute()
    {
        return "/module-feedback/";
    }

    protected function moduleList()
    {
        return
        [
            ['name'=>'Сценарии "УЦ"','route'=>'/module-feedback/vote/'],
        ];
    }

    protected function moduleName()
    {
        return 'iit-docs';
    }

}