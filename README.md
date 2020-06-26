# chubbyphp-framework-skeleton

[![Build Status](https://api.travis-ci.org/chubbyphp/chubbyphp-framework-skeleton.png?branch=master)](https://travis-ci.org/chubbyphp/chubbyphp-framework-skeleton)
[![Coverage Status](https://coveralls.io/repos/github/chubbyphp/chubbyphp-framework-skeleton/badge.svg?branch=master)](https://coveralls.io/github/chubbyphp/chubbyphp-framework-skeleton?branch=master)

## Description

A minimal skeleton to start with a minimal php project.

## Requirements

 * php: ^7.2
 * [chubbyphp/chubbyphp-config][20]: ^2.1.1
 * [chubbyphp/chubbyphp-container][21]: ^1.1
 * [chubbyphp/chubbyphp-framework][22]: ^3.0
 * [chubbyphp/chubbyphp-framework-router-fastroute][23]: ^1.0
 * [nikic/fast-route][24]: ^1.3
 * [slim/psr7][25]: ^1.0
 * [symfony/console][26]: ^4.4.9|^5.1

## Installation

Through [Composer](http://getcomposer.org) as [chubbyphp/chubbyphp-framework-skeleton][10].

```bash
composer create-project chubbyphp/chubbyphp-framework-skeleton myproject "dev-master"
```

## Server

### Builtin

```bash
APP_ENV=dev php -S localhost:10080 -t public public/index.php
```

## Copyright

Dominik Zogg 2020

[10]: https://travis-ci.org/chubbyphp/chubbyphp-framework-skeleton

[20]: https://packagist.org/packages/chubbyphp/chubbyphp-config
[21]: https://packagist.org/packages/chubbyphp/chubbyphp-container
[22]: https://packagist.org/packages/chubbyphp/chubbyphp-framework
[23]: https://packagist.org/packages/chubbyphp/chubbyphp-framework-router-fastroute
[24]: https://packagist.org/packages/nikic/fast-route
[25]: https://packagist.org/packages/slim/psr7
[26]: https://packagist.org/packages/symfony/console
