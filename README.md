ZF2 BoilerApp "Database" module
=====================

[![Build Status](https://travis-ci.org/zf2-boiler-app/app-db.png?branch=master)](https://travis-ci.org/zf2-boiler-app/app-db)
[![Latest Stable Version](https://poser.pugx.org/zf2-boiler-app/app-db/v/stable.png)](https://packagist.org/packages/zf2-boiler-app/app-db)
[![Total Downloads](https://poser.pugx.org/zf2-boiler-app/app-db/downloads.png)](https://packagist.org/packages/zf2-boiler-app/app-db)
![Code coverage](https://raw.github.com/zf2-boiler-app/app-test/master/ressources/100%25-code-coverage.png "100% code coverage")

NOTE : This module is in heavy development, it's not usable yet.
If you want to contribute don't hesitate, I'll review any PR.

Introduction
------------

__ZF2 BoilerApp "Database" module__ is a Zend Framework 2 module that provides database core of ZF2 Boiler-App

Requirements
------------

* [Zend Framework 2](https://github.com/zendframework/zf2) (latest master)
* [Doctrine 2 ORM Module](https://github.com/doctrine/DoctrineORMModule) (latest master)

Installation
------------

### Main Setup

#### By cloning project

1. Clone this project into your `./vendor/` directory.

#### With composer

1. Add this project in your composer.json:

    ```json
    "require": {
        "zf2-boiler-app/app-db": "1.0.*"
    }
    ```

2. Now tell composer to download __ZF2 BoilerApp "Database" module__ by running the command:

    ```bash
    $ php composer.phar update
    ```

#### Post installation

1. Enabling BoilerAppDb and Doctrine modules in your `application.config.php` file.

    ```php
    return array(
        'modules' => array(
            // ...
            'DoctrineModule',
            'DoctrineORMModule',
            'BoilerAppDb',
        ),
        // ...
    );
    ```
    
2. Allowing Mysqli reconnexion in php.ini
	
	```ini
	mysqli.reconnect = On
	```

## Features

#### Doctrine

###### Commons
- Repositories abstract factory
- Support entity's date of create and update

###### DBAL types
- Email
- Md5 hash
- Enum
