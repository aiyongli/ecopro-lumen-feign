<?php

namespace Ecopro\Feign;

use Ecopro\Feign\Concerns\Growell;
use Ecopro\Http\Concerns\Base;

/**
 * 内部携带基本认证的远程请求
 */
class Broker
{
    use Base, Growell;

    public function __construct()
    {
        $this->init();
        $this->setTimeout(5);
        $this->setAuthorization("Basic " . base64_encode(env('HTTP_BASIC_AUTH')));
    }

}
