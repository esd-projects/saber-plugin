<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/4/25
 * Time: 10:07
 */

namespace GoSwoole\Plugins\Saber\ExampleClass;


use GoSwoole\BaseServer\Plugins\Logger\GetLogger;
use GoSwoole\Plugins\Saber\Interceptors\BeforeInterceptor;
use Swlib\Saber\Request;

/**
 * 测试全局拦截器
 * Class TestInterceptor
 * @package GoSwoole\Plugins\Saber\ExampleClass
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