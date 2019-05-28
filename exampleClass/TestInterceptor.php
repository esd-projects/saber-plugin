<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/4/25
 * Time: 10:07
 */

namespace ESD\Plugins\Saber\ExampleClass;

use ESD\Core\Plugins\Logger\GetLogger;
use ESD\Plugins\Saber\Interceptors\BeforeInterceptor;
use Swlib\Saber\Request;

/**
 * 测试全局拦截器
 * Class TestInterceptor
 * @package ESD\Plugins\Saber\ExampleClass
 */
class TestInterceptor extends BeforeInterceptor
{
    use GetLogger;

    public function handle(Request $request)
    {
        $this->info($request->getUri()->getPath());
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "test";
    }
}