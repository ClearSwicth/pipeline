<?php
/**
 *
 * User: daikai
 * Date: 2022/9/2
 */

class StageMultiHundred implements StageInterface
{

    public function handle($payLoad)
    {
        echo "StageMultiHundred<pre>";
        return $payLoad * 100;
    }
}