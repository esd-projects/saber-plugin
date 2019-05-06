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

    /**
     * SaberPlugin constructor.
     * @param null $saberConfig
     * @throws \DI\DependencyException
     * @throws \ReflectionException
     */
    public function __construct($saberConfig = null)
    {
        parent::__construct();
        $this->saberConfig = $saberConfig;
        if ($this->saberConfig == null) {
            $this->saberConfig = new SaberConfig();
        }
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
     * @throws \GoSwoole\BaseServer\Server\Exception\ConfigException
     */
    public function beforeServerStart(Context $context)
    {
        $this->saberConfig->merge();
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