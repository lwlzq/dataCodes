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
    private static $config = [];

    /**
     * DataCodeService constructor.
     */
    public function __construct()
    {
        self::$config = config('datacodes');//获取对照字典
    }

    /**
     * FunctionName：encode
     * Description：编码
     * Author：lwl
     * @param string $string
     * @return string
     */
    public static function encode(string $string): string
    {
        $character = base64_encode($string);
        $letters = self::$config['letter'];
        foreach ($letters as $key => $letter) {
            $character = str_replace($key, $letter, $character);
        }
        return $character . self::$config['suffix'];
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
        $character = str_replace(self::$config['suffix'], '', $string);
        $letters = array_flip(self::$config['letter']);
        foreach ($letters as $key => $letter) {
            $character = str_replace($key, $letter, $character);
        }
        return base64_decode($character);
    }
}
