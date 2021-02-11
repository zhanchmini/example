<?php

namespace zhanchmini\example\yii2\actions;

use yii\base\Action;
use zhanchmini\example\common\Index;

class IndexAction extends Action
{
    /**
     * Runs the action
     *
     * @return array
     */
    public function run()
    {
        return (new Index())->run();
    }
}
