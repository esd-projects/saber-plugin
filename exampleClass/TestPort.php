<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/4/24
 * Time: 18:21
 */

namespace ESD\Plugins\Saber\ExampleClass;
use ESD\Core\Server\Beans\Request;
use ESD\Core\Server\Beans\Response;
use ESD\Server\Co\ExampleClass\Port\DefaultPort;
use Swlib\SaberGM;

class TestPort extends DefaultPort
{
    public function onHttpRequest(Request $request, Response $response)
    {
        $response->end(SaberGM::get("192.168.1.200/info"));
    }
}