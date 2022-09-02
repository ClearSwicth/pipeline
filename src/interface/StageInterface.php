<?php

/**
 * 流水线中的过滤器接口
 * Interface StageInterface
 */
interface StageInterface
{
    public function handle($payLoad);
}