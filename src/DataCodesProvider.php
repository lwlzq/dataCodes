<?php
/**
 * Copyright (C), 2021-2021, https://github.com/lwlzq/dataCodec.git.
 * FileName: DataCodesProvider.php
 * Description: 发布服务
 *
 * @author lwl
 * @Create Date    2021/9/4 17:01
 * @Update Date    2021/9/4 17:01 By lwl
 * @version v1.0
 */


namespace Liuweiliang\DataCodes;

use Illuminate\Support\ServiceProvider;
use Liuweiliang\DataCodes\Constants\DataCodecConstant;
use Liuweiliang\DataCodes\Services\DataCodeService;

class DataCodesProvider extends ServiceProvider
{
    /**
     * FunctionName：boot
     * Description：发布配置文件
     * Author：lwl
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Config/datacodes.php' => config_path('datacodes.php'),
        ]);
    }

    /**
     * FunctionName：register
     * Description：注册
     * Author：lwl
     */
    public function register()
    {
        //单例
        $this->app->singleton('datacodes', function ($app) {
            return new DataCodeService($app['config']);
        });

        //使用bind绑定实例到接口以便依赖注入
        $this->app->bind(DataCodecConstant::class, function () {
            return new DataCodeService();
        });
    }
}
