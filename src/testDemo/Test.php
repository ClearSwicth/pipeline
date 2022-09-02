<?php
/**
 *
 * User: daikai
 * Date: 2022/9/2
 */

class Test
{
    public function run()
    {
        $payLoad = 10;
        $stageAddHundred = new StageAddHundred();
        $stageMultiHundred = new StageMultiHundred();
        $pipe = new Pipeline($payLoad);
        return $pipe->pipe($stageAddHundred)
            ->pipe($stageMultiHundred)
            ->process();
    }
}