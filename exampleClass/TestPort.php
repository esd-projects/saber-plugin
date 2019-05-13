<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/4/24
 * Time: 18:21
 */

namespace ESD\Plugins\Saber\ExampleClass;
use ESD\BaseServer\ExampleClass\Server\DefaultServerPort;
use ESD\BaseServer\Server\Beans\Request;
use ESD\BaseServer\Server\Beans\Response;
use Swlib\SaberGM;

class TestPort extends DefaultServerPort
{
    public function onHttpRequest(Request $request, Response $response)
    {
        $response->end(SaberGM::get("192.168.1.200/info"));
    }
}