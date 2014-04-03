TextMagicSMS
============================

This is a copy of the [TextMagicSMS](http://api.textmagic.com/https-api/sms-api-php-wrapper) API for Composer Projects.

The files were modified and adapted to PSR-0 and others Design Patterns.


## Install

**Via Composer**

Add the Package to Composer

`composer.json`

```json

{

    "require": {
        "textmagic/smsphp": "dev-master"
    }

}


```

```bash

php composer.phar update

```

### Usage

```php

use TextMagicSMS\TextMagicAPI;

$api = new TextMagicAPI(array
    (
        'username' => 'username',
        'password' => 'your_api_password'
    )
);

$this->setExpectedException('TextMagicSMS\Exception\AuthenticationException');
$text = 'Hello World';



$phones = array
    (
        // Country Number + Phone Number
        554299881234,  // Phone1
        554299881235,  // Phone2
        554299881236   // Phone4
    );

$is_unicode = true;
$this->api->send($text, $phones, $is_unicode);

```