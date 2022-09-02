<?php

/**
 *创建一个流水线管道
 * Class Pipeline
 */
class Pipeline implements PipelineInterface
{

    /**
     * 创建一个接受所有过滤器的数组
     * @var
     */
    private $pipes;

    /**
     * 流水线中流转的值
     * @var
     */
    private $payLoad;

    /**
     * 定一个中断流水线的常量
     * @var bool
     */
    protected $isComplated = false;

    public function __construct($payLoad)
    {
        $this->payLoad = $payLoad;
    }

    /**
     * Date: 2022/9/2 下午6:23
     * @param StageInterface $stage
     * @return $this
     * @author clearSwitch
     */
    public function pipe(StageInterface $stage)
    {
        $this->pipes[] = $stage;
        return $this;
    }

    /**
     * Date: 2022/9/2 下午6:23
     * @return mixed
     * @author clearSwitch
     */
    public function process()
    {
        foreach ($this->pipes as $eachPipe) {
            if ($this->isComplated !== true) {
                $this->payLoad = call_user_func([
                    $eachPipe,
                    'handle'
                ], $this->payLoad);
            }
        }
        $this->isComplated = true;
        return $this->payLoad;
    }

    /**
     * 中断流水线
     * @author clearSwitch
     */
    public function break()
    {
        $this->isComplated = true;
    }
}