<?php
/**
 * Copyright (C), 2021-2021, https://github.com/lwlzq/dataCodec.git.
 * FileName: DataCodeConstant.php
 * Description: 契约层
 *
 * @author lwl
 * @Create Date    2021/9/4 16:35
 * @Update Date    2021/9/4 16:35 By lwl
 * @version v1.0
 */

namespace Liuweiliang\DataCode\Constants;

interface DataCodeConstant
{
    /**
     * FunctionName：encode
     * Description：编码
     * Author：lwl
     * @param string $string
     * @return string
     */
    public static function encode(string $string): string;


    /**
     * FunctionName：decode
     * Description：解码
     * Author：lwl
     * @param string $string
     * @return string
     */
    public static function decode(string $string): string;
}