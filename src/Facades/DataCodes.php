<?php
/**
 * Copyright (C), 2021-2021, https://github.com/lwlzq/dataCodec.git.
 * FileName: DataCodes.php
 * Description: 说明
 *
 * @author lwl
 * @Create Date    2021/9/4 17:08
 * @Update Date    2021/9/4 17:08 By lwl
 * @version v1.0
 */
namespace Liuweiliang\DataCodes\Facades;
use Illuminate\Support\Facades\Facade;
class DataCodes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'DataCodesFacade';
    }
}