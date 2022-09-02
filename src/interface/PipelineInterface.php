<?php

/**
 * 流水线的接口
 * Interface PipelineInterface
 */
interface PipelineInterface
{
    public function __construct($payLoad);

    public function pipe(StageInterface $stage);

    public function process();
}
