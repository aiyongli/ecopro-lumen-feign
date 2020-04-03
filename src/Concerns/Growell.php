<?php
namespace Ecopro\Feign\Concerns;


trait Growell
{
    /**
     * 使用全局配置基础URI地址
     * @return static
     */
    public function config()
    {
        return $this->setBaseUri(env('APP_CONFIG_BASE_URI'));
    }

    /**
     * 使用天气服务基础URI地址
     * @return static
     */
    public function weather()
    {
        return $this->setBaseUri(env('APP_WEATHER_BASE_URI'));
    }

    /**
     * 使用微信服务基础URI地址
     * @return static
     */
    public function wechat()
    {
        return $this->setBaseUri(env('APP_WECHAT_BASE_URI'));
    }

    /**
     * 使用素材服务基础URI地址
     * @return static
     */
    public function assets()
    {
        return $this->setBaseUri(env('APP_ASSETS_BASE_URI'));
    }

    /**
     * 使用SSO服务基础URI地址
     * @return static
     */
    public function sso()
    {
        return $this->setBaseUri(env('APP_SSO_BASE_URI'));
    }

    /**
     * 使用业务日志服务基础URI地址
     * @return static
     */
    public function logging()
    {
        return $this->setBaseUri(env('APP_LOGGING_BASE_URI'));
    }

}
