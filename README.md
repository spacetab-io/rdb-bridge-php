RDB Bridge 
==========

[![CircleCI](https://circleci.com/gh/spacetab-io/rdb-bridge-php/tree/master.svg?style=svg)](https://circleci.com/gh/spacetab-io/rdb-bridge-php/tree/master)
[![codecov](https://codecov.io/gh/spacetab-io/rdb-bridge-php/branch/master/graph/badge.svg)](https://codecov.io/gh/spacetab-io/rdb-bridge-php)

[Rdb](https://github.com/spacetab-io/rdb-php) bridge to use migration and seed commands with our [configuration](https://github.com/spacetab-io/configuration-php).  

## Installation

```bash
composer require spacetab-io/rdb-bridge
```

## Usage

Project structure:

```text
├── bin
│   └── service
├── configuration <----- Configuration at project root.
│   ├── defaults
│   │   ├── log.yaml
│   │   ├── server.yaml
│   │   └── db.yaml
│   ├── local
│   │   └── db.yaml
├── database
│   ├── migrations
│   └── seeds
├── phpunit.xml
├── src
├── tests
├── vendor
├── composer.json
├── composer.lock
├── Dockerfile
└── README.md
```

Runs migrations and read config from project `configuration` folder:

```bash
vendor/bin/rdb-bridge migrate:up -i && bin/service run
```

## Depends

* \>= PHP 7.4
* Composer for install package

## License

The MIT License

Copyright © 2020 spacetab.io, Inc. https://spacetab.io

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

