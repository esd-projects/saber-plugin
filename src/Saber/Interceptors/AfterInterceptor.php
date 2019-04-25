<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/4/25
 * Time: 9:29
 */

namespace GoSwoole\Plugins\Saber\Interceptors;

use Swlib\Saber\Response;

/**
 * before拦截器
 * Class BeforeInterceptor
 * @package GoSwoole\Plugins\Saber\Interceptors
 */
abstract class AfterInterceptor extends Interceptor
{
    public function __construct(string $name)
    {
        parent::__construct(Interceptor::AFTER);
    }

    abstract public function handle(Response $response);
}