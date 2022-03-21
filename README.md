Random Nickname 自动生成昵称
====

[![Author](https://img.shields.io/badge/author-@chinayin-blue.svg)](https://github.com/chinayin)
[![Software License](https://img.shields.io/badge/license-Apache--2.0-brightgreen.svg)](LICENSE)
[![Latest Version](https://img.shields.io/packagist/v/chinayin/random-nickname.svg)](https://packagist.org/packages/chinayin/random-nickname)
[![Build Status](https://travis-ci.org/chinayin/random-nickname.svg)](https://travis-ci.org/chinayin/random-nickname)
[![Total Downloads](https://img.shields.io/packagist/dt/chinayin/random-nickname.svg)](https://packagist.org/packages/chinayin/random-nickname)
![php 7.2+](https://img.shields.io/badge/php-min%207.2-red.svg)

安装
----

运行环境要求 PHP 7.2 及以上版本。

```bash
composer require chinayin/random-nickname
```

使用
----

```php

# 生成单个
RandomNickname::generate();

# 生成多个
RandomNickname::batchGenerate();

```

结果样例
----

```php
["秀发爱魔镜","金鱼爱胡萝卜","长情的翅膀","黑米爱草丛","秋天与猎豹","尊云与路灯","缥缈的摩托","沉默的蓝天","舞蹈和小蜜蜂","花卷与期待"]
["路灯爱小海豚","蜻蜓爱大侠","口红爱含羞草","水壶和音响","受伤的星月","西牛与微笑","落后的小猫咪","背包爱玫瑰","奇异果爱裙子","钻石爱蜜粉"]
```
