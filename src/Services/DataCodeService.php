<?php
/**
 * Copyright (C), 2021-2021, https://github.com/lwlzq/dataCodec.git.
 * FileName: DataCodeService.php
 * Description: 服务层
 *
 * @author lwl
 * @Create Date    2021/9/4 16:46
 * @Update Date    2021/9/4 16:46 By lwl
 * @version v1.0
 */

namespace Liuweiliang\DataCode\Services;

use Liuweiliang\DataCode\Constants\DataCodeConstant;

class DataCodeService implements DataCodeConstant
{
    /**
     * FunctionName：encode
     * Description：编码
     * Author：lwl
     * @param string $string
     * @return string
     */
    public static function encode(string $string): string
    {
        $config = config('datacode');
        $character = base64_encode($string);
        $letters = $config['letter'];
        foreach ($letters as $key => $letter) {
            $character = str_replace($key, $letter, $character);
        }
        return $character . $config['suffix'];
    }


    /**
     * FunctionName：decode
     * Description：解码
     * Author：lwl
     * @param string $string
     * @return string
     */
    public static function decode(string $string): string
    {
        $config = config('datacode');
        $character = str_replace($config['suffix'], '', $string);
        $letters = array_flip($config['letter']);
        foreach ($letters as $key => $letter) {
            $character = str_replace($key, $letter, $character);
        }
        return base64_decode($character);
    }
}
