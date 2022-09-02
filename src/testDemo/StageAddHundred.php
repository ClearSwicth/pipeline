<?php
/**
 *
 * User: daikai
 * Date: 2022/9/2
 */

class StageAddHundred implements StageInterface
{

    public function handle($payLoad)
    {
        echo "StageAddHundred<pre>";
        return $payLoad + 100;
    }
}