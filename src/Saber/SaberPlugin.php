<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/4/24
 * Time: 17:57
 */

namespace GoSwoole\Plugins\Saber;

use GoSwoole\BaseServer\Server\Context;
use GoSwoole\BaseServer\Server\Plugin\AbstractPlugin;
use Swlib\SaberGM;

class SaberPlugin extends AbstractPlugin
{
    /**
     * @var SaberConfig
     */
    private $saberConfig;

    public function __construct($saberConfig = null)
    {
        parent::__construct();
        $this->saberConfig = $saberConfig;
    }

    /**
     * 获取插件名字
     * @return string
     */
    public function getName(): string
    {
        return "Saber";
    }

    /**
     * 在服务启动前
     * @param Context $context
     * @return mixed
     */
    public function beforeServerStart(Context $context)
    {
        if ($this->saberConfig == null) {
            $this->saberConfig = new SaberConfig();
        }
        SaberGM::default($this->saberConfig->buildConfig());
    }

    /**
     * 在进程启动前
     * @param Context $context
     * @return mixed
     */
    public function beforeProcessStart(Context $context)
    {
        $this->ready();
    }

    /**
     * @return SaberConfig
     */
    public function getSaberConfig(): SaberConfig
    {
        return $this->saberConfig;
    }

    /**
     * @param SaberConfig $saberConfig
     */
    public function setSaberConfig(SaberConfig $saberConfig): void
    {
        $this->saberConfig = $saberConfig;
    }
}