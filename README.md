# dataCodes
数据编码&amp;解码

### 1.下载
```angular2html
composer require liuweiliang/data-codes dev-main
```

### 2 配置服务
```angular2html
config/app.php
    \Liuweiliang\DataCode\DataCodeProvider::class
```

### 3 发布服务 输入对应的 服务编号 
```angular2html
php artisan vendor:publish 
```

### 4
```angular2html
数据编码:
    DataCodeService::encode('待加密字符串');


数据解码:
    DataCodeService::decode('待解密字符串')
```