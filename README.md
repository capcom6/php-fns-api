# fns-api

FNS REST API Client.

#### Installation

Recommended method: [Composer](http://getcomposer.org):

```
$ composer require softc/fns-api
```

#### Usage

Initialize and create receipt:

```php
<?php

require 'vendor/autoload.php';

$client = new SoftC\FnsApi\Client(<API_token>);

$companies = $client->egrGet('1032502271548');

var_dump($companies);

```

#### License

See LICENSE file.
